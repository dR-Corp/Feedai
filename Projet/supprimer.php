<?php

$id = $_POST['id'];

include_once('../db_connexion.php');

$sql = 'DELETE FROM projets WHERE id = :id';
$stmt = $db->prepare($sql);

$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$stmt->execute();

echo 'La suppression a été effectuée avec succès !';
