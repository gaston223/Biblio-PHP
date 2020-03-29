<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Biblio PHP </title>

    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
      <!--Font Awesome-->
      <script src="https://kit.fontawesome.com/3a35c19d1d.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
  <a class="navbar-brand" href="index.php">Biblio PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="fas fa-sitemap"></i>  Gestion des genres <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="#">Liste des genres</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Ajouter un genre</a>
              </div>
        </li>   

         <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="fas fa-male"></i>  Gestion des auteurs <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="#">Liste des auteurs</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Ajouter un auteur</a>
              </div>
        </li>
        
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="far fa-flag"></i>  Gestion des nationalités <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="listeNationalites.php">Liste des nationalités</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="formNationalite.php?action=Ajouter">Ajouter une nationalité</a>
              </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="far fa-flag"></i>  Gestion des continents <span class="caret"></span></a>
            <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="app.php?uc=continents&action=list">Liste des continents</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="app.php?uc=continents&action=add">Ajouter un continent</a>
            </div>
        </li>
        
    </ul>
  </div>
</nav>

  <?php
  if(!empty($_SESSION['message'])) {
      $mesMessages = $_SESSION['message'];
      foreach ($mesMessages as $key => $message) {
          echo '
  <div class="container pt-5">
      <div class="alert alert-' . $key . ' alert-dismissible fade show" role="alert">
          ' . $message . '
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
  </div>
  ';
      }
      $_SESSION['message'] = [];
  }
?>