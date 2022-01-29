<div class="container mt-5 pt-5">

    <div class="row pt-3">
        <div class="col-9"> <h2>Liste des nationalités</h2></div>
        <div class="col-3"> <a href="index.php?uc=nationalites&action=add" class="btn btn-primary"> <i class="fas fa-plus-circle"></i> Créer une nationalité</a></div>
    </div>


    <form action="index.php?uc=nationalites&action=list" method="post" class="border border-primary rounded p-3 mt-3 mb-3">
        <div class="row">
            <div class="col">
                <input type='text'  class='form-control' id='libelle' value="<?php echo $libelle; ?>" placeholder='Saisir le libellé' name='libelle'>
            </div>
            <div class="col">
                <select name="continent" class="form-control"  id="continent">
                    <?php
                    echo"<option value='Tous'>Tous les continents</option>";
                    foreach ($lesContinents as $continent){
                        $selection=$continent->getNum() == $continentSelected? 'selected' : '';
                        echo"<option value='{$continent->getNum()}' {$selection}>{$continent->getLibelle()}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success btn-block">Rechercher</button>
            </div>
        </div>
    </form>


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
            echo" <td class='col-md-2'>$nationalite->numero</th>";
            echo" <td class='col-md-4' >$nationalite->libNation</td>";
            echo" <td class='col-md-4' >$nationalite->libContinent</td>";
            echo" <td class='col-md-2'>
                   <a href='index.php?uc=nationalites&action=update&num={$nationalite->numero}' class='btn btn-warning'> <i class='fas fa-edit'></i></a>
                   <a href='#modal-delete' data-toggle='modal' data-message='Êtes-vous sur de supprimer la nationalité ?' data-delete='index.php?uc=nationalites&action=delete&num={$nationalite->numero}' class='btn btn-danger'> <i class='fas fa-trash'></i></a>
                   </td>";
            echo"</tr>";
            //supprimerNationalite.php?num=$nationalite->num
        }?>
        </tbody>
    </table>
</div>
