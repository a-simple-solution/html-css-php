<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Cela définit l'encodage des caractères de notre page -->
    <meta charset="UTF-8">
    <!-- Il s'agit du nom de l'onglet -->
    <title>Mon Blog - Utilisateurs</title>
    <!-- Ceci nous permet de faire le lien avec notre fichier css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Ceci nous permet d'ajouter un favicon -->
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
</head>

<body>
    <!--  Ici j'importe le fichier database.php afin que ma base de données soit accessible au sein de ce fichier -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ("php/database.php") ?>

    <!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe le header sur mes pages afin que le code du header n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('php/header.php') ?>

    <!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe la navigation sur mes pages afin que le code de la nav n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('php/nav.php') ?>

    <main>
        <div id="user_container">
            <?php


            /* TODO : Mettre en place la vérification de la connexion d'un utilisateur */

            
            /* On met en place une requête SQL pour récupérer les utilisateur*/
            $get_request = 'SELECT * FROM utilisateur';

            /* A partir de l'instance PDO on utilise "query" afin d'exécuter la requête "get_request" */
            $result = $pdo->query($get_request);

            /* On parcours ensuite le tableau de résultat afin d'afficher tous les utilisateurs */
            foreach ($result as $user) {
                /* Pour afficher les utilisateurs, on utilise une balise <p> avec une class "user" */
                echo "<p class=\"user\"> Nom : " . $user['nom'] . " - Prénom : " . $user['prenom'] . " - Email : " . $user['email'] . " - Age : ", $user["age"] . "</p>";
            }

            ?>
        </div>
    </main>

    <!-- J'utilise le PHP afin de factoriser mon code, ici j'importe le footer sur mes pages afin que le code du footer n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('php/footer.php') ?>

</body>

</html>