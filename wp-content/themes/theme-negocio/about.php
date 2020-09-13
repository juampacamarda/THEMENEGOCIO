<section id="about" class="animated fadeIn delay-1s" >
            <div class="container d-lg-flex align-items-lg-center">
                        <div class="col-12 col-lg-6 align-lg-center">
                            <div class="about-tittle"  
                            <?php if ( get_field( 'logo_about_us') ) { ?>
                                style="background-image: url('<?php the_field( 'logo_about_us' ); ?>');"
                            <?php } else { ?> 
                                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/chow-iso.png');" <?php } ?> 
                            >
                                <h2><?php the_field( 'tittle_about' ); ?></h2>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <p>
                                <?php the_field( 'text-about' ); ?>
                            </p>
                        </div>
                    </div>
            </div>          
    </section>