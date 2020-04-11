<?php

use models\Genre;

$action=$_GET['action'];
switch($action){
    case 'list' :
        $lesGenres=Genre::findAll();
        include('templates/genre/listeGenres.php');
        break;
    case 'add' :
        $mode="Ajouter";
        include('templates/genre/formGenre.php');
    break;
    case 'update' :
        $mode="Modifier";
        $genre=Genre::findById($_GET['num']);
        include('templates/genre/formGenre.php');
        break;
    case 'delete' :
        $genre=Genre::findById($_GET['num']);
        $nb=Genre::delete($genre);
        if($nb==1){
        $_SESSION['message']=["success"=>"Le genre a bien été supprimé"];
        }else{
            $_SESSION['message']=["danger"=>"Le genre n'a pas été supprimé"];
        }
        header('location: index.php?uc=genres&action=list');
        exit();
        break;

    case 'valideForm' :
        $genre= new Genre();
        if(empty($_POST['num'])){ // cas d'une création
            $genre->setLibelle($_POST['libelle']);
            $nb=Genre::add($genre);
            $message = "ajouté";
        }else{ //  cas d'une modif
            $genre->setNum($_POST['num']);
            $genre->setLibelle($_POST['libelle']);
            $nb=Genre::update($genre);
            $message = "modifié";
        }
        if($nb==1){
            $_SESSION['message']=["success"=>"Le genre a bien été $message"];
        }else{
            $_SESSION['message']=["danger"=>"Le genre a bien été $message"];
        }
        header('location: index.php?uc=genres&action=list');
        exit();
        break;
}
?>
