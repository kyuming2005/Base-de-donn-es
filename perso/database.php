<?php
function getDatabaseConnection() {
// Paramètres de connexion à la base de données
$host = 'localhost';
$dbname = 'morgan';
$username = 'root';
$password = ''; // XAMPP utilise par défaut pas de mot de passe


try {
    // Création d'une instance PDO pour la connexion à la base de données
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configuration des attributs PDO pour lancer une exception en cas d'erreur
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
    catch (PDOException $e) {
    // Gestion de l'erreur de connexion
    die("Impossible de se connecter à la base de données: " . $e->getMessage());
}
}

?>
