<?php

namespace App\Controllers;

class VisuMessageController extends BaseController
{
    public function view()
    {
        return  view('pages/visualisation_messages.php', [
            'title' => 'montitre'
        ]);
    }
}
