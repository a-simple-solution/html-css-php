<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Cela définit l'encodage des caractères de notre page -->
    <meta charset="UTF-8">
    <!-- Il s'agit du nom de l'onglet -->
    <title>Mon Blog - Forum</title>
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
        $exemple = "<h1>Titre Forum en PHP</h1>";

        /* Echo me permet d'afficher cette variable */
        /* Documentation : https://www.php.net/manual/en/function.echo.php */
        echo $exemple;

        /* Ceci est un exemple de variable en PHP */
        /* Ma variable est un tableau de nombre */
        $array = [55, 8, 93, 48];

        echo "$array[0]  $array[1] $array[2]  $array[3]";



        /* var_dump est une fonction en php permettant d'afficher le contenu d'une variable */
        /* Documentation : https://www.php.net/manual/fr/function.var-dump.php */
        var_dump($array);

        /* Ce echo me permet de sauter deux lignes */
        echo "<br> <br>";

        /* Ce echo me permet d'afficher les valeurs contenues dans mon tableau */
        /* Documentation : https://www.php.net/manual/en/language.types.array.php */
        echo "$array[0]  $array[1] $array[2]  $array[3]";


        /* Ici, je fais une boucle qui va me permettre d'afficher tout le contenu de mon tableau dynamiquement */
        /* La fonction "count" permet de compter le nombre d'éléments présent dans le tableau */
        /* Ma boucle part de 0 et ira jusqu'à la taille du tableau - 1 */
        /* À chaque tour, i est incrémenté de 1 jusqu'à arriver à la limite définie */

        /* Documentation : https://www.php.net/manual/en/control-structures.for.php */
        for ($i = 0; $i < count($array); $i++) {
            /* À chaque tour de boucle, je saute 2 lignes */
            echo "<br> <br>";
            /* À chaque tour de boucle, j'affiche la valeur courante */
            echo $array[$i];
            /* À chaque tour de boucle, je re-saute deux lignes */
            echo "<br> <br>";
        }

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