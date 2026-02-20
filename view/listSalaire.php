<?php include('commun/header.php'); ?>

<h2 class="text-center text-secondary mb-4">Historique des Salaires</h2>

<?php include('../bdd/bdd.php');
$requete = $bdd->prepare('SELECT * FROM salaire');
$requete->execute();
$salaires = $requete->fetchAll();

$req = $bdd->prepare('SELECT SUM(montant) FROM salaire');
$req->execute();
$total = $req->fetch();
?>

<div class="alert alert-success text-center shadow-sm fs-4">
    Total des salaires : <strong><?php echo number_format($total[0] ?? 0, 2, ',', ' '); ?> €</strong>
</div>

<div class="table-responsive shadow-sm rounded">
    <table class="table table-striped table-hover mb-0">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Entreprise (Libellé)</th>
                <th scope="col">Montant</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salaires as $salaire) { ?>
                <tr>
                    <th scope="row"><?php echo $salaire['id'] ?></th>
                    <td><?php echo htmlspecialchars($salaire['libelle']) ?></td>
                    <td class="text-success fw-bold">+ <?php echo htmlspecialchars($salaire['montant']) ?> €</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('commun/footer.php'); ?>