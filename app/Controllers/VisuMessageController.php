<?php

namespace App\Controllers;
use App\Models\messageModel;

class VisuMessageController extends BaseController
{
    public function view()
    {

        $messageModel = new messageModel();
        $dataMessages = $messageModel->where('STATUTMESSAGE', 1)->findAll();
      
        return view('/pages/visualisation_messages', [
            'listemessage' => $dataMessages,
            'title' => 'Visualtion du message'
        ]);
    }
}
