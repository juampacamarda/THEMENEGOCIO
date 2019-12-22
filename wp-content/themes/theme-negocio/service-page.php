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
                <div class="service-tittle">
                    <h2>TITULO SECCIÓN</h2>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                    erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                    sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                    et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                    accusam et justo duo dolores et ea rebum. Stet clita kasd
                </p>
            </div>

            <div class="col-md-4 details">
                <div>
                    <h2>FICHA TÉCNICA</h2>
                </div>
                <p>
                    - Lorem ipsum dolor sit amet.</br>
                    - Consetetur sadipscing elitr, sed diam</br>
                    nonumy eirmod tempor invidunt ut.</br>
                    - labore et dolore magna aliquyam.</br>
                    - At vero eos et accusam et justo duo
                    dolores et ea rebum.</br>
                </p>
            </div>
        </div>        
    </div> 

</section>
<?php get_template_part('carousel', 'pages');?>
<?php get_template_part('contact');?>
<?php get_footer();?> 