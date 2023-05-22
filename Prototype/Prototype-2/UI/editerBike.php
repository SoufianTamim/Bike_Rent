<?php

include "../Managers/GestionBike.php";
include "../Managers/GestionBrand.php";
$GestionBikes = new GestionBikes();

if (isset($_GET['id'])) {
    $Brand = $GestionBikes->RechercherParid($_GET['id']);
}
$id_brand = $_GET['id_Brand'];
if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    $Size = $_POST['Size'];
    $GestionBikes->Modifier($id, $Name, $Size);
    header("Location: Bikes.php?id=" . $id_brand);
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
    <title>Modifier : </title>
</head>

<body>
    <div class="container text-center p-5">
        <h1 class="mb-5" >Modification de Brand :
            <?= $Brand->getName() ?>
        </h1>
        <form method="post" action="">
            <input type="hidden" required="required" id="id" name="id" value=<?php echo $Brand->getid() ?>>

            <div class="input-group mb-3">
                <label for="Nom">Name</label>
                <input type="text" required="required" id="Name" class="form-control" name="Name" placeholder="Name" value=<?php echo $Brand->getName() ?>>
            </div>
            <div class="input-group mb-3">
                <label for="Prenom">Size</label>
                <input type="text" required="required" class="form-control" id="Size" name="Size" placeholder="Size"
                    value=<?php echo $Brand->getSize() ?>>
            </div>
            <div>
                <input class="btn btn-outline-success" name="modifier" type="submit" value="Modifier">
                <a class="btn btn-danger" href="../index.php">Annuler</a>
            </div>
        </form>
    </div>

</body>

</html>