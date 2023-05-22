<?php

include "../Managers/GestionBrand.php";

if (isset($_GET['id'])) {
    $GestionBrands = new GestionBrands();
    $id = $_GET['id'];
    $GestionBrands->Supprimer($id);
    header('Location: ../index.php');
}
