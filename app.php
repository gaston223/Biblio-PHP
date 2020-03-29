<?php session_start();
 include "templates/header.php";
 include "models/Continent.php";
 include "models/monPdo.php";


   $uc=empty($_GET['uc']) ? "accueil" : $_GET['uc'];
   switch($uc){
      case 'accueil' : include ('templates/accueil.php');
         break;
      case 'continents' : include ('controllers/ContinentController.php');
         break;
   }
include "templates/footer.php";
