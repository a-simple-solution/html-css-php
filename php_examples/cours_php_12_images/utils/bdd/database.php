<?php

$host = "localhost";
$dbname = "bdd";
$username = "root";
$password = "root";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Échec de la connexion à la base de données";
}



