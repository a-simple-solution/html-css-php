<?php

// Définition des informations de connexion
$host = "localhost";
$dbname = "bdd";
$username = "root";
$password = "root";

// Création d'une instance PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    echo "Échec de la connexion : " . $e->getMessage();
}


