<?php

require_once "fonctions_login.php";

function deleteUserById($id, $pdo){

    $sql = "DELETE FROM utilisateur WHERE id = :id";

    $request = $pdo->prepare($sql);

    $request->bindParam(':id', $id);

    $request->execute();

    if ($request->rowCount() > 0) {
        echo "Utilisateur supprimé avec succès!";
    } else {
        echo "Erreur lors de la suppression de l'utilisateur.";
    }
}

function getUserById($id, $pdo) {
    $request = $pdo->prepare("SELECT * FROM utilisateur WHERE id = :id");
    $request->bindParam(':id', $id);
    $request->execute();

    $users = $request->fetchAll();

    if (count($users) > 0) {
        return $users[0];
    } else {
        return null;
    }

}

function getUserByEmail($email, $pdo) {
    $request = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
    $request->bindParam(':email', $email);
    $request->execute();

    $users = $request->fetchAll();

    if (count($users) > 0) {
        return $users[0];
    } else {
        return null;
    }
}

function getUsers($pdo){
    $get_request = 'SELECT * FROM utilisateur';
    $result = $pdo->query($get_request);
    return $result -> fetchAll();

}

function createUser($nom, $prenom, $age, $email, $role, $mot_de_passe, $confirmation_de_mot_de_passe, $pdo){
    checkFieldsAndRedirect([$nom, $prenom, $age, $email, $role, $mot_de_passe, $confirmation_de_mot_de_passe], 'register.php');
    if ($confirmation_de_mot_de_passe == $mot_de_passe) {

        $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);


        $request = $pdo->prepare('INSERT INTO utilisateur (nom, prenom, age, email, mot_de_passe, role) VALUES (:nom, :prenom, :age, :email, :mot_de_passe, :role)');
        $request->bindParam(':nom', $nom);
        $request->bindParam(':prenom', $prenom);
        $request->bindParam(':age', $age);
        $request->bindParam(':email', $email);
        $request->bindParam(':role', $role);
        $request->bindParam(':mot_de_passe', $mot_de_passe_hache);
        $request->execute();

        if ($request->rowCount() === 1) {
            echo "L'utilisateur a été ajouté avec succès.";
        } else {
            echo "Une erreur est survenue lors de l'ajout de l'utilisateur.";
        }
    } else {
        echo 'Les mots de passe ne correspondent pas';
    }
}