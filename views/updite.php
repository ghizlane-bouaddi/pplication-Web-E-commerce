<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Create New Product</h4>
                </div>

                <div class="card-body">

                    <!-- FORM -->
                   <form method="POST" action="/updateProduct">
    <input type="hidden" name="id" value="<?= $product->getId() ?>">

    <div class="mb-3">
        <label>Product Name</label>
        <input type="text" name="name" class="form-control" value="<?= $product->getName() ?>" required>
    </div>

    <div class="mb-3">
        <label>Image URL</label>
        <input type="url" name="image" class="form-control" value="<?= $product->getImage() ?>" required>
    </div>

    <div class="mb-3">
        <label>Price</label>
        <input type="number" step="0.01" name="prix" class="form-control" value="<?= $product->getPrix() ?>" required>
    </div>

    <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" class="form-control" value="<?= $product->getStock() ?>" required>
    </div>

    <div class="mb-3">
    <label class="form-label">Category</label>
   <select name="Categorye">
    <option value="">-- choose category --</option>
    <option value="1"<?=  ($product->getCategorye() == 1) ?> >Électronique</option>
    <option value="2"<?=  ($product->getCategorye() == 2) ?> >apeterie & bureau</option>
    <option value="3" <?=  ($product->getCategorye() == 3) ?>>Automobile</option>

    </select>
    </div>


    <button type="submit" class="btn btn-info w-100 text-white">Enregistrer les modifications</button>
</form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>