<?php
session_start();

    /* on affiche les erreurs, si vous avez une erreur 500, regardez dans votre console */
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    /* nous verrons plus tard comment se passer de ces 3 lignes */


// on inclue le fichier qui contient nos fonctions
    require __DIR__ . '/../lib/functions.php';

// l'exemple avec le header, à vous de jouer pour le reste
    getPart('header');
    getContent();
    getUserData();

// on créer la session

$_SESSION['user'] = $_COOKIE['user'];
$_SESSION['password'] = $_COOKIE['password'];

if (isset($_POST['user']) & isset($_POST['password'])){
    setcookie('user', $_POST['user']);
    setcookie('password', $_POST['user']);

    echo $_SESSION['user'];
}
