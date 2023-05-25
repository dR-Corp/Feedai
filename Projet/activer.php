<?php

$id = $_POST['id'];

$description = $_POST['description'];

include_once('../db_connexion.php');

$sql = "SELECT * FROM projets WHERE id = '$id' ";
$stmt = $db->query($sql);
$projet = $stmt->fetch(PDO::FETCH_ASSOC);
$details_1 = json_decode($projet['details'], true);

// echo json_encode($details['id_niche']); exit;

$details_2 = [
    "profil_type" => $description['profil'],
    "recapitulatif" => $description['recapitulatif'],
    "positionnements" => $_POST['positionnements'],
    "motivations" => $_POST['motivations'],
    "besoins" => $_POST['besoins'],
    "profils" => $_POST['profils']
];

$details = array_merge($details_1, $details_2);

// les details générés pendant l'activation du projet 
// $details['profil_type'] = $description['profil'];
// $details['recapitulatif'] = $description['recapitulatif'];

// // les details selections avant l'activation du projet
// $details['positionnements'] = $_POST['positionnements'];
// $details['motivations'] = $_POST['motivations'];
// $details['besoins'] = $_POST['besoins'];
// $details['profils'] = $_POST['profils'];

// liste de toutes les suggestions
$suggestions = $description['suggestions'];
// la requete de modification
$sql = "UPDATE projets SET etat = :etat, details = :details WHERE id = '$id'";
$stmt = $db->prepare($sql);

$stmt->bindValue(':etat', 1, PDO::PARAM_INT);
$stmt->bindValue(':details', json_encode($details), PDO::PARAM_STR);
$stmt->execute();

//ajout des suggestions
$sql = "INSERT INTO suggestions (id_projet, objet, contenu) VALUES (:id_projet, :objet, :contenu) ";
$stmt = $db->prepare($sql);
$stmt->bindValue(':id_projet', $id, PDO::PARAM_INT);

$types = [['objectifs', 'objectif'], ['taches', 'tache'], ['strategies', 'strategie'], ['titres', 'titre']];

foreach ($types as $type) {
    foreach ($suggestions[$type[0]] as $suggestion) {
        $stmt->bindValue(':objet', $type[1], PDO::PARAM_STR);
        $stmt->bindValue(':contenu', $suggestion[$type[1]], PDO::PARAM_STR);
        $stmt->execute();
    }
}

echo json_encode([
    "alert"=> "success",
    "alert_message" => "Projet activé avec succès",
    "alert_data" => $_POST
]);
