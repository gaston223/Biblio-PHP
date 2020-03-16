<?php
include "header.php" ;
include "connexionPdo.php";
$num=$_GET['num']; //je recupère l'id du formulaire

$req = $monPdo->prepare("delete from nationalite where num = :num");
$req->bindParam(':num', $num);
$nb=$req->execute();


echo '<div class="container mt-5 pt-5">';
echo'<div class="row">
        <div class="col mt-3">';
if($nb ==1){
    echo'<div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>La nationalité a bien été supprimée !</strong>
            </div>';
}else{
    echo'<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Une erreur est survenue ! </strong>  
            </div>';
}
?>
</div>
</div>
<div class='col'><a href='listeNationalites.php' class='btn btn-primary'>Revenir à la liste</a></div>
</div>

<?php include "footer.php" ?>

