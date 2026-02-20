<?php include('commun/header.php'); ?>

<h2 class="text-center text-secondary mb-4">Historique de l'Épargne</h2>

<?php include('../bdd/bdd.php');
$requete = $bdd->prepare('SELECT * FROM epargne');
$requete->execute();
$epargnes = $requete->fetchAll();

$req = $bdd->prepare('SELECT SUM(reste) FROM epargne');
$req->execute();
$total = $req->fetch();
?>

<div class="alert alert-info text-center text-white shadow-sm fs-4">
    Total épargné : <strong><?php echo number_format($total[0] ?? 0, 2, ',', ' '); ?> €</strong>
</div>

<div class="table-responsive shadow-sm rounded">
    <table class="table table-striped table-hover mb-0">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mois</th>
                <th scope="col">Montant</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($epargnes as $epargne) { ?>
                <tr>
                    <th scope="row"><?php echo $epargne['id'] ?></th>
                    <td><?php echo htmlspecialchars($epargne['mois']) ?></td>
                    <td class="text-primary fw-bold"><?php echo htmlspecialchars($epargne['reste']) ?> €</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('commun/footer.php'); ?>