<?php 
    include "header.php" ;
    include "connexionPdo.php";
    $req = $monPdo->prepare("select * from nationalite");
    $req->setFetchMode(PDO::FETCH_OBJ);
    $req->execute();
    $lesNationalites = $req->fetchAll();
?>

    <div class="container mt-5">
        <h2 class="pt-3 text-center">Ajouter une nationalité</h2>
        <form action="valideAjoutNationalite.php" method="post" class="col-md-6 offset-md-3 border border-primary p-3 rounded">
            <div class="form group">
                <label for='libelle'>Libellé</label>
                  <input type='text' class='form-control' id='libelle' value='' placeholder='Saisir la nationalité' name='libelle'>
             </div>
             <div class="row pt-3">
                 <div class='col'><a href='listeNationalites.php' class='btn btn-warning btn-block'>Revenir à la liste</a></div>
                 <div class='col'><button type='submit' class='btn btn-success btn-block'>Ajouter</button></div>
             </div>
        </form>
    </div>

<?php include "footer.php" ?>

