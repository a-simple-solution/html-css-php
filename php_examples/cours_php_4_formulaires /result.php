<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Cela définit l'encodage des caractères de notre page -->
    <meta charset="UTF-8">
    <!-- Il s'agit du nom de l'onglet -->
    <title>My Blog - Contact</title>
    <!-- Ceci nous permet de faire le lien avec notre fichier css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe le header sur mes pages afin que le code du header n'existe qu'à un seul endroit -->
<!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
<?php require_once('php/header.php') ?>

<!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe la navigation sur mes pages afin que le code du header n'existe qu'à un seul endroit -->
<!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
<?php require_once('php/nav.php') ?>

<main>

<?php 

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$email = $_POST['email'];

if(!isset($nom) || !isset($prenom) || !isset($age)  || !isset($email)) {
    header('Location: contact.php');
}



echo "<p> Bonjour, $prenom $nom tu as $age et ton adrese mail est $email <p>";?> 

</main>

<!-- J'utilise le PHP afin de factoriser mon code, ici j'importe le footer sur mes pages afin que le code du footer n'existe qu'à un seul endroit -->
<!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
<?php require_once('php/footer.php') ?>

</body>

</html>