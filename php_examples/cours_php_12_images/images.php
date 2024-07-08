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
        <form action="result_images.php" method="post" enctype="multipart/form-data">
            <div class="form_input">
                <label for="image">Votre image : </label>
                <input  type="file" name="image" id="image">
            </div>
            <div class="form_input">
                <button type="submit" >Télécharger </button>
            </div>
        </form>
        <div>
            <?php
            require_once("utils/bdd/database.php");
            require_once ("utils/fonctions/fonctions_login.php");

            checkIfUserIsLogged();

            $get_request = 'SELECT * FROM images';
            $result = $pdo->query($get_request);
            $images = $result -> fetchAll();

            foreach ($images as $image) {
                echo '<img src="data:image/jpeg;base64,'.base64_encode($image['contenu']).'"/>';
            }
            ?>
        </div>
    </main>

    <?php require_once ('composants/footer.php') ?>

</body>

</html>