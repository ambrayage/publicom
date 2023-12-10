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

        function verifierMotDePasse($password)
        {
            $erreurs = [];

            if (strlen($password) < 12) {
                $erreurs[] = 'Le mot de passe doit contenir au moins 12 caractères.';
            }

            if (!preg_match("/[A-Z]/", $password)) {
                $erreurs[] = 'Le mot de passe doit contenir au moins une majuscule.';
            }

            if (!preg_match('/[0-9]/', $password)) {
                $erreurs[] = 'Le mot de passe doit contenir au moins un chiffre.';
            }

            if (!preg_match('/[\W]/', $password)) {
                $erreurs[] = 'Le mot de passe doit contenir au moins un caractère spécial.';
            }

            return $erreurs;
        }

        $model = new userModel();
        $prenom = $this->request->getVar('firstName');
        $nom = $this->request->getVar('lastName');
        $password = $this->request->getVar('password');
        $username = strtolower($prenom . '.' . $nom);

        $erreurs = verifierMotDePasse($password);

        if (!empty($erreurs)) {
            return redirect()->to(base_url('ajout-utilisateur'))->with('erreur', $erreurs);
        } else {

            $data = [
                'IDENTIFIANTUTILISATEUR' => $username,
                'MOTDEPASSEUTILISATEUR' => password_hash($password, PASSWORD_DEFAULT),
                'NOMUTILISATEUR' => $nom,
                'PRENOMUTILISATEUR' => $prenom
            ];

            if ($model->insert($data)) {
                $succesMessage = 'Utilisateur crée avec succès !';
                return redirect()->to(base_url('ajout-utilisateur'))->with('success', $succesMessage);
            }
        }

    }
}