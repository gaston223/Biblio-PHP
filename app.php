<?php session_start();
 include "templates/header.php";
 include "models/Continent.php";
 include "models/Nationalite.php";
 include "models/Genre.php";
 include "models/Auteur.php";
 include "models/monPdo.php";
 include("templates/messagesFlash.php");

   $uc=empty($_GET['uc']) ? "accueil" : $_GET['uc'];
   switch($uc){
      case 'accueil' : include ('templates/accueil.php');
         break;
      case 'continents' : include ('controllers/ContinentController.php');
         break;
      case 'nationalites' : include ('controllers/NationaliteController.php');
         break;
      case 'genres' : include ('controllers/GenreController.php');
         break;
      case 'auteurs' : include ('controllers/AuteurController.php');
         break;


   }
include "templates/footer.php";
