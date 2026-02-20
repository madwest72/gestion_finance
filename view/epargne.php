<?php include('commun/header.php'); ?>

<?php include("../bdd/bdd.php");

if (isset($_POST['mois'])) {
    $requete = $bdd->prepare("INSERT INTO epargne(mois, reste) VALUES(:mois, :reste)");
    $requete->bindParam(':mois', $_POST['mois']);
    $requete->bindParam(':reste', $_POST['reste']);
    $requete->execute();

    header('location:http://127.0.0.1/BTSSIO/info%20jeudi/4dec/view/listEpargne.php');
}
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm mt-5">
            <div class="card-header bg-info text-white text-center">
                <h3 class="mb-0"><i class="bi bi-piggy-bank"></i> Nouvelle Épargne</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Mois concerné</label>
                        <input type="text" name="mois" class="form-control" required placeholder="Ex: Janvier">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Montant mis de côté (€)</label>
                        <input type="number" step="0.01" name="reste" class="form-control" required>
                    </div>
                    <button type="submit" name="valider" class="btn btn-info text-white w-100">Valider l'épargne</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('commun/footer.php'); ?>