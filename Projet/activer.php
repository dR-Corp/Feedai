<?php

$id = $_POST['id'];
$description = $_POST['description'];

include_once('../db_connexion.php');

$sql = "UPDATE projets SET etat = :etat, description = :description WHERE id = '$id'";
$stmt = $db->prepare($sql);

$stmt->bindValue(':etat', 1, PDO::PARAM_INT);
$stmt->bindValue(':description', json_encode($description), PDO::PARAM_STR);
$stmt->execute();

echo json_encode([
    "alert"=> "success",
    "alert_message" => "Projet activé avec succès"
]);
