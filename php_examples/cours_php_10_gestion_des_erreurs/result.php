<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Cela définit l'encodage des caractères de notre page -->
    <meta charset="UTF-8">
    <!-- Il s'agit du nom de l'onglet -->
    <title>Mon Blog - Inscription</title>
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

        /* A partir des variables $_POST, je récupère l'ensemble des informations du formulaire */
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $mot_de_passe = $_POST['mot_de_passe'];
        $confirmation_de_mot_de_passe = $_POST['confirmation_de_mot_de_passe'];

        /* Avec la fonction "isset", je vérifie que toutes les données sont présentes */
        /* https://www.php.net/manual/fr/function.isset.php */
        if (empty($nom) || empty($prenom) || empty($age) || empty($email) || empty($mot_de_passe)) {
            /* S'il manque des données je redirige l'utilisateur */
            /* https://www.php.net/manual/fr/function.header.php */
            header('Location: register.php');
        }

        if ($confirmation_de_mot_de_passe == $mot_de_passe) {

            /* Ici je hash le mot de passe, afin qu'il ne soit pas en clair dans la base de données */
            /* https://www.php.net/manual/en/function.password-hash.php */
            $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);


        /*
        TODO
        */
        // TODO : mettez en place les try catch afin de gérer l'erreur PDO proprement
        /*
        TODO
        */

            /* Ici, nous préparons la requête afin d'écrire notre utilisateur en BDD */
            /* https://www.php.net/manual/fr/pdo.prepare.php */
            $request = $pdo->prepare('INSERT INTO utilisateur (nom, prenom, age, email, mot_de_passe, role) VALUES (:nom, :prenom, :age, :email, :mot_de_passe, :role)');


            /* Ici, on lie les paramètres à notre requête prepare */
            $request->bindParam(':nom', $nom);
            $request->bindParam(':prenom', $prenom);
            $request->bindParam(':age', $age);
            $request->bindParam(':email', $email);
            $request->bindParam(':role', $role);
            $request->bindParam(':mot_de_passe', $mot_de_passe_hache);


            /* On execute la requête */
            $request->execute();

            /* On vérifie que la requête a bien été effectuée */
            if ($request->rowCount() === 1) {
                /* Si l'utilisateur a bien été crée, j'affiche un message de succès */
                echo "L'utilisateur a été ajouté avec succès.";
            } else {
                /* Sinon j'affiche un message d'erreur */
                echo "Une erreur est survenue lors de l'ajout de l'utilisateur.";
            }
        } else {
            /* J'affiche un message d'erreur si les mots de passe ne correspondent pas */
            echo 'Les mots de passe ne correspondent pas';
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