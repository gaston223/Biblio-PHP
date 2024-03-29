<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Biblio ADMIN </title>

    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
      <!--Font Awesome-->
      <script src="https://kit.fontawesome.com/3a35c19d1d.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
  <a class="navbar-brand" href="index.php">Biblio-Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="fas fa-book"></i>  Gestion des livres <span class="caret"></span></a>
            <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="index.php?uc=livres&action=list">Liste des livres</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?uc=livres&action=add">Ajouter un livre</a>
            </div>
        </li>

       <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="fas fa-sitemap"></i>  Gestion des genres <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="index.php?uc=genres&action=list">Liste des genres</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?uc=genres&action=add">Ajouter un genre</a>
              </div>
        </li>

         <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="fas fa-male"></i>  Gestion des auteurs <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="index.php?uc=auteurs&action=list">Liste des auteurs</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?uc=auteurs&action=add">Ajouter un auteur</a>
              </div>
        </li>

        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="far fa-flag"></i>  Gestion des nationalités <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="index.php?uc=nationalites&action=list">Liste des nationalités</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?uc=nationalites&action=add">Ajouter une nationalité</a>
              </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="far fa-flag"></i>  Gestion des continents <span class="caret"></span></a>
            <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="index.php?uc=continents&action=list">Liste des continents</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?uc=continents&action=add">Ajouter un continent</a>
            </div>
        </li>

    </ul>
  </div>
</nav>

