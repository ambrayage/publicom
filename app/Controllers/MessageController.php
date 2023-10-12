<?php

namespace App\Controllers;

class MessageController extends BaseController
{
    public function creationMessage()
    {
        echo view('pages/create_messages');
      
    }

}
