<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon Blog - Utilisateurs</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
</head>

<body>
    <?php require_once ('composants/header.php') ?>
    <?php require_once ('composants/nav.php') ?>

    <main>
        <?php

        require_once("utils/bdd/database.php");
        require_once ("utils/fonctions/fonctions_login.php");
        require_once ("utils/fonctions/users_request.php");

        checkIfUserIsLogged();

        $id = $_GET['id'];

        if ($_SESSION["role"] != "admin") {
            echo "Vous n'êtes pas autorisé à supprimer un utilisateur.";
        } else if ($_SESSION["id"] == $id) {
            echo "Vous ne pouvez pas supprimer votre propre utilisateur.";
        } else {
            deleteUserById($id, $pdo);
        }

        $pdo = null;


        ?>

    </main>

    <?php require_once ('composants/footer.php') ?>

</body>

</html>