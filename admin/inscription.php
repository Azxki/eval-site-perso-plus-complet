<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Page de connexion</title>
        <link rel="stylesheet" href="../public/style.css">
    </head>
    <body>
    <form action="inscription.php" method="post" id="form">
        <label for="user">Username</label>
        <input type="text" name="user" id="user" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" name="submit" id="create" value="Créer le compte">
    </form>
    </body>
    </html>

<?php

$user = $_POST['user'];
$password = $_POST['password'];

file_put_contents('user.txt', $user, $password);