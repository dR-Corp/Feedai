<?php
// Récupère les données envoyées en POST
$nom = $_POST['nom'];
$type = $_POST['type'];
$details = $_POST['details'];

// Connexion à la base de données MySQL
include_once('../db_connexion.php');

// Prépare la requête SQL d'insertion
$sql = 'INSERT INTO projets (user_id, type_id, nom, type, details) VALUES (:user_id, :type_id, :nom, :type, :details)';
$stmt = $db->prepare($sql);

// Exécute la requête avec les valeurs des paramètres

$stmt->bindValue(':user_id', 1, PDO::PARAM_INT);
$stmt->bindValue(':type_id', 1, PDO::PARAM_INT);
$stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
$stmt->bindValue(':type', $type, PDO::PARAM_STR);
$stmt->bindValue(':details', json_encode($details), PDO::PARAM_STR);

$stmt->execute();

// Affiche un message de réussite
echo 'L\'ajout a été effectué avec succès !';
?>
