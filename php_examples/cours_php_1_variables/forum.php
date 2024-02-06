<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Cela définit l'encodage des caractères de notre page -->
    <meta charset="UTF-8">
    <!-- Il s'agit du nom de l'onglet -->
    <title>My Blog - Forum</title>
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
    $exemple="<h1>Titre Forum en PHP</h1>";

    /* Echo me permet d'afficher cette variable */
    /* Documentation : https://www.php.net/manual/en/function.echo.php */
    echo $exemple;

    /* Ceci est un exemple de variable en PHP */
    /* Ma variable est un tableau de nombre */
    $array=[1, 2, 3, 4];

    /* var_dump est une fonction en php permettant d'afficher le contenu d'une variable */
    /* Documentation : https://www.php.net/manual/fr/function.var-dump.php */
    var_dump($array);

    /* Ce echo me permet de sauter deux lignes */
    echo "<br> <br>";

    /* Ce echo me permet d'afficher les valeurs contenus dans mon tableau */
    /* Documentation : https://www.php.net/manual/en/language.types.array.php */
    echo "$array[0]  $array[1] $array[2]  $array[3]";


    /* Ici je fais une boucle qui va me permettre d'afficher tout le contenu de mon tableau dynamiquement */
    /* La fonction "count" permet de compter le nombre d'éléments présent dans le tableau */
    /* Ma boucle part de 0 et ira jusqu'a la taille du tableau - 1 */
    /* A chaque tour, i est incrémenté de 1 jusqu'à arriver à la limite définie */

    /* Documentation : https://www.php.net/manual/en/control-structures.for.php */
    for ($i = 0; $i < count($array); $i++) {
        /* A chaque tour de boucle je saute 2 lignes */
        echo "<br> <br>";
        /* A chaque tour de boucle j'affiche la valeur courante */
        echo $array[$i];
        /* A chaque tour de boucle je re-saute deux lignes */
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