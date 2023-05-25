<?php

include_once('../db_connexion.php');

$sql = "SELECT * FROM projets ";
$select = $db->query($sql);

echo json_encode($select->fetchAll(PDO::FETCH_ASSOC));