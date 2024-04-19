<?php require_once("php/database.php") ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Cela définit l'encodage des caractères de notre page -->
    <meta charset="UTF-8">
    <!-- Il s'agit du nom de l'onglet -->
    <title>My Blog - Contact</title>
    <!-- Ceci nous permet de faire le lien avec notre fichier css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe le header sur mes pages afin que le code du header n'existe qu'à un seul endroit -->
<!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
<?php require_once('php/header.php') ?>

<!-- J'utilise le PHP afin de factoriser mon code. Ici, j'importe la navigation sur mes pages afin que le code de la nav n'existe qu'à un seul endroit -->
<!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
<?php require_once('php/nav.php') ?>

<main>

<?php

// Définir la méthode de requête
$_SERVER['REQUEST_METHOD'] = 'POST';

/* A partir des variables $_POST, je récupère l'ensemble des informations du formulaire */
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];
$confirmation_de_mot_de_passe = $_POST['confirmation_de_mot_de_passe'];

/* Avec la fonction "isset", je vérifie que toutes les données sont présentes */
/* https://www.php.net/manual/fr/function.isset.php */
if(!isset($nom) || !isset($prenom) || !isset($age)|| !isset($email) || !isset($mot_de_passe)) {
/* S'il manque des données je redirige l'utilisateur */
    /* https://www.php.net/manual/fr/function.header.php */
    header('Location: register.php');
}

if($confirmation_de_mot_de_passe == $mot_de_passe) {

    /* Ici je hash le mot de passe, afin qu'il ne soit pas en clair dans la base de données */
    /* https://www.php.net/manual/en/function.password-hash.php */
    $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);


    /* Ici, nous préparons la requête afin d'écrire notre utilisateur en BDD */
    /* https://www.php.net/manual/fr/pdo.prepare.php */
    $request = $pdo->prepare('INSERT INTO utilisateur (nom, prenom, age, email, mot_de_passe) VALUES (:nom, :prenom, :age, :email, :mot_de_passe)');


    /* Ici, on lie les paramètres à notre requête prepare */
    $request->bindParam(':nom', $nom);
    $request->bindParam(':prenom', $prenom);
    $request->bindParam(':age', $age);
    $request->bindParam(':email', $email);
    $request->bindParam(':mot_de_passe', $mot_de_passe);


    /* On execute la requête */
    $request->execute();

    /* On vérifie que la requête a bien été effectuée */
    if ($request->rowCount() === 1) {
        echo 'L\'utilisateur a été ajouté avec succès.';
    } else {
        echo 'Une erreur est survenue lors de l\'ajout de l\'utilisateur.';
    }
} else {
    echo 'Les mots de passe ne correspondent pas';
}

?>

</main>

<!-- J'utilise le PHP afin de factoriser mon code, ici j'importe le footer sur mes pages afin que le code du footer n'existe qu'à un seul endroit -->
<!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
<?php require_once('php/footer.php') ?>

</body>

</html> 