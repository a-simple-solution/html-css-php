<?php

/* Ici, nous découvrons les exemples de fonctions */
/* Dans ce fichier, vous pouvez trouver deux fonctions différentes */

/* Documentation : https://www.php.net/manual/fr/language.functions.php */



/* Cette fonction a pour objectif de sauter 3 lignes lorsqu'on l'appelle */
function jump_3_lines()
{
    /* Ici, j'utilise la fonction echo pour afficher 3 balises <br> donc trois sauts de ligne */
    /* Documentation : https://www.php.net/manual/en/function.echo.php */
    echo "<br><br><br>";
}


/* Cette fonction a pour objectif de générer une suite de nombre en fonction du nombre passé en paramètre */
/* Si par exemple, je passe en argument ($max_number) 3, il me générera des chiffres de 0 à 3 */
/* Un argument est une variable ou une valeur qu'on passe à la fonction lorsqu'on l'appelle */
/* Documentation : https://www.php.net/manual/fr/language.functions.php */
function generate_numbers($max_number)
{
    /*Quand ma fonction est appelé, elle appelle la fonction jump_3_lines pour sauter 3 lignes */
    jump_3_lines();

    /*Quand ma fonction est appelé, elle affiche la phrase ci-dessous */
    echo "Exemple de génération de nombre.";

    /* Ici, je fais une boucle qui va afficher les nombres */
    /* Documentation : https://www.php.net/manual/en/control-structures.for.php */
    for ($i = 0; $i <= $max_number; $i++) {
        /* À chaque tour de boucle, je saute 3 lignes */
        jump_3_lines();
        /* À chaque tour de boucle, j'affiche la valeur courante */
        echo "Current number $i";

    }
}

/* Cette fonction a pour objectif d'afficher le footer */
function displayFooter()
{
    echo "<footer>
    <address>
        <!-- Ici, nous préfixons avec \"mailto :\" afin que le système comprenne automatiquement qu'un mail doit être écrit -->
        <a href=\"mailto:example@email.example\">Nous écrire</a>
        <!-- Ici, nous préfixons avec \"tel :\" afin que le système comprenne automatiquement qu'un appel doit être passé -->
        <a href=\"tel:+33600000000\">Nous Appeler</a>
    </address>
</footer>";
}



/* Cette fonction a pour objectif d'afficher dynamiquement la navigation */
function displayNavigation()
{
    $links = ['index.php', 'forum.php', 'contact.php'];
    $names = ['Index', 'Forum', 'Contact'];

    for ($i = 0; $i < count($links); $i++) {
        echo "<a href=\"$links[$i]\"> $names[$i] </a>";
    }
}




