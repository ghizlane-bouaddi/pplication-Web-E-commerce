<?php

   class ProdectAdmin {

//    public function create(){
//         if($_SERVER['REQUEST_METHOD'] == 'POST'){
//              $id =$_POST['id'];
//             $image =$_POST['image'];
//             $name =$_POST['name'];
//             $prix =$_POST['prix'];
//             // var_dump($prix);
//             $stock =$_POST['stock'];
//             $Categorye =$_POST['Categorye'];

//            // var_dump($Categorye);
//             $product = new Product();
//             $product->create($image,$name,$prix,$stock,$Categorye);
//             // var_dump($product);
//         //   header("Location: /prodactAdmin");
//         //   exit;
//         }

//         require_once "views\client.php";
//     }



    public function index() {
        $productModel = new Product();
        $prodects = $productModel->findAll();

        require_once "views/ProdectAdmin.php";
    }


   
    public function addPanier() {

    
        session_start();

        $id = $_GET['id'] ?? null;

        if ($id) {

            if (!isset($_SESSION['panier'])) {
                $_SESSION['panier'] = [];
            }

        }
        header("Location: /prodactAdmin");
        exit;
    }

    public function edit() {
    $id = $_GET['id'] ?? null;
    if ($id) {
        $productModel = new Product();
        $product = $productModel->findById($id);
        require_once "views\updite.php"; 
    }
}

public function Updite() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $image = $_POST['image'];
        $name = $_POST['name'];
        $prix = $_POST['prix'];
        $stock = $_POST['stock'];
        $Categorye = $_POST['Categorye'];

        $productModel = new Product();
        
        $productModel->Updite($id, $image, $name, $prix, $stock, $Categorye);
        
        header("Location: /prodactAdmin");
        exit;
    }
}

public function EditId(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $prodect = new Product();
        $prodect->Edit($id);

        header("Location: /prodactAdmin");
        exit;
    }
}

    
}

