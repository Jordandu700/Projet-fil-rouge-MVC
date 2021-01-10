<?php
/**
 * src/Controller/AdminController.php
 * @author Jordan Moral - Janv. 2021
 * @version 1.0.0
 * Contrôleur appelé au chargement de la page admin
 */

require_once(__DIR__ . '/../Models/AdminModel.php');

 class AdminController {

    /**
     * @var array $attractions
     * Contient toutes les attractions du site
     */
    private $attractions;

    /**
     * @var array $activities
     * Contient toutes les activités du site
     */
    private $activities;

    /**
     * @var array $shows
     * Contient tous les spectacles du site
     */
    private $shows;

    /**
     * @var array $animations
     * Contient toutes les animations du site
     */
    private $animations;

    public function __construct() {

        $adminModel = new AdminModel();
        $this->attractions = $adminModel->getAttractions();
        $this->activities = $adminModel->getActivities();
        $this->shows = $adminModel->getShows();
        $this->animations = $adminModel->getAnimations();

        include(__DIR__ . '/../Views/adminPage.php');
    }
 }