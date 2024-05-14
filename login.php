<?php
// login.php

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vérifier les informations d'identification (c'est ici que vous feriez la vérification dans votre système)
    if ($username === "utilisateur" && $password === "motdepasse") {
        // Authentification réussie, rediriger vers le tableau de bord
        header("Location: dashboard.php");
        exit();
    } else {
        // Authentification échouée, afficher un message d'erreur
        $error_message = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
