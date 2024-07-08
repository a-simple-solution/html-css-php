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
        require_once ("utils/fonctions/fonctions_login.php");

        disconnectUser();
        ?>
    </main>

    <?php require_once ('composants/footer.php') ?>

</body>

</html>