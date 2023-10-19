<?php

namespace App\Controllers;

use App\Models\userModel;

class LoginController extends BaseController
{

    public function signIn()
    {
        $session = session();
        $model = new userModel();
        $pseudo = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('IDENTIFIANTUTILISATEUR', $pseudo)->first();
        if ($data) {
            $pass = $data['MOTDEPASSEUTILISATEUR'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $sessionData = [
                    'IDUTILISATEUR' => $data['IDUTILISATEUR'],
                    'IDENTIFIANTUTILISATEUR' => $data['IDENTIFIANTUTILISATEUR'],
                    'NOMUTILISATEUR' => $data['NOMUTILISATEUR'],
                    'PRENOMUTILISATEUR' => $data['PRENOMUTILISATEUR'],
                    'isLogged' => TRUE
                ];
                $session->set($sessionData);
                return redirect()->to(base_url('liste'));
            } else {
                $session->setFlashdata('msg', 'Erreur utilisateur ou mot de passe');
                return redirect()->to(base_url('/'));
            }
        } else {
            $session->setFlashdata('msg', 'Erreur utilisateur ou mot de passe');
            return redirect()->to(base_url('/'));
        }
    }

    public function signOut()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

}
