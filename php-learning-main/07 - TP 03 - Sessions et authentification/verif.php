<?php
session_start();

// Info de connexion 
$correctLogin = "admin";
$correctPassword = "password";

// Récupération des données du formulaire + Assainisement des entrées pour protéger des failles XSS
$login = htmlspecialchars($_POST['login'] ?? '', ENT_QUOTES, 'UTF-8');
$psw = htmlspecialchars($_POST['psw'] ?? '', ENT_QUOTES, 'UTF-8');


// Vérification des informations de connexion
if ($login === $correctLogin && $psw === $correctPassword) {
    // je redirige vers home.php
    $_SESSION['user'] = $login; 
    header("Location: home.php");
    exit();
// ou
} else {
    // Stockage du message d'erreur dans une variable de session
    $_SESSION['login_error'] = "L'identifiant ou le mot de passe est non valide.";
    // je redirige vers longin.php 
    header("Location: login.php");
    exit();
}
