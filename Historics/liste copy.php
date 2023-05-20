<?php

$id = $_POST['id'];

include_once('../db_connexion.php');

$sql = "SELECT * FROM projets WHERE id = '$id'";
$select = $db->query($sql);

echo json_encode($select->fetch(PDO::FETCH_ASSOC));
