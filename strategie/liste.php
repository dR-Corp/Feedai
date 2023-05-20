<?php

$projet_id = $_POST['id'];

include_once('../db_connexion.php');
if(!empty($projet_id)){
    $sql = "SELECT * FROM strategies WHERE projet_id = '$projet_id' ORDER BY id DESC LIMIT 5";
    $select = $db->query($sql);
    
    echo json_encode($select->fetchAll(PDO::FETCH_ASSOC), true);
    
}else{
    echo "Erreur";
}
