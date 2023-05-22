<?php

if (file_exists('./Entity/Bike.php')) {
    include './Entity/Bike.php';
} elseif (file_exists('../Entity/Bike.php')) {
    include '../Entity/Bike.php';
} else {
    echo "Error: Bike.php not found in either directory.";
}
class GestionBikes
{
    private $Connection = null;

    private function getConnection()
    {
        if (is_null($this->Connection)) {
            $this->Connection = mysqli_connect('localhost', 'root', '', 'gestionBrands');
            if (!$this->Connection) {
                $message = 'Erreur de connexion: ' . mysqli_connect_error();
                throw new Exception($message);
            }
        }
        return $this->Connection;
    }

    public function Ajouter($Bike)
    {
        $id = $Bike->getid();
        $Name = $Bike->getName();
        $Size = $Bike->getSize();
        $sql = "INSERT INTO `Bikes`(`name`, `size`, `Id_Brand`) VALUES ('$Name','$Size', '$id')";
        mysqli_query($this->getConnection(), $sql);
    }

    public function RechercherTous($id)
    {
        $sql = "SELECT id, name, size FROM Bikes WHERE Id_Brand = '$id'";
        $query = mysqli_query($this->getConnection(), $sql);
        $Bikes_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $Bikes = array();
        foreach ($Bikes_data as $Bike_data) {
            $Bike = new Bike();
            $Bike->setid($Bike_data['id']);
            $Bike->setName($Bike_data['name']);
            $Bike->setSize($Bike_data['size']);
            array_push($Bikes, $Bike);
        }
        return $Bikes;
    }

    public function RechercherParid($id)
    {
        $sql = "SELECT * FROM Bikes WHERE id= '$id'";
        $result = mysqli_query($this->getConnection(), $sql);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $Bike_data = mysqli_fetch_assoc($result);
        $Bike = new Bike();
        $Bike->setid($Bike_data['id']);
        $Bike->setName($Bike_data['name']);
        $Bike->setSize($Bike_data['size']);
        return $Bike;
    }

    public function Supprimer($id)
    {
        $sql = "DELETE FROM Bikes WHERE id= '$id'";
        mysqli_query($this->getConnection(), $sql);
    }

    public function Modifier($id, $name, $Size)
    {
        // Requête SQL
        $sql = "UPDATE Bikes SET 
        name='$name', size='$Size'
        WHERE id= $id";
        //
        mysqli_query($this->getConnection(), $sql);
        //
        if (mysqli_error($this->getConnection())) {
            $msg = 'Erreur' . mysqli_errno($this->getConnection());
            throw new Exception($msg);
        }
    }
}
