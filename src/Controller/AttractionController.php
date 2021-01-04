<?php

require_once(__DIR__ . '/../Models/AttractionModel.php');
// $form = $_POST['form'];
// $title = $_POST['title_input'];
// $url_image = $_POST['image_input'];
// $description = $_POST['description_input'];
// echo 'title : ' . $title;

// $connexion = new PDOMySQL();
// $connexion->connect();
// $db = $connexion->getInstance();
// $query = ("INSERT INTO attractions (name, url_image, description) VALUES ('$title', '$url_image', '$description');";

$addAttraction = new AttractionController();
class AttractionController {

    function __construct() {

        if ($_POST['queryType'] === 'add') {
            $Attraction = new AttractionModel( $_POST['title_input'], $_POST['image_input'], $_POST['description_input'], $_POST['id'], $_POST['queryType']);
            echo 'TITLE INPUT RECU ' . $_POST['title_input'];
        } else if ($_POST['queryType'] === 'update') {
            $Attraction = new AttractionModel( $_POST['title_update'], $_POST['image_update'], $_POST['description_update'], $_POST['id'], $_POST['queryType']);
            echo 'TITLE UPDATE RECU ' . $_POST['title_update_test'];
        } else if ($_POST['queryType'] === 'delete') {
            echo 'DELETE RECU : ' . $_POST['id'];
            $Attraction = new AttractionModel('', '', '', $_POST['id'], $_POST['queryType']);
        }

        // $form = $_POST['form'];
        // $title = $_POST['title_input'];
        // $url_image = $_POST['image_input'];
        // $description = $_POST['description_input'];
        // echo 'title : ' . $title;
    }
}