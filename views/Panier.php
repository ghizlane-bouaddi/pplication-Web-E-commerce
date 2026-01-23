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


<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand">Panier</span>
        <a href="/client" class="btn btn-light btn-sm">client</a>
        <a href="/login" class="btn btn-light btn-sm">Logout</a>
    </div>
</nav>


<div class="container my-5">
    <!-- <h4 class="mb-4">Panier</h4> -->

    <div class="card shadow-sm p-3">
        <div class="row align-items-center"> 
            <!-- Product info -->
             <?php foreach ($cartItems as $id => $quantity):
              $item = $productModel->findById($id); ?>
             <!-- <div class="">
                <img src="<?php echo $item->getImage(); ?>" class="card-img-top img-fluid" alt="product image" style="max-width: 50px; height: auto;">
                
             </div>  -->
            <div class="col-9 col-md-6">
            <img src="<?php echo $item->getImage(); ?>" class="card-img-top img-fluid" alt="product image" style="max-width: 70px; height: auto;">

                <h6 class="mb-1"><?php echo $item->getName(); ?></h6>
                
                <div class="mt-3 text-danger">
                    <i class="bi bi-trash"></i> Supprimer
                </div>
            </div>

            <!-- Price -->
             <div class="col-md-2 text-end">
                <h5 class="fw-bold"><?php echo $item->getPrix(); ?>DH<i class="badge bg-warning text-dark ms-2">-20%</i></h5>
            </div> 

            <div class="col-md-2 text-end">
            
             </div>

            <!-- Quantity -->
             <div class="col-md-2 text-end mt-3 mt-md-0">
                <div class="d-flex justify-content-end align-items-center gap-2">
                    <button class="btn btn-outline-secondary btn-sm">−</button>
                    <span class="fw-bold"><?php echo $quantity; ?></span>
                    <button class="btn btn-warning btn-sm text-white">+</button>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>

</div> 


</body>
</html>

