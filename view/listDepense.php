<?php include('commun/header.php'); ?>

<h2 class="text-center text-secondary mb-4">Historique des Dépenses</h2>

<?php include('../bdd/bdd.php');
$requete = $bdd->prepare('SELECT * FROM depense');
$requete->execute();
$depenses = $requete->fetchAll();

$req = $bdd->prepare('SELECT SUM(montant) FROM depense');
$req->execute();
$total = $req->fetch();
?>

<div class="alert alert-danger text-center shadow-sm fs-4">
    Total des dépenses : <strong><?php echo number_format($total[0], 2, ',', ' '); ?> €</strong>
</div>

<div class="table-responsive shadow-sm rounded">
    <table class="table table-striped table-hover mb-0">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Libellé</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Montant</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($depenses as $depense) { ?>
                <tr>
                    <th scope="row"><?php echo $depense['id'] ?></th>
                    <td><?php echo htmlspecialchars($depense['libelle']) ?></td>
                    <td><?php echo htmlspecialchars($depense['categorie']) ?></td>
                    <td class="text-danger fw-bold">- <?php echo htmlspecialchars($depense['montant']) ?> €</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('commun/footer.php'); ?>