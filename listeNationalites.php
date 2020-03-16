<?php 
    include "header.php" ;
    include "connexionPdo.php";
    $req = $monPdo->prepare("select * from nationalite");
    $req->setFetchMode(PDO::FETCH_OBJ);
    $req->execute();
    $lesNationalites = $req->fetchAll();
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
                <th scope="col" class="col-md-8">Libellé</th>
                <th scope="col" class="col-md-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lesNationalites as $nationalite){
                  echo"<tr class='d-flex'>";
                   echo" <td class='col-md-2'>$nationalite->num</th>";
                   echo" <td class='col-md-8' >$nationalite->libelle</td>";
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
