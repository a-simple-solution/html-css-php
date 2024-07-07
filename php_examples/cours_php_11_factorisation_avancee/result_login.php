<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon Blog - Contact</title>
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

        try {

            $email = $_POST['email'];
            $mot_de_passe = $_POST['mot_de_passe'];

            checkFieldsAndRedirect([$email, $mot_de_passe], 'login.php');

            $user = getUserByEmail($email, $pdo);

            if ($user != null > 0 && password_verify($mot_de_passe, $user["mot_de_passe"])) {
                $_SESSION["email"] = $user["email"];
                $_SESSION["id"] = $user["id"];
                $_SESSION["role"] = $user["role"];

                header("Location: users.php");
            } else {
                echo 'Email ou mot de passe invalid';
            }

        } catch (Exception $error) {
            echo $error->getMessage();
        }

        $pdo = null;

        ?>

    </main>

    <?php require_once ('composants/footer.php') ?>

</body>

</html>