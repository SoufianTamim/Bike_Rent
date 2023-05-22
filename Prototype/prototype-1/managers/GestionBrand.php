<?php

if (file_exists('./Entety/Brand.php')) {
    include './Entety/Brand.php';
} elseif (file_exists('../Entety/Brand.php')) {
    include '../Entety/Brand.php';
} else {
    echo "Error: Brand.php not found in either directory.";
}

class GestionBrands
{
    private $Connection = null;
    private function getConnection()
    {
        if (is_null($this->Connection)) {
            $this->Connection = mysqli_connect('localhost', 'root', '', 'gestionbrands');
            // Vérifier l'ouverture de la connexion avec la base de données
            if (!$this->Connection) {
                $message = 'Erreur de connexion: ' . mysqli_connect_error();
                throw new Exception($message);
            }
        }
        return $this->Connection;
    }
    public function Ajouter($brand)
    {
        $Name = $brand->getName();
        $Company = $brand->getCompany();
        // requête SQL
        $sql = "INSERT INTO `brands`(`name`, `company`) VALUES ('$Name','$Company')";
        mysqli_query($this->getConnection(), $sql);
    }
    public function RechercherTous()
    {
        $sql = 'SELECT id, name, company FROM brands';
        $query = mysqli_query($this->getConnection(), $sql);
        $brands_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $brands = array();
        foreach ($brands_data as $brand_data) {
            $brand = new Brand();
            $brand->setid($brand_data['id']);
            $brand->setName($brand_data['name']);
            $brand->setCompany($brand_data['company']);
            array_push($brands, $brand);
        }
        return $brands;
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
        $sql = "DELETE FROM brands WHERE id= '$id'";
        mysqli_query($this->getConnection(), $sql);
    }
    public function Modifier($id, $name, $company)
    {
        $sql = "UPDATE brands SET 
        name='$name', company='$company'
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
