
<section id="contact"  <?php if ( get_field( 'contact_bg', 'option') ) { ?>style="background-image: url('<?php the_field( 'contact_bg', 'option' ); ?>');"<?php } ?>>
        <div class="container my-5">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-7 direccion">
                    <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8170.624613107342!2d-58.8192711166272!3d-34.46032121080521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc9952ae998fb1%3A0xce0c8e358907c0b5!2sChile%204285%2C%20La%20Lonja%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1577043855779!5m2!1ses!2sar" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="col-12 col-lg-5 my-sm-3">
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