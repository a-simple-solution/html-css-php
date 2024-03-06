<!-- J'importe grâce à require_once toutes les fonctions définies dans le fichier functions.php -->
<!-- Le fait de l'importer ici, me permet de ne pas avoir à l'importer dans mes autres fichiers où j'importe le header -->
<!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
<?php require_once('functions.php') ?>

<!-- C'est ici que mon code HTML que j'importe en PHP est écrit -->

<!-- Cette partie concerne le header. Nous avons décidé d'inclure la navigation dans le header. Ceci n'est pas obligatoire, c'est un choix -->
<header>
    <!-- Ici, j'encapsule l'image de mon logo par une balise <a>. Le HREF pointe vers l'accueil. Quand l'utilisateur clique sur le logo, il est redirigé sur l'accueil -->
    <a href="index.php">
        <img src="img/logo.png" alt="Un logo représentant Monkey D Luffy" id="logo">
    </a>
    <!-- Ici, nous définissons l'espace réservé à la navigation -->
    <!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/nav -->
    <nav>
        <!-- Nous générons la navigation à partir de la fonction "displayNavigation" définie dans le fichier "functions.php" -->
        <!-- https://www.php.net/manual/fr/language.functions.php -->
        <?php displayNavigation() ?>
    </nav>
</header>