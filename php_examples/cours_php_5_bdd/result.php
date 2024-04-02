<?php require_once("php/database.php") ?>
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

// Définir la méthode de requête
$_SERVER['REQUEST_METHOD'] = 'POST';

// Définir les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

if(!isset($nom) || !isset($prenom) || !isset($age)|| !isset($email) || !isset($mot_de_passe)) {
    header('Location: register.php');
}

$mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);


$request = $pdo->prepare('INSERT INTO utilisateur (nom, prenom, age, email, mot_de_passe) VALUES (:nom, :prenom, :age, :email, :mot_de_passe)');


$request->bindParam(':nom', $nom);
$request->bindParam(':prenom', $prenom);
$request->bindParam(':age', $age);
$request->bindParam(':email', $email);
$request->bindParam(':mot_de_passe', $mot_de_passe);


$request->execute();


if ($request->rowCount() === 1) {
    echo 'L\'utilisateur a été ajouté avec succès.';
} else {
    echo 'Une erreur est survenue lors de l\'ajout de l\'utilisateur.';
}

?>

</main>

<!-- J'utilise le PHP afin de factoriser mon code, ici j'importe le footer sur mes pages afin que le code du footer n'existe qu'à un seul endroit -->
<!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
<?php require_once('php/footer.php') ?>

</body>

</html>