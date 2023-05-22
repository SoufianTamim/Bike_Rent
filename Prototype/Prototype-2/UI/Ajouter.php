<?php
include "../Managers/GestionBrand.php";
$GestionBrands = new GestionBrands();
$Brands = $GestionBrands->RechercherTous();

if (!empty($_POST)) {
    $Brand = new Brand();
    $Brand->setName($_POST['Name']);
    $Brand->setCompany($_POST['Company']);
    $GestionBrands->Ajouter($Brand);
    header("Location: ../index.php");
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
    <title>Gestion des employés</title>

</head>

<body>
    <div class="container text-center">
        <h1 class="mb-3" >Ajouter un Brand</h1>
        <form method="post" action="">
            <div class="input-group mb-3">
                <label for="Nom">Name</label>
                <input type="text" required="required" class="form-control" id="Name" name="Name" placeholder="Name">
            </div>
            <div class="input-group mb-3">
                <label for="Prenom">Company</label>
                <input type="text" required="required" class="form-control" id="Company" name="Company" placeholder="Company">
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Ajouter</button>
                <a class="btn btn-danger" href="../index.php">Annuler</a>
            </div>
        </form>
    </div>
</body>

</html>