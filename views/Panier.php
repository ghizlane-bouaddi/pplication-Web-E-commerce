<?php
session_start();
require_once "Model/Services/Product.php";
$productModel = new Product();
$cartItems = $_SESSION['panier'] ?? [];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Product</title> 

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">





<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="/client">
            <i class="fas fa-store me-2 text-warning"></i>
            <span>MY<span class="text-warning">SHOP</span></span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/client">
                        <i class="fas fa-home me-1"></i> Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/prodactAdmin">
                        <i class="fas fa-shopping-basket me-1"></i> Mes Produits
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin">
                        <i class="fas fa-box-open me-1"></i> Prefile
                    </a>
                </li>
            </ul>

           <div class="">
             <a href="/login"  class="btn btn-light btn-sm">Logout</a>
           </div>
        </div>
    </div>
</nav>









<div class="container my-5">
    <div class="card shadow-sm p-4">
        
            <?php foreach ($cartItems as $id => $quantity): 
                $item = $productModel->findById($id); 
                if ($item):?>
                    <div class="row align-items-center mb-3 border-bottom pb-2">
                        <div class="col-md-6">
                        <img src="<?php echo $item->getImage(); ?>" class="card-img-top img-fluid" alt="product image" style="max-width: 70px; height: auto;">
                            <h6><?php echo $item->getName(); ?></h6>
                            <small class="text-danger" style="cursor:pointer;">Supprimer</small>
                        </div>
                        <div class="col-md-3 text-end">
                            <h5 class="fw-bold"><?php echo $item->getPrix(); ?> DH</h5>
                        </div>
                        <div class="col-md-3 text-end">
                            <div class="d-flex justify-content-end align-items-center gap-2">
                                <a class="btn btn-outline-secondary btn-sm">−</a>
                                <span class="fw-bold"><?php echo $quantity; ?></span>
                                <a class="btn btn-warning btn-sm">+</a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
       
        <a href="/client" class="btn btn-primary mt-3">Retour au magasin</a>
    </div>
</div>

</body>
</html>