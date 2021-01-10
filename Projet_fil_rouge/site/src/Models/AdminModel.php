<?php
/**
 * src/Models/AdminModel.php
 * @author Jordan Moral - Janv. 2021
 * @version 1.0.0
 * Récupération des attractions du parc
 */

require_once(__DIR__ . '/../Core/Database/PDOMySQL.php');

 class AdminModel {

    /**
     * @var array $attractions
     * Contient toutes les attractions du site
     */
    private $attractions = [];

    /**
     * @var array $activities
     * Contient toutes les activités du site
     */
    private $activities = [];

    /**
     * @var array $shows
     * Contient tous les spectacles du site
     */
    private $shows = [];

    /**
     * @var array $animations
     * Contient toutes les animations du site
     */
    private $animations = [];

    public function __construct() {
      $connexion = new PDOMySQL();
      $connexion->connect();
      $db = $connexion->getInstance();

      $query = "SELECT activity_id, name, url_image, description, typeactivite.libelle FROM activite INNER JOIN typeactivite ON activite.type_id = typeactivite.type_id";
      $parcElements = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);

      $this->sortElements($parcElements);
    }

    public function sortElements($parcElements) {

      foreach($parcElements as $parcElement) {

        if ($parcElement['libelle'] === 'attraction') {
          array_push($this->attractions, $parcElement);
        } else if ($parcElement['libelle'] === 'activite') {
          array_push($this->activities, $parcElement);
        } else if ($parcElement['libelle'] === 'spectacle') {
          array_push($this->shows, $parcElement);
        } else {
          array_push($this->animations, $parcElement);
        }
      }
    }

    public function getAttractions() {
      return $this->attractions;
    }

    public function getActivities() {
      return $this->activities;
    }

    public function getShows() {
      return $this->shows;
    }

    public function getAnimations() {
      return $this->animations;
    }
 }