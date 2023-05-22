<?php

include "../Managers/GestionBike.php";

if (isset($_GET['id'])) {
    $GestionBikes = new GestionBikes();
    $id = $_GET['id'];
    $id_Brand = $_GET['id_Brand'];
    $GestionBikes->Supprimer($id);
    header('Location: Bikes.php?id='.$id_Brand);
}
