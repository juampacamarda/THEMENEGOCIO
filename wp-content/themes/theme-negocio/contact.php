
<section id="contact" <?php if ( get_field( 'contact_bg', 'option') ) { ?>style="background-image: url('<?php the_field( 'contact_bg', 'option' ); ?>');"<?php } ?>>
        <div class="container">
            <div class="row d-flex justify-content-end">
                <div class="col-12 col-lg-5">
                    <div class="form">
                        <h3 class="form-tittle">
                            CONTACTANOS PARA RECIBIR MÁS INFORMACIÓN
                        </h3>
                        <?php the_field( 'contact_form', 'option' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>