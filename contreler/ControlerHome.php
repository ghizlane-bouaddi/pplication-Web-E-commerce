<?php

   class ControlerHome {

    public function index() {
        $productModel = new Product();
        $prodects = $productModel->findAll();

        require_once "views/home.php";
    }
    public function addHome() {

    
        session_start();

        $id = $_GET['id'] ?? null;

        if ($id) {

            if (!isset($_SESSION['panier'])) {
                $_SESSION['panier'] = [];
            }
        header("Location: /login");
        exit;
    }
}
   }