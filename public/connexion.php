<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="index.php" method="post" id="form">
    <label for="user">Username</label>
    <input type="text" name="user" id="user" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" name="submit" id="connexion" value="Connexion">
    <input type="submit" name="submit" id="create" value="Créer un compte">
</form>
</body>
</html>
