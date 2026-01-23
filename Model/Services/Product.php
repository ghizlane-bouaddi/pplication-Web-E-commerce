<?php

class Product{
    private int $id;
    private string $name;
    private float $prix;
    private int $stock;
    private int $Categorye;

    private string $image;

    private PDO $connection;

    
    public function __construct(){
        $db = new Database();
        $this->connection=$db->getPDO();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image=$image;
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

    public function create($image,$name,$prix,$stock,$Categorye){
        $quiry= "INSERT INTO products (image,name,prix,stock,Categorye) VALUES (?,?,?,?,?)";
        $stmt =$this->connection->prepare($quiry);
        $stmt->execute([$image,$name,$prix,$stock,$Categorye]); 
    }

    public function findAll(){
        $quiry="SELECT * FROM products";
        $stmt=$this->connection->prepare($quiry);
        $stmt->setFetchMode(PDO::FETCH_CLASS , Product::class);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;

    }

    public function findById($id){

    $quiry = "SELECT *FROM products Where id =?";
    $stmt = $this->connection->prepare($quiry);
    $stmt->setFetchMode(PDO::FETCH_CLASS ,Product::class);
    $stmt->execute([$id]);
    $result =$stmt->fetch();
    return $result;
    }

    
}