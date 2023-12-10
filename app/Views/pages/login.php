<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="assets/js/bootstrap.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Publicom | Se connecter</title>
    <link rel="shortcut icon" href="images/logo_publicom.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sign-in.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
   


    <main class="form-signin w-100 m-auto">
        <form method="post" action="<?= url_to('connexion') ?>">
            <img class="mb-4" src="images/logo_publicom.png" alt="" width="120" height="120">
            <h1 class="h3 mb-3 fw-normal">Connexion</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
                <label for="floatingInput">Identifiant</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Mot de passe </label>
            </div>
    
            <!-- <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                
                <label class="form-check-label" for="flexCheckDefault">
                    Se souvenir de moi
                </label>
               
            </div> -->
    
            <button class="btn btn-primary w-100 py-2" type="submit">Se connecter</button>
        </form>

        <?php

        $msg = session('msg');
        if($msg){
            echo '<br><div class="alert alert-danger">' . esc($msg) . '</div>';
        }

        ?>
    </main>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>