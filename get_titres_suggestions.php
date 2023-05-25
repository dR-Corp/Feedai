<?php
    include('db_connexion.php');
    $id_projet = $_GET['id_projet'];
    $sql = "SELECT * FROM suggestions WHERE objet = 'titre' AND id_projet = '$id_projet' LIMIT 10 ";
    $select = $db->query($sql);
    $titres = $select->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($titres);
?>