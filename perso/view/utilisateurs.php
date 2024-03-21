<!DOCTYPE html>
<html>
<head>
 <title>Liste des Utilisateurs</title>
 </head>
<body>
 <h1>Utilisateurs</h1>
 <ul>
 <?php foreach ($utilisateurs as $utilisateur): ?>
 <li><?php echo $utilisateur['nom']; ?></li>
 <?php endforeach; ?>
 </ul>
</body>
</html>
