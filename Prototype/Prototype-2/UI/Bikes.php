<?php

include "../Managers/GestionBike.php";
include "../Managers/GestionBrand.php";

// include "";
$GestionBikes = new GestionBikes();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $Bikes = $GestionBikes->RechercherTous($id);
}
$GestionBrands = new GestionBrands();
if (isset($_GET['id'])) {
    $id_brand = $_GET['id'];
    $Brand = $GestionBrands->RechercherParid($id_brand);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <?php
    require_once(__ROOT__ . '/UI/Style/Bootstrap.php');
?>
    <title>Gestion des tashes</title>
</head>

<body>
    <div class="d-flex">
        <div class="container text-center p-5">
            <h1 class="mb-3">
                <?= $Brand->GetName() ?>'s Bikes
            </h1>
            <div class="mb-5">
                <a class="btn btn-primary" href="AjouterBike.php?id=<?php echo $id ?>">Ajouter un Bike</a>
                <a class="btn btn-success" href="../index.php">Brands</a>
            </div>
            <table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Action</th>
                </tr>
                <?php
            foreach ($Bikes as $Bike) {
                ?>
                    <tr>
                        <td>
                            <?= $Bike->getName() ?>
                        </td>
                        <td>
                            <?= $Bike->getSize() ?>
                        </td>
                        <td>
                            <a class="btn btn-secondary"
                                href="editerBike.php?id=<?php echo $Bike->getid() ?>&id_Brand=<?php echo $id ?>">Éditer</a>
                            <a class="btn btn-danger"
                                href="supprimerBike.php?id=<?php echo $Bike->getid() ?>&id_Brand=<?php echo $id ?>">Supprime</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="w-25 p-5 bg-primary-subtle">
            <div>
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Bike managment</h5>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page"
                            href="<?php __ROOT__ . 'index.php' ?>">Brands</a>
                    </li>
                    <?php
                $Brands = $GestionBrands->RechercherTous();
foreach ($Brands as $Brand) {
    ?>
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page"
                                href="<?php echo 'Bikes.php?id='.$Brand->getid() ?>"><?= $Brand->getName() ?></a>
                        </li>
                        <?php
}
?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>