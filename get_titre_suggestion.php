<?php
    include('db_connexion.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM suggestions WHERE id = '$id' ";
    $select = $db->query($sql);
    $titres = $select->fetch(PDO::FETCH_ASSOC);

    echo json_encode($titres);
?>