<?php

namespace App\Controllers;
use App\Models\messageModel;

class VisuMessageController extends BaseController
{
    public function view()
    {

        $messageModel = new messageModel();
        $dataMessages = $messageModel->findAll();
      
        return view('/pages/visualisation_messages', [
            'listemessage' => $dataMessages,
            'title' => 'visualtion du message'
        ]);
    }
}
