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
    <!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe le header sur mes pages afin que le code du header n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('composants/header.php') ?>

    <!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe la navigation sur mes pages afin que le code de la nav n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('composants/nav.php') ?>

    <main>
        <?php

        /* En vérifiant la variable $_SESSION cela me permet de valider que l'utilisateur est connecté */
        if (!isset($_SESSION["email"]) && empty($_SESSION["email"])) {
            header("Location: login.php");
        }

        /* Ici, j'importe le fichier database.php afin que ma base de données soit accessible au sein de ce fichier */
        /* Documentation : https://www.php.net/manual/en/function.require-once.php */

        $id = $_GET['id'];

        if ($_SESSION["role"] != "admin") {
            echo "Vous n'êtes pas autorisé à supprimer un utilisateur.";
        } else if ($_SESSION["id"] == $id) {
            echo "Vous ne pouvez pas supprimer votre propre utilisateur.";
        } else {
            require_once ("utils/database.php");

            $sql = "DELETE FROM utilisateur WHERE id = :id";

            $request = $pdo->prepare($sql);

            $request->bindParam(':id', $id);

            $request->execute();

            if ($request->rowCount() > 0) {
                echo "Utilisateur supprimé avec succès!";
            } else {
                echo "Erreur lors de la suppression de l'utilisateur.";
            }
            /* On ferme la connexion à la base de données */
            $pdo = null;
        }



        ?>

    </main>

    <!-- J'utilise le PHP afin de factoriser mon code, ici, j'importe le footer sur mes pages afin que le code du footer n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('composants/footer.php') ?>

</body>

</html>