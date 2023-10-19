<!DOCTYPE html>
<html lang="en">

<head>
    <script src="assets/js/bootstrap.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Publicom | <?= $title ?></title>
    <link rel="shortcut icon" href="images/logo_publicom.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/sign-in.css" rel="stylesheet">
    <link href="assets/css/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/visu.css">

</head>

<body>
    <header class="p-3 text-bg-dark input-group">
        <div class="container-fluid">
            <?= helper('html'); ?>
            <?php
            $imageProperties = [
                'src' => 'images/logo_publicom.png',
                'alt' => 'logo',
                'class' => 'post_images',
                'width' => '50',
                'height' => '50',
            ]; ?>
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <?= img($imageProperties); ?>
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="mb-3 nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

                    <div class="rounded-start">
                        <li><a href="<?= route_to('visualisation.message') ?>"><button type="button" class="rounded-start btn btn-outline-success me-lg-3 ">Visualiser messages</button></a></li>
                    </div>
                    <li><a href="<?= route_to('liste.message') ?>"><button type="button" class="btn btn-outline-warning me-lg-3">Liste des messages d'information</button></a></li>
                    <li><a href="<?= route_to('page.creation') ?>"><button type="button" class="btn btn-outline-danger me-lg-3">Créer un message</button></a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Recherche un message" aria-label="Search">
                </form>

                <div class="text-end">
                    <form action="<?= url_to('deconnexion') ?>">
                        <button type="submit" class="btn btn-primary">Déconnexion</button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <?= $this->renderSection('content') ?>

    <footer class="bg-dark text-white d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-white container">&copy; 2023 Company, Inc</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none container">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Accueil</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Conditions d'utilisation</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Politique de confidentialité</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">À propos</a></li>
        </ul>
    </footer>

</body>

</html>