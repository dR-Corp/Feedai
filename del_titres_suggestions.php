<?php
    include('db_connexion.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM suggestions WHERE id = '$id' ";
    
    if($db->exec($sql)):
        echo json_encode([
            "alert" => "success",
            "alert_message" => "Suggestion supprimée avec succès !"
        ]);
    else:
        echo json_encode([
            "alert" => "error",
            "alert_message" => "La suppression a échouée !"
        ]);
    endif;
?>