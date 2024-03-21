<?php
include_once "model/Utilisateur.php";
include_once "database.php"; // fichier pour établir la connexion à la DB.


$db = getDatabaseConnection(); // fonction pour obtenir la connexion PDO.
$utilisateurModel = new Utilisateur($db);
$utilisateurs = $utilisateurModel->getAllUsers();


include "view/utilisateurs.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'create') {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $utilisateurModel->createUser($nom, $email);
      // Rediriger l'utilisateur vers la liste des utilisateurs après l'insertion
        header('Location: index.php');
    }    // Ajoutez ici la logique pour les autres actions (update, delete)}
}

?>