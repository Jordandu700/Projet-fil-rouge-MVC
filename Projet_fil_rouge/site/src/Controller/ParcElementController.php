<?php
/**
 * src/Controller/ParcElementController.php
 * @author Jordan Moral - Janv. 2021
 * @version 1.0.0
 * Contrôleur appelé à l'ajout, la modification et suppression d'un élément du site
 */

require_once(__DIR__ . '/../Models/ParcElementModel.php');

$parcElement = new ParcElementController();
class ParcElementController {

    function __construct() {

        if ($_POST['queryType'] === 'add') {
            $parcElement = new ParcElementModel( $_POST['title_input'], $_POST['image_input'], $_POST['description_input'], $_POST['id'], $_POST['queryType'], intval($_POST['addElementSelect']));
        } else if ($_POST['queryType'] === 'update') {
            $parcElement = new ParcElementModel( $_POST['title_update'], $_POST['image_update'], $_POST['description_update'], $_POST['id'], $_POST['queryType'], '');
        } else if ($_POST['queryType'] === 'delete') {
            $parcElement = new ParcElementModel('', '', '', $_POST['id'], $_POST['queryType'], '');
        }
    }
}