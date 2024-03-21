<?php
require_once 'controller/UtilisateurController.php';
// Vous pouvez ajouter une logique de routage ici pour gérer différentes requêtes.



if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            include 'view/createUserForm.php';
            break;
        case 'edit':
            // Assurez-vous de passer l'ID de l'utilisateur à éditer
            $id = $_GET['id'] ?? null;
            if ($id) {
                $utilisateur = $utilisateurModel->getUserById($id);
                include 'view/updateUserForm.php';
            }
            break;
        // Ajoutez les cas pour 'update' et 'delete'
        default:
            $utilisateurs = $utilisateurModel->getAllUsers();
            include 'view/utilisateurs.php';  
          break;
    }
}


?>
