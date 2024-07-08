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

        $user = getUserById($id, $pdo);

        if ($user != null) {
            $nom = $user['nom'];
            $prenom = $user['prenom'];
            $email = $user['email'];
            $age = $user["age"];
            $role = $user["role"];

            echo "<p> Nom : " . $nom . " - Prénom : " . $prenom . " - Email : " . $email . " - Age : ", $age . " - Role : " . $role . "</p>";

            if ($role == "admin") {
                echo '<form action="delete.php" method="get">
                        <input type="hidden" value="' . $user['id'] . '" name="id" id="id">
                        <button type="submit">Supprimer</button>
                      </form>';
            }
        } else {
            echo "Utilisateur introuvable";
        }

        $pdo = null;

        ?>
    </main>

    <?php require_once ('composants/footer.php') ?>

</body>

</html>