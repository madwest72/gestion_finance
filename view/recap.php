<?php include('commun/header.php'); ?>
<?php include("../bdd/bdd.php");

$req = $bdd->prepare('SELECT SUM(montant) FROM depense');
$req->execute();
$totaldepense = $req->fetch();

$req = $bdd->prepare('SELECT SUM(reste) FROM epargne');
$req->execute();
$totalepargne = $req->fetch();

$req = $bdd->prepare('SELECT SUM(montant) FROM salaire');
$req->execute();
$totalsalaire = $req->fetch();

// Calcul du reste à vivre
$resteAvivre = $totalsalaire[0] - $totaldepense[0] - $totalepargne[0];
?>

<h1 class="text-center text-primary mb-5"><i class="bi bi-bar-chart-fill"></i> Récapitulatif du mois</h1>

<div class="row text-center mb-4">
    <div class="col-md-4 mb-3">
        <div class="card text-white bg-success shadow h-100">
            <div class="card-body">
                <h5 class="card-title">Total Salaires</h5>
                <p class="card-text fs-2 fw-bold"><?php echo $totalsalaire[0] ?? 0; ?> €</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card text-white bg-danger shadow h-100">
            <div class="card-body">
                <h5 class="card-title">Total Dépenses</h5>
                <p class="card-text fs-2 fw-bold"><?php echo $totaldepense[0] ?? 0; ?> €</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card text-white bg-info shadow h-100">
            <div class="card-body">
                <h5 class="card-title">Total Épargne</h5>
                <p class="card-text fs-2 fw-bold"><?php echo $totalepargne[0] ?? 0; ?> €</p>
            </div>
        </div>
    </div>
</div>

<div class="alert <?php echo ($resteAvivre >= 0) ? 'alert-success' : 'alert-danger'; ?> text-center shadow-sm fs-4">
    Bilan (Reste à vivre) : <strong><?php echo $resteAvivre; ?> €</strong>
</div>

<?php include('commun/footer.php'); ?>