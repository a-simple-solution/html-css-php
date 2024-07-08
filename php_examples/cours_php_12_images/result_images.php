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

            checkIfUserIsLogged();

            if (isset($_FILES['image'])) {
                $fichier = $_FILES['image'];
                $nomFichier = $fichier['name'];
                $tailleFichier = $fichier['size'];
                $typeFichier = $fichier['type'];
                $tmpFichier = $fichier['tmp_name'];
                $erreurFichier = $fichier['error'];

                if ($erreurFichier === UPLOAD_ERR_OK) {
                    $extensionsValides = array('jpg', 'jpeg', 'png', 'gif');
                    $extensionFichier = strtolower(pathinfo($nomFichier, PATHINFO_EXTENSION));

                    if (in_array($extensionFichier, $extensionsValides)) {
                        $contenuImage = file_get_contents($tmpFichier);

                        $req = $pdo->prepare('INSERT INTO images (nom, taille, type, contenu) VALUES (:nom, :taille, :type, :contenu)');

                        $req->bindParam(':nom', $nomFichier);
                        $req->bindParam(':taille', $tailleFichier);
                        $req->bindParam(':type', $typeFichier);
                        $req->bindParam(':contenu', $contenuImage);

                        $req->execute();

                        echo "L'image a été téléchargée avec succès !";
                    } else {
                        echo "Erreur : Format de fichier non valide.";
                    }
                } else {
                    echo "Erreur pendant le téléchargement de l'image.";
                }
            }

            ?>

        </div>
    </main>

    <?php require_once ('composants/footer.php') ?>

</body>

</html>