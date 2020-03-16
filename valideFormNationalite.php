<?php 
    include "header.php" ;
    include "connexionPdo.php";
    $action = $_GET['action'];
    $num=$_POST['num']; //je recupère l'id du formulaire
    $libelle=$_POST['libelle']; //je recupère le libelle du formulaire
if($action == "Modifier" ){
    $req = $monPdo->prepare("update nationalite set libelle = :libelle where num = :num");
    $req->bindParam(':num', $num);
    $req->bindParam(':libelle', $libelle);
}else{
    $req = $monPdo->prepare("insert into nationalite(libelle) values(:libelle)");
    $req->bindParam(':libelle', $libelle);
}
$nb=$req->execute();

$message = $action=="Modifier" ? "modifiée" : "ajoutée";

    echo '<div class="container mt-5 pt-5">';
    echo'<div class="row">
        <div class="col mt-3">';
    if($nb ==1){
        echo'<div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>La nationalité a bien été '.$message.'</strong>
            </div>';
    }else{  
        echo'<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>La nationalité n\'a bien été'. $message.'  </strong>  
            </div>';
    }
?>
 </div>
 </div>
 <div class='col'><a href='listeNationalites.php' class='btn btn-primary'>Revenir à la liste</a></div>
 </div>

<?php include "footer.php" ?>

