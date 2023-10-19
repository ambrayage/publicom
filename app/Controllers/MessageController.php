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
    public function liste()
    {
        return view('pages/list_messages', [
            "title" => "Liste des messages"
        ]);
    }

    public function modifierMessage()
    {
        return view('pages/edit_messages', [
            'title'=> 'Modifier un message'
        ]);
    }

}