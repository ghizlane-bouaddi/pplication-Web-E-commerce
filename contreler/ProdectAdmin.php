<?php

   class ProdectAdmin {

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

            if (isset($_SESSION['panier'][$id])) {
                $_SESSION['panier'][$id]++;
            } else {
                $_SESSION['panier'][$id] = 1;
            }
        }

        header("Location: /prodactAdmin");
        exit;
    }
}

