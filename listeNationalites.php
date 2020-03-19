<?php 
    include "header.php" ;
    include "connexionPdo.php";
    $req = $monPdo->prepare("select n.num, n.libelle as libNation, c.libelle as libContinent from nationalite n, continent c where n.numContinent=c.num order by n.libelle");
    $req->setFetchMode(PDO::FETCH_OBJ);
    $req->execute();
    $lesNationalites = $req->fetchAll();

    if(!empty($_SESSION['message'])){
        $mesMessages = $_SESSION['message'];
        foreach ($mesMessages as $key=>$message){
            echo '
                <div class="container pt-5">
                    <div class="alert alert-'.$key.' alert-dismissible fade show" role="alert">
                    '.$message .'
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                </div>
                ';
        }
        $_SESSION['message']=[];
    }
?>


    <div class="container mt-5 pt-5">

        <div class="row pt-3">
            <div class="col-9"> <h2>Liste des nationalités</h2></div>
            <div class="col-3"> <a href="formNationalite.php?action=Ajouter" class="btn btn-primary"> <i class="fas fa-plus-circle"></i> Créer une nationalité</a></div>
        </div>
    
            
        <table class="table table-hover table-striped mt-3">
            <thead>
                <tr class="d-flex">
                <th scope="col" class="col-md-2">Numéro</th>
                <th scope="col" class="col-md-4">Libellé</th>
                <th scope="col" class="col-md-4">Continent</th>
                <th scope="col" class="col-md-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lesNationalites as $nationalite){
                  echo"<tr class='d-flex'>";
                   echo" <td class='col-md-2'>$nationalite->num</th>";
                   echo" <td class='col-md-4' >$nationalite->libNation</td>";
                   echo" <td class='col-md-4' >$nationalite->libContinent</td>";
                   echo" <td class='col-md-2'>
                   <a href='formNationalite.php?action=Modifier&num=$nationalite->num' class='btn btn-warning'> <i class='fas fa-edit'></i></a>
                   <a href='#modal-delete' data-toggle='modal' data-message='Êtes-vous sur de supprimer la nationalité ?' data-delete='supprimerNationalite.php?num=$nationalite->num' class='btn btn-danger'> <i class='fas fa-trash'></i></a>
                   </td>";
                   echo"</tr>";
                    //supprimerNationalite.php?num=$nationalite->num
                }?>
            </tbody>
        </table>
    </div>



<?php include "footer.php" ?>

