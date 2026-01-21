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

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand">Client Dashboard</span>
        <a href="/login" class="btn btn-light btn-sm">Logout</a>
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

        <!-- Product card -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card product-card position-relative">
                <img src="public\image\image4.jpg" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h6 class="card-title">Cute Dog Tee</h6>
                    <p class="text-success fw-bold">$17.00</p>
                    <a href="#" class="btn btn-outline-primary btn-sm w-100">Add to cart</a>
                </div>
            </div>
        </div>

        <!-- Product card -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card product-card position-relative">
                <img src="public\image\image2.jpg" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h6 class="card-title">Toy For Dogs</h6>
                    <p class="text-success fw-bold">$12.00</p>
                    <a href="#" class="btn btn-outline-primary btn-sm w-100">Add to cart</a>
                </div>
            </div>
        </div>

        <!-- Product card -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card product-card position-relative">
                <img src="public\image\image1.jpg" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h6 class="card-title">Pet Treats</h6>
                    <p class="text-success fw-bold">$14.00</p>
                    <a href="#" class="btn btn-outline-secondary btn-sm w-100 disabled">Out of stock</a>
                </div>
            </div>
        </div>

        <!-- Product card -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card product-card position-relative">
                <img src="public\image\1.jpg" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h6 class="card-title">Fresh Meat</h6>
                    <p class="text-success fw-bold">$8.50</p>
                    <a href="#" class="btn btn-outline-primary btn-sm w-100">Add to cart</a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
