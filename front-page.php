<?php get_header();?>

<main class="container-fluid bg-secondary" style="height: 80vh;">
    <div class="row h-100">

        <div class="col-md-8 bg-warning h-100 overflow-y-auto overflow-x-hidden">
            <div class="row h-50">

                <?php for ($i = 1; $i <= 30; $i++) { ?>

                    <div class="col-md-4 h-100 p-3">
                        <div class="card h-100">

                            <img src="https://www.elespectador.com/resizer/v2/ORPMXKF6Z5DOZCCWF22IP5NVWI.png?auth=ab9dc8b235e768091e588c7c39993d375eb3ed9765ca664fe9075d8230ca0704&width=920&height=613&smart=true&quality=60" class="card-img-top h-50">

                            <div class="card-body">
                                <h5 class="card-title">Card <?php echo $i; ?></h5>
                                <p class="card-text">Contenido de ejemplo.</p>
                                <a href="#" class="btn btn-primary">Botón</a>
                            </div>

                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>

        <aside class="col-md-4 bg-danger h-100">
            <div class="row h-100">
                <!-- CAJA 1 -->
                <div class="col-md-12 h-50 p-3">

                    <div class="bg-white h-100 rounded">

                    </div>

                </div>
                <!-- CAJA 2 -->
                <div class="col-md-12 h-50 p-3">

                    <div class="bg-white h-100 rounded">

                    </div>

                </div>
            </div>
        </aside>

    </div>
</main>

<?php get_footer();?>