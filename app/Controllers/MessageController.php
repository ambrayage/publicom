<?php

namespace App\Controllers;

use App\Models\historiqueModel;
use App\Models\messageModel;

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
        date_default_timezone_set('Europe/Paris');

        $titre = $this->request->getVar('titre');
        $message = $this->request->getVar('contenu');
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
            'DATEHEUREMESSAGE' => $dateHeure,
            'STATUTMESSAGE' => $statut,
            'CREATEURMESSAGE' => $pseudo
        ];

        $messageModel->insert($data);
        return redirect()->to(base_url('liste'));



    }
    public function liste()
    {
        $modelMessages = new messageModel();
        $dataMessages = $modelMessages->findAll();
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
            'HISTORIQUEDATEHEUREMESSAGE' => $dataHistoriqueMessage['DATEHEUREMESSAGE']
        ];

        $data = [
            'TITREMESSAGE' => $titreModifier,
            'TEXTEMESSAGE' => $contenuModifier,
            'DATEHEUREMESSAGE' => $dateHeure,
            'STATUTMESSAGE' => $statut
        ];

        $modelModifierMessage->update($idMessage, $data);
        $modelHistorique->insert($dataHistorique);

        return redirect()->to(base_url('liste'));

    }

    public function supprimerMessage()
    {

        $messagesASupprimer = $this->request->getPost('messages');

        if (!empty($messagesASupprimer)) {
            $messageModel = new messageModel();

         
            foreach ($messagesASupprimer as $idMessage) {
                $messageModel->delete($idMessage);
            }

          
            return redirect()->to(base_url('liste'))->with('success', 'Les messages sélectionnés ont été supprimés avec succès.');
        } else {
            
            return redirect()->to(base_url('liste'))->with('error', 'Aucun message sélectionné pour la suppression.');
        }

    }

}