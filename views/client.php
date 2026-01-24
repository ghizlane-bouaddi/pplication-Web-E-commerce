<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- <nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand">Client Dashboard</span>
        <a href="/login" class="btn btn-light btn-sm">Logout</a>
    </div>
</nav> -->



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







<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h1>Bienvenue, Client!</h1>
            <p class="card-title">Name: <?php echo $_SESSION['name']; ?></p>
            <p class="card-title">Email: <?php echo $_SESSION['email']; ?></p>
            <p class="card-text">
            </p>

            <button class="btn btn-primary">My Profile</button>
            <button class="btn btn-outline-secondary">My Orders</button>
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="row g-4">

         <?php foreach ($prodects as $product): ?>
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card product-card position-relative">
                <img src="<?php echo $product->getImage()?>" class="card-img-top" alt="image prodect" width="300" height="200">
                <div class="card-body text-center">
                    <h6 class="card-title"><?php echo $product->getName()?></h6>
                    <p class="text-success fw-bold"><?php echo $product->getPrix()?>DH</p>
                    <a href="/addToCart?id=<?php echo $product->getId(); ?>" class="btn btn-outline-primary btn-sm w-100">Add to cart</a>
                </div>
            </div>
        </div>
        <?php endforeach ;?>

</body>
</html>