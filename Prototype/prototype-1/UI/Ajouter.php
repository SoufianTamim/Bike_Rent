<?php

include "../managers/GestionBrand.php";
// include "../managers/GestionBrand.php";
// Trouver tous les employés depuis la base de données
$GestionBrands = new GestionBrands();
$brands = $GestionBrands->RechercherTous();

if (!empty($_POST)) {
    $brand = new Brand();
    $brand->setName($_POST['Name']);
    $brand->setCompany($_POST['Company']);
    $GestionBrands->Ajouter($brand);
    // Redirection vers la page index.php
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
    <title>Gestion des employés</title>

</head>

<body>

    <h1>Ajouter un brand</h1>

    <form method="post" action="">
        <div>
            <label for="Nom">Name</label>
            <input type="text" required="required" id="Name" name="Name" placeholder="Name">
        </div>
        <div>
            <label for="Prenom">Company</label>
            <input type="text" required="required" id="Company" name="Company" placeholder="Company">
        </div>
        <div>
            <button type="submit">Ajouter</button>
            <a href="../index.php">Annuler</a>
        </div>
    </form>
</body>

</html>