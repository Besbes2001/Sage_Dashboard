<?php
$serveur = "localhost";
$utilisateur = "root";
$mdp = "";
$nomBdD = "connexion";
$connexion = new mysqli($serveur, $utilisateur, $mdp, $nomBdD);
if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}
?>
