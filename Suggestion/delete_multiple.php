<?php
    include('../db_connexion.php');
    $ids = $_GET['ids'];
    $sql = "DELETE FROM suggestions WHERE id IN ($ids) ";
    
    if($db->exec($sql)) {
        echo json_encode([
            "alert" => "success",
            "alert_message" => "Suggestions supprimées !"
        ]);
    }
    else {
        echo json_encode([
            "alert" => "error",
            "alert_message" => "La suppression a échouée !"
        ]);
    }
?>