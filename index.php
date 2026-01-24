<?php
// session_start();
require_once "Model/database/database.php";
require_once "Model/Services/Users.php";
require_once "contreler/AuthConection.php";
require_once "Model\Services\Product.php";
require_once "contreler\ControlerAdmin.php";
require_once "contreler\contrelerPanier.php";
require_once "contreler\ProdectAdmin.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($uri){
   
    case "/register":
        $auth = new AuthConection();
        $auth->register();
        //var_dump($auth);
        break;

    case "/login":
        // echo "page login";
            $auth =new AuthConection();
            $auth->login();
            //  echo "<pre>";
        
             //var_dump($auth->login());
            //  echo "</pre>";
            // print_r($auth->login());
            //  var_dump($auth);
             break;
    case "/client":
        echo "hello client";
         $prodect =new ControlerAdmin();
         $prodect->index();
        //require_once "views/client.php";
        break;

    case "/admin":
        //echo "hello admin";
        
        $prodect =new ControlerAdmin();
        $prodect->create();
        require_once "views/admin.php";
        break;

    case "/addToCart" :
        // require_once "views\Panier.php";
        $panier = new ContrelerPanier();
        $panier->addPanier();
        // require_once "views\Panier.php";
        break;

    case "/Panier": 
        require_once "views/Panier.php";
        break;
    case "/prodactAdmin":
    $prodect = new ProdectAdmin();
    $prodect->index();
    break;
}

