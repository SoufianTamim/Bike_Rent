<?php

class Brand
{
    private $id;
    private $Name;
    private $Company;

    public function getid()
    {
        return $this->id;
    }
    public function setid($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->Name;
    }
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    public function getCompany()
    {
        return $this->Company;
    }

    public function getSize()
    {
        return $this->Size;
    }
    public function setCompany($Company)
    {
        $this->Company = $Company;
    }

    public function setSize($Size)
    {
        $this->Size = $Size;
    }
}
