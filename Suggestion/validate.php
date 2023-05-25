<?php
    include('../db_connexion.php');
    $id = $_GET['id'];
    $sql = "UPDATE suggestions SET etat = 1 WHERE id = '$id' ";
    
    if($db->exec($sql)) {
        echo json_encode([
            "alert" => "success",
            "alert_message" => "Suggestion validée !"
        ]);
    }
    else {
        echo json_encode([
            "alert" => "error",
            "alert_message" => "La validation a échouée !"
        ]);
    }
?>