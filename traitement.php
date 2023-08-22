<?php
if (isset($_POST['envoi'])){


    $nom = htmlspecialchars($_POST['nom']);
    
 $prenom = htmlspecialchars($_POST['prenom']);
    
 $email = htmlspecialchars($_POST['email']);
    
 $mdp = htmlspecialchars($_POST['mdp']);
    $mdpCrypt = password_hash($mdp, PASSWORD_DEFAULT);
$db = dbconnexion (); 

$request = $db -> prepare ("INSERT INTO utilisateur (nom, prenom, email,mdp VALUES ( ?,?,?,?,)")






    
}