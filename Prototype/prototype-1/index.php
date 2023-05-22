<?php
include "./managers/GestionBrand.php";
$GestionBrands = new GestionBrands();
$brands = $GestionBrands->RechercherTous();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./UI/Style/style.css">
    <title>Gestion des employés</title>
</head>

<body>
    <div>
        <a href="./UI/Ajouter.php">Ajouter un brand</a>
        <table>
            <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Action</th>
            </tr>
            <?php
            foreach ($brands as $brand) {
                ?>
                <tr>
                    <td>
                        <?= $brand->getName() ?>
                    </td>
                    <td>
                        <?= $brand->getCompany() ?>
                    </td>
                    <td>
                        <a href="./UI/editer.php?id=<?php echo $brand->getid() ?>">Éditer</a>
                        <a href="./UI/supprimer.php?id=<?php echo $brand->getid() ?>">Supprime</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>