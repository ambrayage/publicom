<!DOCTYPE html>
<html lang="en">

<head>
    <script src="assets/js/bootstrap.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="images/logo_publicom.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/sign-in.css" rel="stylesheet">
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white">Visualiser messages</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Liste des messages d'information</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Créer un message</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Recherche un message" aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-warning">Déconnexion</button>
                </div>
            </div>
        </div>
    </header>

    <?= $this->renderSection('content') ?>

    <footer>

        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>

                <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Accueil</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Conditions d'utilisation</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Politique de confidentialité</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">À propos</a></li>
                </ul>
            </footer>
        </div>
    </footer>
</body>

</html>