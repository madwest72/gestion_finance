<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Budget - Accueil</title>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-wallet2"></i> Fin du mois</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="view/salaire.php">Ajouter Salaire</a></li>
                    <li class="nav-item"><a class="nav-link" href="view/depense.php">Ajouter Dépense</a></li>
                    <li class="nav-item"><a class="nav-link" href="view/epargne.php">Ajouter Épargne</a></li>
                    <li class="nav-item"><a class="nav-link" href="view/listSalaire.php">Liste Salaires</a></li>
                    <li class="nav-item"><a class="nav-link" href="view/listDepense.php">Liste Dépenses</a></li>
                    <li class="nav-item"><a class="nav-link" href="view/listEpargne.php">Liste Épargnes</a></li>
                    <li class="nav-item"><a class="nav-link" href="view/recap.php">Récapitulatif</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="p-5 mb-4 bg-white rounded-3 shadow-sm text-center">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-primary"><i class="bi bi-bar-chart-line-fill"></i> Bienvenue sur "Fin du mois"</h1>
                <p class="col-md-8 mx-auto fs-4 text-secondary mt-3">
                    L'application simple et efficace pour gérer tes revenus, suivre tes dépenses et garder le contrôle sur ton épargne mensuelle.
                </p>
                <div class="mt-4">
                    <a href="view/recap.php" class="btn btn-primary btn-lg px-4 me-md-2 shadow-sm"><i class="bi bi-eye"></i> Voir mon tableau de bord</a>
                    <a href="view/depense.php" class="btn btn-outline-danger btn-lg px-4 shadow-sm"><i class="bi bi-cart-dash"></i> Nouvelle dépense</a>
                </div>
            </div>
        </div>

        <div class="row align-items-md-stretch text-center">
            <div class="col-md-6 mb-3">
                <div class="h-100 p-5 bg-success text-white rounded-3 shadow-sm">
                    <h2><i class="bi bi-cash-coin"></i> Mes Salaires</h2>
                    <p>Enregistre tes rentrées d'argent pour savoir exactement de quel budget tu disposes ce mois-ci.</p>
                    <a href="view/salaire.php" class="btn btn-outline-light mt-2">Déclarer un salaire</a>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="h-100 p-5 bg-info text-white rounded-3 shadow-sm">
                    <h2><i class="bi bi-safe"></i> Mon Épargne</h2>
                    <p>Mets de l'argent de côté pour tes futurs projets et suis l'évolution de tes économies en toute sérénité.</p>
                    <a href="view/epargne.php" class="btn btn-outline-light mt-2">Mettre de côté</a>
                </div>
            </div>
        </div>

    </div>

</body>

</html>