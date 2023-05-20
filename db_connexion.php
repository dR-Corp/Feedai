<?php
    $dsn = 'mysql:host=localhost;dbname=feedai;charset=utf8';
    $username = 'root';
    $password = '';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    try {
        $db = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }