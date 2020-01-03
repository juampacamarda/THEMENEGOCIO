<section id="services">
    <div class="container">
            <div class="services-intro" >
                <div class="services-tittle" <?php if ( get_field( 'logo_services') ) { ?>style="background-image: url('<?php the_field( 'logo_services' ); ?>');"<?php } ?> >
                    <h2><?php the_field( 'tittle_services' ); ?></h2>
                </div>
                <p>
                    <?php the_field( 'text_services' ); ?>
                </p>
            </div>
            <div class="row d-flex justify-content-center">
                <?php if( have_rows('service-repeater') ): ?>

                     
                    <?php while( have_rows('service-repeater') ): the_row(); 

                        // vars
                        $title = get_sub_field('titulo_servicio');
                        $image = get_sub_field('imagen');
                        $txt = get_sub_field('txt');
                        $link = get_sub_field('link');

                        ?>
                    <div class="col-12 col-sm-4 col-lg-4 my-2">

                        <?php if( $link ): ?>
                        <a class="service" href="<?php echo $link; ?>">
                            <?php endif; ?>
                                <div class="service-img">
                                    <?php echo '<img src="'. $image['url'] .'" class="img-fluid d-block" />';?>
                                </div>
                                <div class="service-detail">

                                    <h3 class="detail-titulo"><?php echo $title; ?></h3>
                                    <p class="detail-descripcion">
                                        <?php echo $txt; ?>
                                    </p>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-service">Ver Más</button>
                                    </div>
                                    
                                </div>
                            <?php if( $link ): ?>    
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                          
                <?php endif; ?>

            </div>
    </div>
</section>