<?php

namespace App\Controllers;

use App\Models\userModel;

class UtilisateurController extends BaseController
{
    public function view()
    {
        echo view('pages/create_user/add_user.php');
    }

    public function ajouterUtilisateur()
    {
        $model = new userModel();
        $prenom = $this->request->getVar('firstName');
        $nom = $this->request->getVar('lastName');
        $password = $this->request->getVar('password');
        $username = $prenom . '.' . $nom;


        $data = [
            'IDENTIFIANTUTILISATEUR' => $username,
            'MOTDEPASSEUTILISATEUR' => password_hash($password, PASSWORD_DEFAULT),
            'NOMUTILISATEUR' => $nom,
            'PRENOMUTILISATEUR' => $prenom
        ];

        $model->insert($data);
        return redirect()->to(base_url('ajout-utilisateur'));

    }
}