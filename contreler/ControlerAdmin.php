<?php

class ControlerAdmin{
    public function create(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id =$_POST['id'];
            $image =$_POST['image'];
            $name =$_POST['name'];
            $prix =$_POST['prix'];
            // var_dump($prix);
            $stock =$_POST['stock'];
            $Categorye =$_POST['Categorye'];

           // var_dump($Categorye);
            $product = new Product();
            $product->create($image,$name,$prix,$stock,$Categorye);
            // var_dump($product);
          header("Location: /client");
          exit;
        }

        //require_once "views\client.php";
    }

    public function index(){
        $product =new Product();
        $prodects=$product->findAll();
        // var_dump($prodects);
        require_once "views\client.php";
    }
}