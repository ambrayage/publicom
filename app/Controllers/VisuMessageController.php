<?php

namespace App\Controllers;

use App\Models\messageModel;

class VisuMessageController extends BaseController
{
    public function view()
    {

        $messageModel = new messageModel();

        $id = $this->request->getVar("id") ?? 0;

        $dataMessagesActu = ($id == 0 ? $messageModel->where('STATUTMESSAGE', 1)->first() : $messageModel->where('IDMESSAGE', $id)->first());
        $id = ($id == 0 ? $dataMessagesActu["IDMESSAGE"] : $id);
        $dataMessagePrec = $messageModel->where('STATUTMESSAGE', 1)->where("IDMESSAGE <", $id)->orderBy("IDMESSAGE", "DESC")->first();
        $dataMessageSuiv = $messageModel->where('STATUTMESSAGE', 1)->where("IDMESSAGE >", $id)->orderBy("IDMESSAGE", "ASC")->first();

        return view('/pages/visualisation_messages', [
            'msgActu' => $dataMessagesActu,
            'msgPrec' => $dataMessagePrec,
            'msgSuiv' => $dataMessageSuiv,
            'title' => 'Visualtion du message'
        ]);
    }


    public function get_msg()
    {
        $messModelEvo = new messageModel();
        $id = $this->request->getVar('id');
        $messEvoRequest = $messModelEvo->where('IDMESSAGE >',$id)->orderBy('IDMESSAGE')->limit(1);
        var_dump($messEvoRequest);
        die();
        return $this->response->setJSON($messEvoRequest);
    }
}
