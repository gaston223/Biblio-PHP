<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: ""
            },
            data: [{
                type: "pie",
                startAngle: 25,
                toolTipContent: "<b>{label}</b>: {y}%",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - {y}%",
                dataPoints: <?php echo json_encode(\models\Livre::livreParGenre(), JSON_NUMERIC_CHECK) ?>
            }]
        });
        chart.render();

    }
</script>

<main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron container mt-5">
        <div class="container">
<!--            <h1 class="display-3">ADMIN</h1>-->
            <h3 class="display-4">Bienvenue sur l'interface d'administration de la bibliothèque !</h3>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="height: 600px">
                    <div class="card border-primary mb-3"  style="height: 600px">
                        <div class="card-header text-center h4">Statistiques des livres par genres</div>
                        <div class="card-body">
                            <p class="card-text" id="chartContainer"></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4"  style="height: 600px">
                    <div class="card border-primary mb-3"  style="height: 600px">
                        <div class="card-header text-center h4">Statistiques générales</div>
                        <div class="card-body mt-5">
                            <h4 class="card-title text-center">
                                <a href="app.php?uc=livres&action=list">
                                    <span class="badge badge-success"><?php echo \models\Livre::nombreLivres(); ?></span>
                               livres </a>
                            </h4>
                            <hr>
                            <h4 class="card-title text-center">
                                <a href="app.php?uc=auteurs&action=list">
                                    <span class="badge badge-success"><?php echo \models\Auteur::nombreAuteurs(); ?></span>
                                    auteurs </a>
                            </h4>
                            <hr>

                            <h4 class="card-title text-center">
                                <a href="app.php?uc=genres&action=list">
                                    <span class="badge badge-success"><?php echo \models\Genre::nombreGenres(); ?></span>
                                    genres</a>
                            </h4>
                            <hr>

                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div> <!-- /container -->
</main>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
