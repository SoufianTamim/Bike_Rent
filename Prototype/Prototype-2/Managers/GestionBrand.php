<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/Entity/Brand.php');

class GestionBrands
{
    private $Connection = null;

    private function getConnection()
    {
        if (is_null($this->Connection)) {
            $this->Connection = mysqli_connect('localhost', 'root', '', 'gestionBrands');
            // Vérifier l'ouverture de la connexion avec la base de données
            if (!$this->Connection) {
                $message = 'Erreur de connexion: ' . mysqli_connect_error();
                throw new Exception($message);
            }
        }
        return $this->Connection;
    }

    public function Ajouter($Brand)
    {
        $Name = $Brand->getName();
        $Company = $Brand->getCompany();
        // requête SQL
        $sql = "INSERT INTO `Brands`(`name`, `company`) VALUES ('$Name','$Company')";
        mysqli_query($this->getConnection(), $sql);
    }

    public function RechercherTous()
    {
        $sql = 'SELECT id, name, company FROM Brands';
        $query = mysqli_query($this->getConnection(), $sql);
        $Brands_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $Brands = array();
        foreach ($Brands_data as $Brand_data) {
            $Brand = new Brand();
            $Brand->setid($Brand_data['id']);
            $Brand->setName($Brand_data['name']);
            $Brand->setCompany($Brand_data['company']);
            array_push($Brands, $Brand);
        }
        return $Brands;
    }

    public function RechercherParid($id)
    {
        $sql = "SELECT * FROM brands WHERE id= $id";
        $result = mysqli_query($this->getConnection(), $sql);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $brand_data = mysqli_fetch_assoc($result);
        $brand = new Brand();
        $brand->setid($brand_data['id']);
        $brand->setName($brand_data['name']);
        $brand->setCompany($brand_data['company']);
        return $brand;
    }
    
    public function Supprimer($id)
    {
        $sql = "DELETE FROM Brands WHERE id= '$id'";
        mysqli_query($this->getConnection(), $sql);
    }

    public function Modifier($id, $name, $Company)
    {
        // Requête SQL
        $sql = "UPDATE Brands SET 
        name='$name', company='$Company'
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
