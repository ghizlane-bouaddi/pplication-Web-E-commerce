<?php

class Product{
    private int $id;
    private string $name;
    private float $prix;
    private int $stock;
    private Category $Categorye;

    private PDO $
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    
    public function getPrix()
    {
        return $this->prix;
    }

  
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

 
    public function getStock()
    {
        return $this->stock;
    }

 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    public function getCategorye()
    {
        return $this->Categorye;
    }

 
    public function setCategorye($Categorye)
    {
        $this->Categorye = $Categorye;

        return $this;
    }

    public function create()
}