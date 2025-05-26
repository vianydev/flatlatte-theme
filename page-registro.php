<?php 
/**
 * Template Name: Página Registro Socios
 * 
 */
get_header();
?>

<!-- Registro Socios Section -->
<section class="section registro">
  <div id="registro" class="container">
    <!-- <h1 class="text-md-center mb-5" data-aos="zoom-in" data-aos-delay="100">Registrate para ser socio</h1> -->
    <div data-aos="zoom-in" data-aos-delay="100"  class="row justify-content-center mx-1">

     <?php
        // Para el formulario de registro
        echo do_shortcode('[wpmem_form register]');
      ?> 

      <a class="text-center mt-5" href="<?php echo esc_url(home_url('/acceso')); ?>" data-aos="fade-up" data-aos-delay="100">
          ¿Ya eres socio?
        </a>
    </div>

 </div>

</section>
<!-- /COTIZADOR -->

<!-- CTA Section -->
<section id="CTA" class="section CTA">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="section-title text-center">
        <div class="">
          <h1 class="" data-aos="fade-up">¿Eres freelancer y quieres ofrecer sitios web?</h1>
          <p class="" data-aos="fade-up">
            Conviértete en socio flat latte y ofrece sitios profesionales sin preocuparte del desarrollo.
          </p>
        </div>
      </div>
      <div class=" mt-1 text-center">
        <a class="btn btn-get-started" href="<?php echo esc_url(home_url('/contacto-socio-flat-latte')); ?>" data-aos="fade-up" data-aos-delay="100">
          Quiero ser socio
        </a>
      </div>
    </div>
  </div>
</section>
<!-- / CTA Section -->

<?php get_footer(); ?>