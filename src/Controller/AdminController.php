<?php
/**
 * src/Controller/AdminController.php
 * @author Jordan Moral - Janv. 2021
 * @version 1.0.0
 * Contrôleur 
 */
require_once(__DIR__ . '/../Models/AdminModel.php');


 class AdminController {

    // private $repository;

    private $attractions;

    public function __construct() {

        $adminModel = new AdminModel();
        $this->attractions = $adminModel->getAttractions();

        include(__DIR__ . '/../Views/adminPage.php');
    }
 }