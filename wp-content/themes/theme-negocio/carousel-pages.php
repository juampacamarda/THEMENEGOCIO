<div id="slide-pages">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="container carousel-inner">
                            <div class="carousel-item active"  <?php if ( get_field( 'imagen01') ) { ?>style="background-image: url('<?php the_field( 'imagen01'  ); ?>');"<?php } ?>>
                            
                            </div>
                            <!--fin repeater-->
                            <?php
                            // check if the repeater field has rows of data
                            if( have_rows('slide_imagen') ):?>

                                <?php while( have_rows('slide_imagen') ): the_row(); ?>

                                <div class="carousel-item"  <?php if ( get_sub_field('imagen_slider') ) { ?>style="background-image: url('<?php the_sub_field( 'imagen_slider' ); ?>');"<?php } ?> data-interval="4000" >
                                </div>

                                <?php endwhile;

                            else :

                                // no rows found

                            endif;?>
            
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