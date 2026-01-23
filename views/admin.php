<?php
session_start();
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
        <span class="navbar-brand">Client Dashboard</span>
        <a href="/login"  class="btn btn-light btn-sm">Logout</a>
    </div>
</nav>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h1>Bienvenue, Admin!</h1>
            <p class="card-title">Name: <?php echo $_SESSION['name']; ?></p>
            <p class="card-title">Email: <?php echo $_SESSION['email']; ?></p>
            <p class="card-text">
            </p>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Create New Product</h4>
                </div>

                <div class="card-body">

                    <!-- FORM -->
                    <form method="POST" action="/admin">
                      <!-- image-->
                       <div class="mb-3">
                            <label for="image">Image URL:</label>
                            <input type="url" name="image" class="form-control" required>
                            
                        </div>
                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <!-- Price -->
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" step="0.01" name="prix" class="form-control" required>
                        </div>

                        <!-- Stock -->
                        <div class="mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control" required>
                        </div>

                        <!-- Category -->
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="Categorye">
                                <option value="">-- choose category --</option>
                                <option value="1" >Électronique</option>
                                <option value="2">apeterie & bureau</option>
                                <option value="3">Automobile</option>

                            </select>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-success w-100">
                            Create Product
                        </button>

                        <!-- <a type="submit" href="views\ProdectAdmin.php" class="btn btn-success w-100">Create Product</a>  -->

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>



