<div id="portada-home" class="animated fadeInUpBig" >
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
                            <?php if ( get_field( 'imagen01') ) { ?>
                            <!--<img src="<? //php the_field( 'imagen01' ); ?>" class="img-fluid d-block w-100" /> -->
                            <div class="carousel-item active" style="background-image:url('<?php the_field( 'imagen01' ); ?>'); background-size:cover;background-repeat:no-repeat;height:450px">
                            </div>
                        <?php }else{ ?>
                            <div class="carousel-item active" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/slide-02.jpg'); background-size:cover;background-repeat:no-repeat;height:450px">
                            </div>
                        <?php } ?>
                        <!--fin repeater-->
                        <?php
                        // check if the repeater field has rows of data
                        if( have_rows('slide_imagen') ):?>

                            <?php while( have_rows('slide_imagen') ): the_row(); 
                            // vars
                            $image = get_sub_field('imagen_slider')?>

                            <div class="carousel-item" data-interval="2000" style="background-image:url('<?php echo $image['url'] ; ?>'); background-size:cover;background-repeat:no-repeat;height:450px">
                                
                                
                            </div>

                            <?php endwhile;

                            else : ?>

                            <div class="carousel-item" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/slide-01.jpg'); background-size:cover;background-repeat:no-repeat;height:450px">
                            </div>

                        <?php endif;?>
        
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>