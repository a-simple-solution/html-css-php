<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon Blog - Inscription</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
</head>

<body>

<?php require_once('composants/header.php') ?>
<?php require_once('composants/nav.php') ?>

<main>

    <?php

    try {
        require_once("utils/bdd/database.php");
        require_once("utils/fonctions/fonctions_login.php");
        require_once("utils/fonctions/users_request.php");

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $mot_de_passe = $_POST['mot_de_passe'];
        $confirmation_de_mot_de_passe = $_POST['confirmation_de_mot_de_passe'];

        createUser($nom, $prenom, $age, $email, $role, $mot_de_passe, $confirmation_de_mot_de_passe, $pdo);

    } catch (Exception $error) {
        echo $error->getMessage();
    }

    ?>

</main>

<?php require_once('composants/footer.php') ?>

</body>

</html>