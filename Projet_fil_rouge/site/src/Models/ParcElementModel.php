<?php
/**
 * src/Models/ParcElementModel.php
 * @author Jordan Moral - Janv. 2021
 * @version 1.0.0
 * Exécution des requêtes d'ajout, de modification et de suppression d'un élément du site
 */

require_once(__DIR__ . '/../Core/Database/PDOMySQL.php');

class ParcElementModel {

    function __construct($title, $url_image, $description, $id, $queryType, $addElementSelect) {

        $connexion = new PDOMySQL();
        $connexion->connect();
        $db = $connexion->getInstance();

        if ($queryType === 'add') {
            $query = "INSERT INTO activite (name, url_image, description, type_id) VALUES ('$title', '$url_image', '$description', '$addElementSelect');";
        } else if ($queryType === 'update') {
            $query = "UPDATE activite SET name = '$title', url_image = '$url_image', description = '$description' WHERE activity_id = $id;";
        } else {
            $query = "DELETE FROM activite WHERE activity_id = $id;";
        }
        $db->exec($query);
    }
}