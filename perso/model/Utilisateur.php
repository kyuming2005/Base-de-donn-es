<?php
class Utilisateur {
 protected $db;
 public function __construct($db) {
 $this->db = $db;
 }


 public function getAllUsers() {
 $stmt = $this->db->prepare("SELECT * FROM utilisateur");
 $stmt->execute();
 return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }


public function createUser($nom, $email) {
    $stmt = $this->db->prepare("INSERT INTO utilisateurs (nom, email) VALUES (?, ?)");
    return $stmt->execute([$nom, $email]);
}
public function getUserById($id) {
    $stmt = $this->db->prepare("SELECT * FROM utilisateurs WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
public function updateUser($id, $nom, $email) {
    $stmt = $this->db->prepare("UPDATE utilisateurs SET nom = ?, email = ? WHERE id = ?");
    return $stmt->execute([$nom, $email, $id]);
}
public function deleteUser($id) {
    $stmt = $this->db->prepare("DELETE FROM utilisateurs WHERE id = ?");
    return $stmt->execute([$id]);
}
}

?>
