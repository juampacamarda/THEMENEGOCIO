
<?php if (get_field('tarifario')) : ?>
    <section id="info-servicio" class="d-flex align-items-center">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-4 pt-3">
                <h2 class="tarifa-tittle">
                    <?php the_field( 'titulo_cuadro' ); ?>
                </h2>
                <h4 class="meses">
                    <?php the_field( 'meses_' ); ?>
                </h4>
                <h4 class="año">
                 <?php the_field( 'ano' ); ?>
                </h4>
            </div>
            <div class="col-lg-8">
                <p class="texto-tarifa">
                    <?php the_field( 'frase_' ); ?>
                <?php $tarifario = get_field( 'tarifario' ); ?>
                <?php if ( $tarifario ) { ?>
                <a href="<?php echo $tarifario['url']; ?>" target="_blank" class="btn">DESCARGAR DETALLE</a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php endif ?>