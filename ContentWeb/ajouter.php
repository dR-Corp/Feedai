<?php
// Récupère les données envoyées en POST
$projet_id = $_POST['projet_id'];
$user_id = $_POST['user_id'];
$titre = $_POST['titre'];
$contenu = $_POST['contenu'];

// Connexion à la base de données MySQL
include_once('../db_connexion.php');
if(!empty($projet_id) && !empty($user_id) && !empty($titre) && !empty($contenu)){
    // Prépare la requête SQL d'insertion
    $sql = 'INSERT INTO contenu_web (projet_id, user_id, titre, contenu) VALUES (:projet_id, :user_id, :titre, :contenu)';
    $stmt = $db->prepare($sql);

    // Exécute la requête avec les valeurs des paramètres

    $stmt->bindValue(':projet_id',$projet_id, PDO::PARAM_INT);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindValue(':titre',$titre , PDO::PARAM_STR);
    $stmt->bindValue(':contenu', json_encode($contenu), PDO::PARAM_STR);

    $stmt->execute();

    // Affiche un message de réussite
    echo 'L\'ajout le contenu web effectué avec succès !';
}else{
    echo "Erreur d\'ajout";
}

?>
