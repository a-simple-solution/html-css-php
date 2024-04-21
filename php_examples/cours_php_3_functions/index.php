<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Cela définit l'encodage des caractères de notre page -->
    <meta charset="UTF-8">
    <!-- Il s'agit du nom de l'onglet -->
    <title>Mon Blog - Accueil</title>
    <!-- Ceci nous permet de faire le lien avec notre fichier css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe le header sur mes pages afin que le code du header n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <!-- Si on regarde le fichier header.php, on constate qu'on importe déjà "functions.php". Je n'ai donc plus la nécessité de faire un require pour ce fichier, il sera importé avec le header -->
    <?php require_once ('php/header.php') ?>

    <main>
        <?php

        /* Ceci est un exemple de variable en PHP */
        /* Ma variable est de type chaine de caractères */
        /* Pour plus d'informations sur les types existant : https://www.php.net/manual/fr/language.types.php */
        $exemple = "<h1>Titre Accueil en PHP</h1>";

        /* Echo me permet d'afficher cette variable */
        /* Documentation : https://www.php.net/manual/en/function.echo.php */
        echo $exemple;

        // J'utilise la fonction "generate_numbers" définie dans le fichier "functions.php"
        // https://www.php.net/manual/fr/language.functions.php
        generate_numbers(200);

        ?>
    </main>

    <!-- Nous affichons le footer navigation à partir de la fonction "displayFooter" définie dans le fichier "functions.php" -->
    <!-- https://www.php.net/manual/fr/language.functions.php -->
    <?php displayFooter(); ?>


</body>

</html>