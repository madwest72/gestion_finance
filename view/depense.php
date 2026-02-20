<?php include('commun/header.php'); ?>

<?php include("../bdd/bdd.php");

if (isset($_POST['libelle'])) {
    $requete = $bdd->prepare("INSERT INTO depense(libelle, categorie, montant) VALUES(:libelle, :categorie, :montant)");
    $requete->bindParam(':libelle', $_POST['libelle']);
    $requete->bindParam(':categorie', $_POST['categorie']);
    $requete->bindParam(':montant', $_POST['montant']);
    $requete->execute();
    header('location:http://127.0.0.1/BTSSIO/info%20jeudi/4dec/view/listDepense.php');
}
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm mt-5">
            <div class="card-header bg-danger text-white text-center">
                <h3 class="mb-0"><i class="bi bi-cart-dash"></i> Nouvelle Dépense</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom de la dépense</label>
                        <input type="text" name="libelle" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Catégorie</label>
                        <input type="text" name="categorie" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Montant (€)</label>
                        <input type="number" step="0.01" name="montant" class="form-control" required>
                    </div>
                    <button type="submit" name="valider" class="btn btn-danger w-100">Valider la dépense</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('commun/footer.php'); ?>