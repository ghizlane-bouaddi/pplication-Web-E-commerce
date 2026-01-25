<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { background-color: #f4f4f4; font-family: 'Arial', sans-serif; }
        
        /* [commit: Category circle styles] */
        .category-circle {
            width: 90px; height: 90px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #fff;
            transition: 0.3s ease;
        }
        .category-item:hover .category-circle { transform: translateY(-5px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .category-name { font-size: 13px; margin-top: 10px; font-weight: 500; }

        /* [commit: Product card styles] */
        .product-card { border: none; border-radius: 8px; transition: 0.3s; }
        .product-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        .product-img { height: 280px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px; }
        .price-new { color: #f68b1e; font-weight: bold; font-size: 1.2rem; }
        .price-old { text-decoration: line-through; color: #8e8e8e; font-size: 0.9rem; margin-left: 8px; }
        .discount-badge { background-color: #feefde; color: #f68b1e; padding: 2px 6px; font-size: 12px; border-radius: 4px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">MY<span class="text-warning">SHOP</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link px-3" href="#">Accueil</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#">Produits</a></li>
                <li class="nav-item">
                    <a class="nav-link position-relative px-3" href="#">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">2</span>
                    </a>
                </li>
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a class="btn btn-warning btn-sm px-4 rounded-pill fw-bold" href="#">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="rounded-4 shadow-sm overflow-hidden">
        <img src="https://www.webtreeonline.com/wp-content/uploads/2024/11/Ecommerce_Menu-img.jpg" class="w-100" style="height: 400px; object-fit: cover;" alt="Banner">
    </div>
</div>

<div class="container my-5">
    <h4 class="text-center fw-bold mb-4">Parcourir par Catégorie</h4>
    <div class="d-flex justify-content-center flex-wrap gap-4 text-center">
        <div class="category-item">
            <img src="https://picsum.photos/200/200?random=1" class="category-circle" alt="cat">
            <p class="category-name">Femmes</p>
        </div>
        <div class="category-item">
            <img src="https://picsum.photos/200/200?random=2" class="category-circle" alt="cat">
            <p class="category-name">Hommes</p>
        </div>
        <div class="category-item">
            <img src="https://picsum.photos/200/200?random=3" class="category-circle" alt="cat">
            <p class="category-name">Enfants</p>
        </div>
        <div class="category-item">
            <img src="https://picsum.photos/200/200?random=4" class="category-circle" alt="cat">
            <p class="category-name">Accessoires</p>
        </div>
        <div class="category-item">
            <img src="https://picsum.photos/200/200?random=5" class="category-circle" alt="cat">
            <p class="category-name">Sport</p>
        </div>
        <div class="category-item">
            <img src="https://picsum.photos/200/200?random=6" class="category-circle" alt="cat">
            <p class="category-name">Maison</p>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold">Nos Bonnes Affaires</h4>
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
                    <a href="/login" class="btn btn-outline-primary btn-sm w-100">Add to cart</a>
                </div>
            </div>
        </div>
        <?php endforeach ;?>

<footer class="bg-dark text-white py-5 mt-5">
    <div class="container text-center">
        <h5 class="fw-bold mb-3">MYSHOP</h5>
        <div class="d-flex justify-content-center gap-4 mb-4">
            <a href="#" class="text-white fs-5"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-white fs-5"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-white fs-5"><i class="fab fa-twitter"></i></a>
        </div>
        <p class="small opacity-50 mb-0">© 2026 MyShop E-commerce. Tous droits réservés.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>