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
<!-- 
<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand">Admin Dashboard</span>
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

                <li class="nav-item">
                    <a class="nav-link" href="/admin">
                        <i class="fas fa-box-open me-1"></i> Admin
                    </a>
                </li>
            </ul>

           <div class="">
             <a href="/login"  class="btn btn-light btn-sm">Logout</a>
           </div>
        </div>
    </div>
</nav>




<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm p-4 mb-4" style="background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%); border-radius: 15px;">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="d-flex align-items-center gap-4">
                        <div class="position-relative">
                            <img src="https://ui-avatars.com/api/?name=ghizlane&background=0D8ABC&color=fff&size=80" 
                                 alt="Admin" class="rounded-circle border border-3 border-light shadow-sm">
                            <span class="position-absolute bottom-0 end-0 bg-success border border-2 border-white rounded-circle p-2" title="Online"></span>
                        </div>
                        
                        <div class="text-white">
                            <h2 class="fw-bold mb-1" style="letter-spacing: -0.5px;">Bienvenue,<?php echo $_SESSION['name']; ?></h2>
                            <p class="mb-0 opacity-75 d-flex align-items-center gap-2">
                                <i class="fas fa-envelope small"></i><?php echo $_SESSION['email']; ?> </p>
                            <span class="badge bg-info bg-opacity-25 text-info mt-2 px-3 py-2 rounded-pill fw-normal">
                                <i class="fas fa-shield-alt me-1"></i> Administrateur Principal
                            </span>
                        </div>
                    </div>

                </div>
            </div>
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
                    <!-- <a href="/addToCart?id=<?php echo $product->getId(); ?>" class="btn btn-outline-primary btn-sm w-100">Add to cart</a> -->
                    <div class="d-flex gap-5 me-auto w-100">
            
            <a href="/editProduct?id=<?php echo $product->getId(); ?>" class="btn btn-outline-info btn-sm d-flex align-items-center justify-content-center px-3 py-2" title="Modifier">
                <i class="fas fa-edit">updite</i>
            </a>

            <a href="" class="btn btn-outline-danger btn-sm d-flex align-items-center justify-content-center px-3 py-2" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')" title="Supprimer">
                <i class="fas fa-trash-alt">delet</i>
            </a>
        </div> 





                </div>
            </div>
        </div>
        <?php endforeach ;?>

</body>
</html>