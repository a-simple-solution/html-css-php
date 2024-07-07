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
        <div>
            <?php
            require_once("utils/bdd/database.php");
            require_once ("utils/fonctions/fonctions_login.php");
            require_once ("utils/fonctions/users_request.php");

            checkIfUserIsLogged();

            $users = getUsers($pdo);

            echo '<div id="user_list">';
            foreach ($users as $user) {
                echo '<a href="user.php?id=' . $user["id"] . '"> Nom : "' . $user['nom'] . '" - Prénom : "' . $user['prenom'] . '" - Email : "' . $user['email'] . '" - Age : "' . $user["age"] . '"</a>';
            }

            echo "</div>";

            $pdo = null;

            ?>
        </div>
    </main>

    <?php require_once ('composants/footer.php') ?>

</body>

</html>