<?php

$user_id = $_POST['user_id'];

include_once('../db_connexion.php');
if(!empty($user_id)){
    $sql = "SELECT * FROM projets WHERE user_id = '$user_id' ORDER BY id DESC LIMIT 5 ";
    $select = $db->query($sql);
    
    echo json_encode($select->fetchAll(PDO::FETCH_ASSOC), true);
    
}else{
    echo "Erreur";
}
