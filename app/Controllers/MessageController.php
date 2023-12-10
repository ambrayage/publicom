<?php

namespace App\Controllers;

use App\Models\historiqueModel;
use App\Models\messageModel;
use App\Models\userModel;
use CodeIgniter\Files\File;
use PhpParser\Node\VarLikeIdentifier;

class MessageController extends BaseController
{
    public function creationMessage()
    {
        return view('pages/create_messages', [
            "title" => "Ajouter un message"
        ]);
    }

    public function creation()
    {

        $session = session();
        $messageModel = new messageModel();
        $historiqModel = new historiqueModel();
        date_default_timezone_set('Europe/Paris');

        $titre = $this->request->getVar('titre');
        $message = $this->request->getVar('contenu');
        $police = $this->request->getVar('police');
        $couleur = $this->request->getVar('colortext');

        if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $image = file_get_contents($_FILES['image']['tmp_name']);
        }
        $idutilisateur = $_SESSION['IDUTILISATEUR'];
        $pseudo = $_SESSION['IDENTIFIANTUTILISATEUR'];
        $dateHeure = date('y-m-d h:i:s');
        if ($statut = $this->request->getVar('statut')) {
            $statut = 1;
        } else {
            $statut = 0;
        }

        $data = [
            'IDUTILISATEUR' => $idutilisateur,
            'TITREMESSAGE' => $titre,
            'TEXTEMESSAGE' => $message,
            'POLICEMESSAGE' => $police,
            'COULEURMESSAGE' => $couleur,
            'IMAGEMESSAGE' => $image,
            'DATEHEUREMESSAGE' => $dateHeure,
            'STATUTMESSAGE' => $statut,
            'CREATEURMESSAGE' => $pseudo
        ];

        $messageModel->insert($data);
        $message_id = $messageModel->getInsertID();

        $dataHistorique = [
            'IDMESSAGE' => $message_id,
            'IDUTILISATEUR' => $idutilisateur,
            'HISTORIQUETITREMESSAGE' => $titre,
            'HISTORIQUETEXTEMESSAGE' => $message,
            'HISTORIQUEPOLICEMESSAGE' => $police,
            'HISTORIQUECOULEURMESSAGE' => $couleur,
            'HISTORIQUEDATEHEUREMESSAGE' => $dateHeure
        ];

        $historiqModel->insert($dataHistorique);
        return redirect()->to(base_url('liste'));
    }
    public function liste()
    {
        $modelMessages = new messageModel();
        $dataMessages = $modelMessages->findAll();
        // var_dump($dataMessages);
        // die();
        return view('pages/list_messages', [
            'listeMessage' => $dataMessages,
            "title" => "Liste des messages"
        ]);
    }

    public function modifierMessage()
    {
        $idMessage = $_GET['id'];
        $modelModifierMessage = new messageModel();
        $dataModifierMessages = $modelModifierMessage->where('IDMESSAGE', $idMessage)->findAll();

        return view('pages/edit_messages', [
            'listeModifierMessage' => $dataModifierMessages,
            'title' => 'Modifier un message'
        ]);
    }

    public function modifier()
    {

        $modelModifierMessage = new messageModel();
        $modelHistorique = new historiqueModel();

        date_default_timezone_set('Europe/Paris');
        $dateHeure = date('y-m-d h:i:s');

        $session = session();
        $idutilisateur = $_SESSION['IDUTILISATEUR'];

        $idMessage = $_GET['id'];
        $titreModifier = $this->request->getVar('titre');
        $contenuModifier = $this->request->getVar('contenu');
        $police = $this->request->getVar('police');
        $couleur = $this->request->getVar('couleur');

        if ($statut = $this->request->getVar('statut')) {
            $statut = 1;
        } else {
            $statut = 0;
        }

        $dataHistoriqueMessage = $modelModifierMessage->where('IDMESSAGE', $idMessage)->first();

        $dataHistorique = [
            'IDMESSAGE' => $idMessage,
            'IDUTILISATEUR' => $idutilisateur,
            'HISTORIQUETITREMESSAGE' => $dataHistoriqueMessage['TITREMESSAGE'],
            'HISTORIQUETEXTEMESSAGE' => $dataHistoriqueMessage['TEXTEMESSAGE'],
            'HISTORIQUEPOLICEMESSAGE' => $police,
            'HISTORIQUECOULEURMESSAGE' => $couleur,
            'HISTORIQUEDATEHEUREMESSAGE' => $dataHistoriqueMessage['DATEHEUREMESSAGE']
        ];

        $data = [
            'TITREMESSAGE' => $titreModifier,
            'TEXTEMESSAGE' => $contenuModifier,
            'POLICEMESSAGE' => $police,
            'COULEURMESSAGE' => $couleur,
            'DATEHEUREMESSAGE' => $dateHeure,
            'STATUTMESSAGE' => $statut
        ];

        $modelModifierMessage->update($idMessage, $data);
        $modelHistorique->insert($dataHistorique);

        return redirect()->to(base_url('liste'));
    }

    public function supprimerMessage()
    {

        $messagesASupprimer = $this->request->getPost('message[]');

        if (!empty($messagesASupprimer)) {
            $messageModel = new messageModel();
            $messageHistorique = new historiqueModel();


            foreach ($messagesASupprimer as $messagesSuppr) {
                $messageHistorique->where(['IDMESSAGE'=> $messagesSuppr])->delete();
                $messageModel->delete($messagesSuppr);
                
            }



            return redirect()->to(base_url('liste'))->with('success', 'Les messages sélectionnés ont été supprimés avec succès.');
        } else {

            return redirect()->to(base_url('liste'))->with('error', 'Aucun message sélectionné pour la suppression.');
        }
    }

    public function historique()
    {

        $idMessage = $_GET['id'];
        $modelUtilisateur = new userModel();
        $modelHistorique = new historiqueModel;
        $dataHistoriques = $modelHistorique->join('utilisateur', 'utilisateur.IDUTILISATEUR = historique.IDUTILISATEUR')->where('IDMESSAGE', $idMessage)->orderBy('HISTORIQUEDATEHEUREMESSAGE', 'DESC')->findAll();
        return view('pages/historique_edit', [
            'dataHistorique' => $dataHistoriques,
            'title' => 'Historique des messages',
        ]);
    }
}
