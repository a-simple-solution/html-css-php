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

    <!-- Cette partie concerne le header. Nous avons décidé d'inclure la navigation dans le header. Ceci n'est pas obligatoire, c'est un choix -->
    <header>
        <!-- Ici, j'encapsule l'image de mon logo par une balise <a>. Le HREF pointe vers l'accueil. Quand l'utilisateur clique sur le logo, il est redirigé sur l'accueil -->
        <!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/a -->
        <a href="index.php">
            <!-- Ici, je positionne une image qui fait office de logo -->
            <!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/img -->
            <img src="img/logo.png" alt="Un logo représentant Monkey D Luffy" id="logo">
        </a>
        <!-- Ici, nous définissons l'espace réservé à la navigation -->
        <!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/nav -->
        <nav>
            <!-- Ici, nous avons 3 ancres qui permettent la navigation entre les pages -->
            <!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/a -->
            <!-- Navigation vers la page Accueil-->
            <a href="index.php">Accueil</a>
            <!-- Navigation vers la page Forum -->
            <a href="forum.php">Forum</a>
            <!-- Navigation vers la page Contact -->
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <main>
        <!-- Ici, j'utilise le PHP pour générer mon titre HTML -->
        <?php

        /* Ceci est un exemple de variable en PHP */
        /* Ma variable est de type chaine de caractères */
        /* Pour plus d'informations sur les types existant : https://www.php.net/manual/fr/language.types.php */
        $exemple = "<h1>Titre Contact en PHP</h1>";

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