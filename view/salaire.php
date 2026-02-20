<?php include('commun/header.php'); ?>

<?php include("../bdd/bdd.php");

if (isset($_POST['libelle'])) {
    // Exécution pour envoyer à la BDD 
    $requete = $bdd->prepare("INSERT INTO salaire(libelle, montant) VALUES(:libelle, :montant)");
    $requete->bindParam(':libelle', $_POST['libelle']);
    $requete->bindParam(':montant', $_POST['montant']);
    $requete->execute(); // <-- Correction ici : j'ai enlevé le "return"

    header('location:http://127.0.0.1/BTSSIO/info%20jeudi/4dec/view/listSalaire.php');
}
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm mt-5">
            <div class="card-header bg-success text-white text-center">
                <h3 class="mb-0"><i class="bi bi-cash-coin"></i> Nouveau Salaire</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom de l'entreprise</label>
                        <input type="text" name="libelle" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Montant (€)</label>
                        <input type="number" step="0.01" name="montant" class="form-control" required>
                    </div>
                    <button type="submit" name="valider" class="btn btn-success w-100">Valider le salaire</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('commun/footer.php'); ?>