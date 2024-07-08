<?php

function checkIfUserIsLogged() {
    /* En vérifiant la variable $_SESSION cela me permet de valider que l'utilisateur est connecté */
    if (!isset($_SESSION["email"]) && empty($_SESSION["email"]) && !isset($_SESSION["id"]) && empty($_SESSION["id"])) {
        header("Location: login.php");
    }
}

function checkFieldsAndRedirect($fieldsArray, $path){
    foreach ($fieldsArray as $field) {
        if (empty($field)) {
            header('Location: '. $path);
        }
    }
}

function disconnectUser() {
    session_destroy();
    header('Location: login.php');
}