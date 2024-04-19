<?php

/* Ici, nous définissons les informations de connexion */
$host = "localhost";
$dbname = "bdd";
$username = "root";
$password = "root";

/* Création d'une instance PDO */
/* https://www.php.net/manual/fr/pdo.connections.php */
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Échec de la connexion : " . $e->getMessage();
}


