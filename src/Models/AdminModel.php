<?php
/**
 * src/Models/AdminModel.php
 * @author Jordan Moral - Janv. 2021
 * @version 1.0.0
 * Récupération des attractions du parc
 */
require_once(__DIR__ . '/../Core/Database/PDOMySQL.php');

 class AdminModel {

    private $attractions;

    public function __construct() {
      $connexion = new PDOMySQL();
      $connexion->connect();
      $db = $connexion->getInstance();

      $query = "SELECT attraction_id, name, url_image, description FROM attraction";
      $attractions = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
      var_dump($attractions);
      $this->attractions = $attractions;
    }

    public function getAttractions() {
      return $this->attractions;
    }
 }