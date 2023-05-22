<?php
include "../Managers/GestionBrand.php";

$GestionBrands = new GestionBrands();

if (isset($_GET['id'])) {
    $Brand = $GestionBrands->RechercherParid($_GET['id']);
}

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    $Company = $_POST['Company'];
    $GestionBrands->Modifier($id, $Name, $Company);
    header('Location: index.php');
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
    <title>Modifier : </title>
</head>

<body>
    <div class="container text-center">
        <h1 class="mb-5 mt-5">Modification de Brand :
            <?= $Brand->getName() ?>
        </h1>
        <form method="post" action="">
            <input type="hidden" required="required" class="form-control" id="id" name="id" value=<?php echo $Brand->getid() ?>>
            <div class="input-group mb-3">
                <label class="input-group-text" for="Nom">Name</label>
                <input type="text" class="form-control" required="required" id="Name" name="Name" placeholder="Name" value=<?php echo $Brand->getName() ?>>
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="Prenom">Company</label>
                <input type="text" required="required" class="form-control" id="Company" name="Company" placeholder="Company"
                    value=<?php echo $Brand->getCompany() ?>>
            </div>
            <div>
                <input class="btn btn-primary" name="modifier" type="submit" value="Modifier">
                <a class="btn btn-danger" href="../index.php">Annuler</a>
            </div>
        </form>
    </div>
</body>

</html>