<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <link rel="shortcut icon" href="images/logo_publicom.png" type="image/x-icon">
    <title>Publicom | Ajouter Utilisateur</title>
    <script src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">





    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="/images/logo_publicom.png" alt="logo" width="120" height="120">
                <h2>Ajouter un utilisateur</h2>
                <p class="lead">Saisir les informations</p>
            </div>


            <div class="container col-lg-8">
                <h4 class="mb-3">Saisir les informations de l'utilisateur</h4>
                <form class="needs-validation" method="post" action="<?= url_to('ajouter.utilisateur') ?>">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                name="firstName" required>
                            <div class="invalid-feedback">
                                Prénom requis.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                name="lastName" required>
                            <div class="invalid-feedback">
                                Nom requis.
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <label for="lastName" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" placeholder="Mot de passe"
                                value="" name="password" required>
                            <div class="invalid-feedback">
                                Mot de passe requis.
                            </div>
                        </div>




                        <?php
                       $erreur = session('erreur');
                       $success = session('success');
                       if ($erreur) {
                        foreach ($erreur as $mess){
                            echo '<div class="alert alert-danger">' . esc($mess) . '</div>';
                        }
                       } elseif ($success) {
                           echo '<div class="alert alert-success">' . esc($success) . '</div>';
                       }
                       ?>



                        <hr class="my-4">


                        <button class="w-100 btn btn-primary btn-lg" type="submit">Ajouter l'utilisateur</button>



                </form>
            </div>
    </div>
    </main>

    </div>
    <script src="assets/js/bootstrap.js"></script>

</body>

</html>