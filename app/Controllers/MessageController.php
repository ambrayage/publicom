<?php

namespace App\Controllers;

class MessageController extends BaseController
{
    public function creationMessage()
    {
        return view('pages/create_messages');
      
    }
    public function liste(){
        return view('pages/list_messages', [
            "title" => "Liste des messages"
        ]);
    }

}
