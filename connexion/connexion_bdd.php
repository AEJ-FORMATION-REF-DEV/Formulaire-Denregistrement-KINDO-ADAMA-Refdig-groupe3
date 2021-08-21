<?php

$db_user = "root";
$db_password = "";
$db_name = "refdig_groupe3";

$bdd = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8', $db_user, $db_password);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($bdd){
    true;
} else{
    false;
}


?>