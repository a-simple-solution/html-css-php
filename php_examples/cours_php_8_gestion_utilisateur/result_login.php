<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Cela définit l'encodage des caractères de notre page -->
    <meta charset="UTF-8">
    <!-- Il s'agit du nom de l'onglet -->
    <title>Mon Blog - Contact</title>
    <!-- Ceci nous permet de faire le lien avec notre fichier css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Ceci nous permet d'ajouter un favicon -->
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
</head>

<body>
    <!--  Ici j'importe le fichier database.php afin que ma base de données soit accessible au sein de ce fichier -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ("utils/database.php") ?>

    <!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe le header sur mes pages afin que le code du header n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('composants/header.php') ?>

    <!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe la navigation sur mes pages afin que le code de la nav n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('composants/nav.php') ?>

    <main>

        <?php

        /* A partir des variables $_POST, je récupère l'ensemble des informations du formulaire */
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];


        /* Avec la fonction "isset", je vérifie que toutes les données sont présentes */
        /* https://www.php.net/manual/fr/function.isset.php */
        if (!isset($email) || !isset($mot_de_passe)) {
            /* S'il manque des données je redirige l'utilisateur */
            /* https://www.php.net/manual/fr/function.header.php */
            header('Location: login.php');
        }


        // TODO : Mettre en place la connexion  

        ?>

    </main>

    <!-- J'utilise le PHP afin de factoriser mon code, ici j'importe le footer sur mes pages afin que le code du footer n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('composants/footer.php') ?>

</body>

</html>