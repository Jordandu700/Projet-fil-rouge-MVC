<?php

require_once(__DIR__ . '/../Models/AttractionModel.php');

$addAttraction = new AttractionController();
class AttractionController {

    function __construct() {

        if ($_POST['queryType'] === 'add') {
            $Attraction = new AttractionModel( $_POST['title_input'], $_POST['image_input'], $_POST['description_input'], $_POST['id'], $_POST['queryType']);
        } else if ($_POST['queryType'] === 'update') {
            $Attraction = new AttractionModel( $_POST['title_update'], $_POST['image_update'], $_POST['description_update'], $_POST['id'], $_POST['queryType']);
        } else if ($_POST['queryType'] === 'delete') {
            $Attraction = new AttractionModel('', '', '', $_POST['id'], $_POST['queryType']);
        }
    }
}