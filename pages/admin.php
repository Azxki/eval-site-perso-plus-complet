<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
<form action="../public/index.php" method="post" id="form">
    <label for="user">Username</label>
    <input type="text" name="user" id="user">

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" name="submit" id="connexion" value="Connexion">
    <input type="submit" name="submit" id="deconnexion" value="Deconnexion">
</form>
</body>
</html>

<?php

if (isset($_POST['user']) === $_SESSION['user'] & isset($_POST['password']) === $_SESSION['password']){
    echo "Connecté !";
}