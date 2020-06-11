<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chacra Nativa</title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<div class="site-container">
    <header>
            <nav class="navbar navbar-theme navbar-light navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand logo animated fadeInLeft slow" href="<?php echo get_site_url(); ?>">
                        <!--<img src="<//?php echo get_template_directory_uri();?>/assets/images/chacra-nativa.png" class="d-none d-sm-block img-fluid" alt="">-->
                        <?php if ( get_field( 'logo_del_sitio', 'option') ) { ?>
                            <img src="<?php the_field( 'logo_del_sitio', 'option' ); ?>" class="d-none d-sm-block img-fluid"  />
                        <?php } ?>
                        <h1 class="d-block d-sm-none">Chacra Nativa</h1>
                    </a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="content-menus">
                        <div class="menu-redes d-none d-lg-flex justify-content-end">

                            <ul class="nav">
                                <li>
                                    <a href="https://www.facebook.com/Chacra-Nativa" target="_blank">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href=" https://www.instagram.com/chacra_nativa/" target="_blank">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                                
                            </ul>
                        
                        </div>
                        <!--menu dinamico-->
                        <?php wp_nav_menu(array(
                        'theme_location' => 'superior',
                        'container' =>'div',
                        'container_class' => 'collapse navbar-collapse animated fadeInDown',
                        'container_id' => 'navbarTogglerDemo02',
                        'items_wrap' => '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">%3$s</ul>',
                        'items_class' => 'nav-item',
                        'depth' => 3
                        ) ); ?>
                        <!--menu dinamico-->
                    </div>
                
                        

                </div><!--fin container-->
            </nav>
    </header>