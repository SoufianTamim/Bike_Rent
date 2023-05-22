<?php
// include "GestionBrand.php";
include "./managers/gestionBrand.php";
// Trouver tous les employés depuis la base de données
$GestionBrands = new GestionBrands();
$Brands = $GestionBrands->RechercherTous();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./UI/Style/style.css">
    <?php
    require_once(__ROOT__ . '/UI/Style/Bootstrap.php');
?>
    <title>Gestion des brand</title>
</head>

<body class="P-5">
    <div class="container mt-5">
        <div class="text-center p-5">
            <div class="text-end">
                <a href="./UI/Ajouter.php" class="mb-3 btn btn-primary">Ajouter un Brand</a>
            </div>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Action</th>
                </tr>
                <?php
            foreach ($Brands as $Brand) {
                ?>
                    <tr>
                        <td>
                            <?= $Brand->getName() ?>
                        </td>
                        <td>
                            <?= $Brand->getCompany() ?>
                        </td>
                        <td>
                            <a class="btn btn-secondary"
                                href="./UI/editer.php?id=<?php echo $Brand->getid() ?>">Éditer</a>
                            <a class="btn btn-danger"
                                href="./UI/supprimer.php?id=<?php echo $Brand->getid() ?>">Supprime</a>
                            <a class="btn btn-success" href="./UI/Bikes.php?id=<?php echo $Brand->getid() ?>">Bikes</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>


</body>

</html>