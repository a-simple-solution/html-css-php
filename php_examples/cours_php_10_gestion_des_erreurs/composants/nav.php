<!-- Ici, nous définissons l'espace réservé à la navigation -->
<!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/nav -->
<nav>
    <!-- Ici, nous avons 3 ancres qui permettent la navigation entre les pages -->
    <!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/a -->
    <!-- Navigation vers la page Accueil-->
    <a href="index.php">Accueil</a>

    <?php

    /* Ici on utilise "session_start()" afin d'initialiser une session */
    /* Cette instruction est indispensable pour pouvoir lire ou écrire dans la variable $_SESSION */
    /* Comme la nav est présente sur toutes les pages, je n'ai pas besoin d'utiliser "session_start()" ailleurs */
    /* https://www.php.net/manual/fr/function.session-start.php */
    session_start();


    /* Ici je vérifie l'état de l'utilisateur et affiche une navigation différente en fonction de son état */
    if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
        /* Navigation vers la page Utilisateurs, affichée uniquement si l'utilisateur est connecté */
        echo "<a href=\"users.php\">Utilisateurs</a>";
        /* Navigation vers la page Logout, affichée uniquement si l'utilisateur est connecté */
        echo "<a href=\"logout.php\">Déconnexion</a>";
    } else {
        /* Navigation vers la page Inscription */
        echo "<a href=\"register.php\">Inscription</a>";
        /* Navigation vers la page Connexion, affichée uniquement si l'utilisateur n'est pas connecté */
        echo "<a href=\"login.php\">Connexion</a>";
    }

    ?>


</nav>