<?php

require_once(__DIR__ . '/../Core/Database/PDOMySQL.php');

class AttractionModel {

    function __construct($title, $url_image, $description, $id, $queryType) {

        $connexion = new PDOMySQL();
        $connexion->connect();
        $db = $connexion->getInstance();

        if ($queryType === 'add') {
            $query = "INSERT INTO attraction (name, url_image, description) VALUES ('$title', '$url_image', '$description')";
        } else if ($queryType === 'update') {
            $query = "UPDATE attraction SET name = '$title', url_image = '$url_image', description = '$description' WHERE attraction_id = $id;";
        } else {
            echo 'DELETE RECU DANS ATTRACTIONMODEL : ' . $id;
            $query = "DELETE FROM attraction WHERE attraction_id = $id;";
        }
        echo 'QUERY TYPE DANS LE MODELE ' . $queryType;
        $db->exec($query);
    }
}