<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
	if(!isset($_GET['page'])){
		include dirname(__DIR__, 1).'/pages/home.php';
	}
	elseif(isset($_GET['page']) && $_GET['page'] == "bio") {
        include dirname(__DIR__, 1).'/pages/bio.php';
    }
	elseif(isset($_GET['page']) && $_GET['page'] == "contact") {
        include dirname(__DIR__, 1).'/pages/contact.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] == "admin") {
        include dirname(__DIR__, 1).'/pages/admin.php';
    }
}

function getPart($name) {
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData () {
    $json = file_get_contents('../data/user.json');
    $obj = json_decode($json);

    if(isset($_GET['page']) && $_GET['page'] == "bio") {
        echo "Nom : " . $obj->name . "<br>";
        echo "Prénom : " . $obj->first_name . "<br>";
        echo "Profession : " . $obj->occupation . "<br><br>";

        foreach ($obj->experiences as $value){
            print_r($value->year . " : " . $value->company . "<br>");
        }
    }
}
