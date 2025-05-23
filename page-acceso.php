<?php 
/**
 * Template Name: Página Acceso
 * 
 */
get_header();
?>


<!-- Registro Socios Section -->
<section class="section acceso">
  <div id="acceso" class="container">
    <div data-aos="zoom-in" data-aos-delay="100"  class="row justify-content-center mx-1">
      <?php
        // Para el formulario de inicio de sesión
        echo do_shortcode('[wpmem_form login redirect_to="'.site_url('/socios').'"]');
        ?>

    </div>

 </div>

</section>
<!-- / -->

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