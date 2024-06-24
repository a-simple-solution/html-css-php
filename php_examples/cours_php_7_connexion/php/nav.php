<!-- Ici, nous définissons l'espace réservé à la navigation -->
<!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/nav -->
<nav>
    <!-- Ici, nous avons 3 ancres qui permettent la navigation entre les pages -->
    <!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/a -->
    <!-- Navigation vers la page Accueil-->
    <a href="index.php">Accueil</a>
    <!-- Navigation vers la page Forum -->
    <a href="forum.php">Forum</a>

    <?php


    /* TODO : Mettez en place un bouton de déconnexion */

    /* Navigation vers la page Utilisateurs, affichée uniquement si l'utilisateur est connecté */
    echo "<a href=\"users.php\">Utilisateurs</a>";
    /* Navigation vers la page Inscription */
    echo "<a href=\"register.php\">Inscription</a>";
    /* Navigation vers la page Connexion, affichée uniquement si l'utilisateur n'est pas connecté */
    echo "<a href=\"login.php\">Connexion</a>";


    ?>


</nav>