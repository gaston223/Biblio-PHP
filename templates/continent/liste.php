<div class="container mt-5 pt-5">
    <div class="row pt-3">
        <div class="col-9">
            <h2>Liste des continents</h2>
        </div>
        <div class="col-3">
            <a href="index.php?uc=continents&action=add" class="btn btn-primary"> <i class="fas fa-plus-circle"></i> Créer un continent</a>
        </div>
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
        foreach($lesContinents as $continent){
            echo"<tr class='d-flex'>";
            echo" <td class='col-md-2'>".$continent->getNum()."</th>";
            echo" <td class='col-md-8' >".$continent->getLibelle()."</td>";
            echo" <td class='col-md-2'>
                   <a href='index.php?uc=continents&action=update&num=".$continent->getNum()."' class='btn btn-warning'> <i class='fas fa-edit'></i></a>
                   <a href='#modal-delete' data-toggle='modal' data-message='Êtes-vous sur de supprimer le continent ?' data-delete='index.php?uc=continents&action=delete&num=".$continent->getNum()."' class='btn btn-danger'> <i class='fas fa-trash'></i></a>
                   </td>";
            echo"</tr>";
            //supprimerNationalite.php?num=$nationalite->num
        }?>
        </tbody>
    </table>

</div>
