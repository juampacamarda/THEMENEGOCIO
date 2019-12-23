<?php
/*
Template Name: service-plantilla
*/
?>
<?php get_header();?>
<!--instedando portada de pàgina-->
<?php get_template_part('tittle', 'page');?>
<section id="data" class=" d-lg-flex align-items-lg-center">
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="service-tittle" <?php if ( get_field( 'logo_descripcion') ) { ?>style="background-image: url('<?php the_field( 'logo_descripcion' ); ?>');"<?php } ?>>
                    <h2><?php the_title(); ?></h2>
                </div>
                <p>
                    <?php the_field( 'descripcion' ); ?>
                </p>
            </div>

            <div class="col-md-4 details">
                <div>
                    <h2>FICHA TÉCNICA</h2>
                </div>
                <p>
                    <?php the_field( 'ficha_tecnica' ); ?>

                </p>
            </div>
        </div>        
    </div> 

</section>
<?php get_template_part('carousel', 'pages');?>
<?php get_template_part('contact', 'pages');?>
<?php get_footer();?> 