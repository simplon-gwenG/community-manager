<?php
include('connexion.php');
include('form.php');
include('index.html');

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['ville'])&& isset($_POST['email']) && isset($_POST['telephone']))
 {
     $nom=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $ville=$_POST['ville'];
     $email=$_POST['email'];
     $telephone=$_POST['telephone'];
     $comment=$_POST['comment'];

     $req = $bdd->prepare('INSERT INTO contacts(nom,prenom,ville,email,telephone,comment) VALUES(:nom,:prenom,:ville,:email,:telephone,:comment)');

     $req -> execute(array(
         'nom' => $nom,
         'prenom' => $prenom,
         'ville' => $ville,
         'email'=> $email,
         'telephone'=>$telephone,
         'comment'=>$comment,
     ));
     echo "la bdd  a été mise à jour avec succès";
}

 ?>
