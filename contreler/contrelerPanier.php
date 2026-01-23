<?php

class ContrelerPanier {

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

        // var_dump($_SESSION['panier']);


        header("Location: /Panier");
        exit;
    }
}
