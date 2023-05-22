<?php

include "../managers/GestionBrand.php";

if (isset($_GET['id'])) {
    // Trouver tous les employés depuis la base de données
    $GestionBrands = new GestionBrands();
    $id = $_GET['id'];
    $GestionBrands->Supprimer($id);
    header('Location: ../index.php');
}
