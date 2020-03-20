<?php session_start(); ?>
<?php include "templates/header.php" ;
   $uc=empty($_GET['uc']) ? "accueil" : $_GET['uc'];
   switch($uc){
      case 'accueil' : include ('templates/accueil.php');
         break;
      case 'continents' : include ('templates/continents.php');
         break;
   }
include "templates/footer.php" ?>
