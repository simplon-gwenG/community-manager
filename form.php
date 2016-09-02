<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<?php
include('connexion.php');

if(isset($_POST['envoyer'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    echo 'Merci '. $nom. ' '.$prenom.'<br/>Votre message a bien été envoyé !';
}
 ?>

</html>
