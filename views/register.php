<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container d-flex justify-content-center align-items-center vh-100">
<div class="card p-4" style="width:350px">

<h4 class="text-center mb-3">Se connecter</h4>

<form method="POST">

<input type="text" name="name" class="form-control mb-2" placeholder="name" required>

<input type="email" name="email" class="form-control mb-2" placeholder="Email" required>

<input type="password" name="password" class="form-control mb-2" placeholder="Password" required>

<select name="role" class="form-select mb-3" required>
    <option value="">-- Choisissez le rôle --</option>
    <option value="1" >Client</option>
    <option value="2">Admin</option>

</select>
<button type="submit" class="btn btn-success w-100">Créer compte</button>

</form>

</div>
</div>
</body>
</html>
