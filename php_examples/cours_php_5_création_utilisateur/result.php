<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Cela définit l'encodage des caractères de notre page -->
    <meta charset="UTF-8">
    <!-- Il s'agit du nom de l'onglet -->
    <title>Mon Blog - Contact</title>
    <!-- Ceci nous permet de faire le lien avec notre fichier css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--  Ici j'importe le fichier database.php afin que ma base de données soit accessible au sein de ce fichier -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ("php/database.php") ?>

    <!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe le header sur mes pages afin que le code du header n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('php/header.php') ?>

    <!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe la navigation sur mes pages afin que le code de la nav n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('php/nav.php') ?>

    <main>
        <?php

        // TODO : Ecrire le code pour créer l'utilisateur en base de données
        
        ?>

    </main>

    <!-- J'utilise le PHP afin de factoriser mon code, ici j'importe le footer sur mes pages afin que le code du footer n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('php/footer.php') ?>

</body>

</html>