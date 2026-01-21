<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue, admin!</h1>
    <p class="card-title">Name: <?php echo $_SESSION['name']; ?></p>
    <p>email <?php echo $_SESSION['email'];?></p>
</body>
</html>
