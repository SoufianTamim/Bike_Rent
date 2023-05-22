<?php

include "../managers/GestionBrand.php";
$GestionBrands = new GestionBrands();

if (isset($_GET['id'])) {
    $brand = $GestionBrands->RechercherParid($_GET['id']);
}

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    $Company = $_POST['Company'];
    $GestionBrands->Modifier($id, $Name, $Company);
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <title>Modifier : </title>
</head>

<body>

    <h1>Modification de brand : <?php $brand->getName() ?></h1>
    <form method="post" action="">
        <input type="text" required="required" id="id" name="id" value=<?php echo $brand->getid() ?>>

        <div>
            <label for="Nom">Name</label>
            <input type="text" required="required" id="Name" name="Name" placeholder="Name" value=<?php echo $brand->getName() ?>>
        </div>
        <div>
            <label for="Prenom">Company</label>
            <input type="text" required="required" id="Company" name="Company" placeholder="Company" value=<?php echo $brand->getCompany()?>>
        </div>
        <div>
            <input name="modifier" type="submit" value="Modifier">
            <a href="../index.php">Annuler</a>
        </div>
    </form>
</body>

</html>