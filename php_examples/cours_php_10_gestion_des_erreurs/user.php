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
        /* Ici j'importe le fichier database.php afin que ma base de données soit accessible au sein de ce fichier */
        /* Documentation : https://www.php.net/manual/en/function.require-once.php */
        require_once ("utils/database.php");

        $id = $_GET['id'];
        $userRole = $_SESSION['role'];

        /* En vérifiant la variable $_SESSION cela me permet de valider que l'utilisateur est connecté */
        if (!isset($_SESSION["email"]) && empty($_SESSION["email"])) {
            header("Location: login.php");
        }

        /* Ici, nous préparons la requête afin de récupérer notre utilisateur en BDD */
        /* Cette requête a pour objectif de récupérer l'utilisateur si son email existe */
        /* https://www.php.net/manual/fr/pdo.prepare.php */
        $request = $pdo->prepare("SELECT * FROM utilisateur WHERE id = :id");

        /* Ici, on lie les paramètres à notre requête "prepare" */
        $request->bindParam(':id', $id);

        /* On execute la requête */
        $request->execute();

        /* Dans $result, on récupère l'ensemble des données renvoyées */
        /* Dans notre cas, l'email étant unique, on récupère l'utilisateur où l'email corresponds */
        /* https://www.php.net/manual/fr/pdostatement.fetchall.php */
        $result = $request->fetchAll();

        if (count($result) > 0) {
            /* Pour plus de lisibilité on initialise des variables */
            $nom = $result[0]['nom'];
            $prenom = $result[0]['prenom'];
            $email = $result[0]['email'];
            $age = $result[0]["age"];
            $role = $result[0]["role"];

            /* Pour afficher les utilisateurs, on utilise une balise <p> */
            echo "<p> Nom : " . $nom . " - Prénom : " . $prenom . " - Email : " . $email . " - Age : ", $age . " - Role : " . $role . "</p>";

            if ($userRole == "admin") {
                echo '<form action="delete.php" method="get">
                    <input type="hidden" value="' . $result[0]['id'] . '" name="id" id="id">
                    <button type="submit">Supprimer</button>
                </form>';
            }
        } else {
            echo "Utilisateur introuvable";
        }


        /* On ferme la connexion à la base de données */
        $pdo = null;



        ?>
    </main>

    <!-- J'utilise le PHP afin de factoriser mon code, ici j'importe le footer sur mes pages afin que le code du footer n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('composants/footer.php') ?>

</body>

</html>