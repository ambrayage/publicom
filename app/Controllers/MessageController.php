<?php

namespace App\Controllers;
use App\Models\messageModel;
class MessageController extends BaseController
{
    public function creationMessage()
    {
        return view('pages/create_messages', [
            "title" => "Ajouter un message"
        ]);

    }

    public function creation(){

        $session = session();
        $messageModel = new messageModel();
        date_default_timezone_set('Europe/Paris');

        $titre = $this->request->getVar('titre');
        $message = $this->request->getVar('contenu');
        $idutilisateur = $_SESSION['IDUTILISATEUR'];
        $pseudo = $_SESSION['IDENTIFIANTUTILISATEUR'];
        $dateHeure = date('y-m-d h:i:s');
        if($statut = $this->request->getVar('statut')){
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
            'title'=> 'Modifier un message'
        ]);
    }

}