<div id="modal-delete" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation de suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sur de supprimer ?</p>
            </div>
            <div class="modal-footer">
                <a href="supprimerNationalite.php" id="btnSuppr" type="button" class="btn btn-primary">Supprimer</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>
<footer class="container mt-5 text-center">
  <p>&copy; Biblio - PHP crée par Gaoussou Coulibaly</p>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
    $("a[data-delete]").click(function(){
        let lien = $(this).attr("data-delete");//On récupère le lien du bouton
        let message = $(this).attr("data-message");//On récupère le lien du bouton
        $("#btnSuppr").attr("href", lien);//On écrit ce lien sur le bouton "supprimer"
        $(".modal-body").text(message);//On écrit ce lien sur le bouton "supprimer"
    })
</script>

</body>
</html>