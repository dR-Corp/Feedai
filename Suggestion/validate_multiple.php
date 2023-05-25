<?php
    include('../db_connexion.php');
    $ids = $_GET['ids'];
    $sql = "UPDATE suggestions SET etat = 1 WHERE id IN ($ids) ";
    
    if($db->exec($sql)) {
        echo json_encode([
            "alert" => "success",
            "alert_message" => "Suggestions validées !"
        ]);
    }
    else {
        echo json_encode([
            "alert" => "error",
            "alert_message" => "La validation a échouée !"
        ]);
    }
?>