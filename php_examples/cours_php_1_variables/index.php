<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Cela définit l'encodage des caractères de notre page -->
    <meta charset="UTF-8">
    <!-- Il s'agit du nom de l'onglet -->
    <title>My Blog - Accueil</title>
    <!-- Ceci nous permet de faire le lien avec notre fichier css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- Cette partie concerne le header. Nous avons décidé d'inclure la navigation dans le header. Ceci n'est pas obligatoire, c'est un choix -->
<header>
    <!-- Ici, j'encapsule l'image de mon logo par une balise <a>. Le HREF pointe vers l'accueil. Quand l'utilisateur clique sur le logo, il est redirigé sur l'accueil -->
    <a href="index.html">
        <img src="img/logo.png" alt="Un logo représentant Monkey D Luffy" id="logo">
    </a>
    <nav>
        <a href="index.php">Accueil</a>
        <a href="forum.php">Forum</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<main>
    <!-- Ici, j'utilise le PHP pour générer mon titre HTML -->
    <?php 

    /* Ceci est un exemple de variable en PHP */
    /* Ma variable est de type chaine de caractères */
    /* Pour plus d'informations sur les types existant : https://www.php.net/manual/fr/language.types.php */
    $exemple="<h1>Titre Accueil en PHP</h1>";

    /* Echo me permet d'afficher cette variable */
    /* https://www.php.net/manual/en/function.echo.php */
    echo $exemple;

    ?>

</main>


<!-- Cette partie concerne le footer. Nous avons décidé d'inclure les informations de contact dans le footer. Ceci n'est pas obligatoire, c'est un choix -->
<footer>
    <address>
        <!-- Ici, nous préfixons avec "mailto :" afin que le système comprenne automatiquement qu'un mail doit être écrit -->
        <a href="mailto:example@email.example">Nous écrire</a>
        <!-- Ici, nous préfixons avec "tel :" afin que le système comprenne automatiquement qu'un appel doit être passé -->
        <a href="tel:+33600000000">Nous Appeler</a>
    </address>
</footer>


</body>

</html>