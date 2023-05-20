<?php
// Récupère les données envoyées en POST
$title = $_POST['titre']; 
$projet_id = $_POST['projet_id'];
$details = $_POST['details'];
$type = $_POST['type'];

// Connexion à la base de données MySQL
include_once('../db_connexion.php');
if(!empty($title) && !empty($projet_id) && !empty($details) && !empty($type)){
    // Prépare la requête SQL d'insertion
    $sql = 'INSERT INTO historics (title, projet_id, details, type) VALUES (:title, :projet_id, :details, :type)';
    $stmt = $db->prepare($sql);

    // Exécute la requête avec les valeurs des paramètres

    $stmt->bindValue(':title',$title, PDO::PARAM_STR);
    $stmt->bindValue(':projet_id', $projet_id, PDO::PARAM_INT);
    $stmt->bindValue(':details', json_encode($details), PDO::PARAM_STR);
    $stmt->bindValue(':type', $type, PDO::PARAM_STR);

    $stmt->execute();

    // Affiche un message de réussite
    echo 'L\'ajout a été effectué avec succès !';
}else{
    echo "Erreur d\'ajout";
}

?>
