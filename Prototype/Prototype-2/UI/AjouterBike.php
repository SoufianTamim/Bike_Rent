<?php
include "../Managers/GestionBike.php";
include "../Managers/GestionBrand.php";

$GestionBikes = new GestionBikes();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $Bikes = $GestionBikes->RechercherTous($id);
}
if (!empty($_POST)) {
    $Bike = new Bike();
    $Bike->setid($id);
    $Bike->setName($_POST['Name']);
    $Bike->setSize($_POST['Size']);
    $GestionBikes->Ajouter($Bike);
    header("Location: Bikes.php?id=$id");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php
    require_once(__ROOT__ . '/UI/Style/Bootstrap.php');
?>
    <title>Gestion des tache</title>
</head>

<body>
    <div class="container text-center p-5">
        <h1 class="mb-3">Ajouter un tache</h1>
        <form method="post" action="">
            <div class="input-group mb-3" >
                <label class="input-group-text" for="Nom">Name</label>
                <input type="text" required="required" class="form-control" id="Name" name="Name" placeholder="Name">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="Prenom">Size</label>
                <input type="text" required="required" class="form-control" id="Size" name="Size" placeholder="Size">
            </div>
            <div>
                <button class="btn btn-outline-success" type="submit">Ajouter</button>
                <a class="btn btn-danger" href="Bikes.php">Annuler</a>
            </div>
        </form>
    </div>
</body>

</html>