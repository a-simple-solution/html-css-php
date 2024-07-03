<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Cela définit l'encodage des caractères de notre page -->
    <meta charset="UTF-8">
    <!-- Il s'agit du nom de l'onglet -->
    <title>Mon Blog - Contact</title>
    <!-- Ceci nous permet de faire le lien avec notre fichier css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Ceci nous permet d'ajouter un favicon -->
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
</head>

<body>
    <!--  Ici, j'importe le fichier database.php afin que ma base de données soit accessible au sein de ce fichier -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ("utils/database.php") ?>

    <!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe le header sur mes pages afin que le code du header n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('composants/header.php') ?>

    <!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe la navigation sur mes pages afin que le code de la nav n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('composants/nav.php') ?>

    <main>

        <?php

        /* À partir des variables $_POST, je récupère l'ensemble des informations du formulaire */
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];


        /* Avec la fonction "isset", je vérifie que toutes les données sont présentes */
        /* https://www.php.net/manual/fr/function.isset.php */
        if (empty($email) || empty($mot_de_passe)) {
            /* S'il manque des données, je redirige l'utilisateur */
            /* https://www.php.net/manual/fr/function.header.php */
            header('Location: login.php');
        }


        
        /* Ici, nous préparons la requête afin de récupérer notre utilisateur en BDD */
        /* Cette requête a pour objectif de récupérer l'utilisateur si son email existe */
        /* https://www.php.net/manual/fr/pdo.prepare.php */
        $request = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");

        /* Ici, on lie les paramètres à notre requête "prepare" */
        $request->bindParam(':email', $email);

        /* On execute la requête */
        $request->execute();

        /* Dans $result, on récupère l'ensemble des données renvoyées */
        /* Dans notre cas, l'email étant unique, on récupère l'utilisateur où l'email corresponds */
        /* https://www.php.net/manual/fr/pdostatement.fetchall.php */
        $result = $request->fetchAll();
        

        /* On vérifie que l'utilisateur a bien été trouvé et que le mot de passe est valide */
        if (count($result) > 0 && password_verify($mot_de_passe, $result[0]["mot_de_passe"])) {
            /* Je stock dans la variable session l'email comme preuve de connexion et comme information récupérable */
            $_SESSION["email"] = $result[0]["email"];

            /* Je redirige ensuite l'utilisateur */
            header("Location: users.php");
        } else {
            /* Si l'utilisateur n'existe pas, ou que son mot de passe n'est pas valide, j'affiche un message d'erreur */
            echo 'Email ou mot de passe invalid';
        }

        ?>

    </main>

    <!-- J'utilise le PHP afin de factoriser mon code, ici, j'importe le footer sur mes pages afin que le code du footer n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('composants/footer.php') ?>

</body>

</html>