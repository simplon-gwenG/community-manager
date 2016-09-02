<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=contactcm;charset=utf8', 'root', '');// include
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//obligatoire pour débogage affiche un message d'erreur plus complet
} catch (Exception $e) {
    die ("Connexion à la base de données impossible, veuillez contacter l'administrateur"."<hr>".$e->getMessage());
}

 ?>
