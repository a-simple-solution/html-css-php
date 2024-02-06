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

<?php require_once("php/functions.php") ?>
<?php require_once('php/header.php') ?>

<main>
    <?php 

    $exemple="<h1>Titre Contact en PHP</h1>";
    echo $exemple;

    generate_numbers(10);

    ?>
</main>

<?php require_once('php/footer.php') ?>

</body>

</html>