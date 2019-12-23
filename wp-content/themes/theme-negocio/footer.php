</main> <!--fin main-->
    <footer>
            <div class="logo-footer row d-flex justify-content-center">
                <div class="col-3 py-3 col-lg-2">
                    
                    <?php if ( get_field( 'img_footer', 'option') ) { ?>
                        <img src="<?php the_field( 'img_footer', 'option' ); ?>" class="d-block img-fluid mx-auto"/>
                    <?php } ?>
                </div>
            </div>
    </footer>
</div><!--site container-->
    <?php wp_footer(); ?>
</body>
</html>