<?php 
    include "header.php" ;
    include "connexionPdo.php";
    $libelle=$_POST['libelle']; //je recupère le libelle du formulaire

    $req = $monPdo->prepare("insert into nationalite(libelle) values(:libelle)");
    $req->bindParam(':libelle', $libelle);
    $nb=$req->execute();

    echo '<div class="container mt-5 pt-5">';
    echo'<div class="row">
        <div class="col mt-3">';
    if($nb ==1){
        echo'<div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>La nationalité a bien été ajoutée !</strong>
            </div>';
    }else{  
        echo'<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Une erreur est survenue !</strong>  
            </div>';
    }
?>
 </div>
 </div>
 <div class='col'><a href='listeNationalites.php' class='btn btn-primary'>Revenir à la liste</a></div>
 </div>



<?php include "footer.php" ?>

