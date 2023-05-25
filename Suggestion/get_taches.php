<?php

$id_projet = $_GET['id_projet'];

include_once('../db_connexion.php');

$sql = "SELECT * FROM suggestions WHERE objet = 'tache' AND id_projet = '$id_projet' ";
$select = $db->query($sql);

echo json_encode($select->fetchAll(PDO::FETCH_ASSOC));