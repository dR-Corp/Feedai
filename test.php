<?php
// Configuration de la connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedai";

// Créer une connexion PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtenir la structure de la base de données
    $select_tables = $conn->query("SHOW TABLES");

    $elements = [];

    $tables = $select_tables->fetchAll(PDO::FETCH_NUM);
    foreach ($tables as $key => $table) {

        $id = $key + 1;
        $name = $table[0];

        $select_columns = $conn->query("DESCRIBE " . $name);
        $columns = $select_columns->fetchAll(PDO::FETCH_COLUMN, 0);

        $elements[] = [
            "id" => $id,
            "name" => $name,
            "columns" => $columns
        ];

    }

    print_r($elements);

    exit;

    // Parcourir les tables de la base de données
    while ($row = $select_tables->fetch(PDO::FETCH_NUM)) {
        $tableName = $row[0];
        echo "Table : " . $tableName . "\n";

        // Obtenir la structure de chaque table
        $columns = $conn->query("DESCRIBE " . $tableName);

        // Parcourir les colonnes de la table
        while ($column = $columns->fetch(PDO::FETCH_ASSOC)) {
            echo "- Colonne : " . $column['Field'] . ", Type : " . $column['Type'] . "\n";
        }

        echo "\n";
    }
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
