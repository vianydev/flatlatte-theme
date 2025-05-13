<?php 
/**
 * Template Name: Página Socio Flat Latte
 */
get_header();
?>

<!-- Hero Section -->
<section id="hero" class="section p-0 mb-5">
  <div class="container hero d-flex">
    <div class="row justify-content-start justify-content-lg-between align-items-end hero-title">
      <div class="col-lg-8 order-lg-1">
        <h1 data-aos="fade-up" data-aos-delay="300">
          <?php echo esc_html( get_theme_mod('hero_title', 'Gana más ofreciendo sitios web, sin tocar una línea de código.') ); ?>
        </h1>
        <p data-aos="fade-up" data-aos-delay="400" class="pt-2">Nosotros hacemos el trabajo técnico. Tú entregas un sitio profesional y cobras más.</p>
      </div>
      
      <div class="col-lg-4 imagen-hero mb-5 mb-lg-0 mx-0 order-1 order-lg-2 text-center">
        <p class="mt-5" data-aos="fade-up" data-aos-delay="600">
          <a href="<?php echo esc_url(home_url('/contacto-socio-flat-latte')); ?>"
            class="btn btn-get-started">
            <?php echo esc_html( get_theme_mod('about_button_text', 'Quiero ser socio') ); ?>
          </a>
        </p>

      </div>

    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row justify-content-start">
      <div class="col-lg-7 mb-5 mb-lg-0 order-2 order-lg-1 d-flex flex-column">
        <h1 class="lh-sm my-lg-4" data-aos="fade-up"><?php echo esc_html( get_theme_mod('about_title', '¿Eres diseñador, fotógrafo, community manager o creativo freelance?') ); ?></h1>
        <div class="col-lg-11 mb-2" data-aos="fade-up">
          <?php echo wpautop(get_theme_mod('about_content', 'Te va a encantar esto:')); ?>
        </div>

        <div class="col-lg-11 mb-4" data-aos="fade-up">
          <?php echo wpautop(get_theme_mod('about_content', '
Flat Latte te permite <b>ofrecer sitios web profesionales</b> a tus clientes, sin que tengas que programarlos y preocuparte por lo técnico.

Tú ganas. Nosotros construimos.
Tú creces. Nosotros estamos detrás.')); ?>
        </div>

        <!-- <p class="mt-5" data-aos="fade-up">
          <a href="<?php echo esc_url(home_url('/contacto-socio-flat-latte')); ?>"
            class="btn btn-get-started">
            <?php echo esc_html( get_theme_mod('about_button_text', 'Hagamos equipo') ); ?>
          </a>
        </p> -->
      </div>

      <div class="col-lg-5 imagen-about mb-5 mb-lg-0 order-1 order-lg-2"
        style="background-image: url('<?php echo esc_url(get_theme_mod('about_image', get_template_directory_uri() . '/assets/img/flatlatte-v.jpg')); ?>')" data-aos="fade-up" data-aos-delay="200">
      </div>
    </div>
  </div>
</section>

<!-- How it works Section -->
<section id="tabs" class="tabs section">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="text-center">
        <div class="">
          <h1 class="" data-aos="fade-up">¿Cómo funciona?</h1>
          <p class="" data-aos="fade-up">
            Fácil, sin rollos técnicos.
          </p>
        </div>
      </div>

      <div class="gap-x-lg-4 justify-content-center align-items-center">

        <div class="row justify-content-center">
          <!-- item -->
          <div class="col-12 col-lg-7 g-4 row" data-aos="fade-left" data-aos-delay="0">
            <div class="col-2 mb-4 mx-auto">
              <p class="fs-3 m-0 tab-number">
                1
              </p>
            </div>
            <div class="col-10 service-contents">
              <i class="fs-3 fw-semibold mb-1 bi bi-chat-left-dots">
                <span class="">Agendamos una videollamada</span>
              </i>
              <p>
                 Te explicamos cómo funciona todo, resolvemos tus dudas y te damos la guía para ofrecer este servicio como parte de lo que ya haces.
              </p>
            </div>
          </div>
          <!--  /item -->
          <!-- item -->
          <div class="col-12 col-lg-7 g-4 row" data-aos="fade-left" data-aos-delay="0">
            <div class="col-2 mb-4 mx-auto">
              <p class="fs-3 m-0 tab-number">
                2
              </p>
            </div>
            <div class="col-10 service-contents">
              <i class="fs-3 fw-semibold mb-1 bi bi-puzzle">
                <span class="">Tú conectas con el cliente, nosotros con el código</span>
              </i>
              <p>
              Nos mandas la información de tu cliente (nosotros te damos el brief) y nos encargamos del sitio.
              </p>
            </div>
          </div>
          <!--  /item -->
          <!-- item -->
          <div class="col-12 col-lg-7 g-4 row" data-aos="fade-left" data-aos-delay="0">
            <div class="col-2 mb-4 mx-auto">
              <p class="fs-3 m-0 tab-number">
                3
              </p>
            </div>
            <div class="col-10 service-contents">
              <i class="fs-3 fw-semibold mb-1 bi bi-rocket">
                <span class="">Entregas un sitio bonito y funcional</span>
              </i>
              <p>
              Tu cliente queda feliz, tú cobras por un sitio web profesional con el nombre de tu marca
              </p>
            </div>
          </div>
          <!--  /item -->

  
        </div>

      </div>
      <div class=" mt-5 text-center">
        <a class="btn btn-get-started" href="<?php echo esc_url(home_url('/contacto-socio-flat-latte')); ?>"  data-aos="fade-up">
          Empezar ahora
        </a>
      </div>
    </div>
  </div>
</section>
<!-- /How it works Section -->


<!-- Services Section -->
<section id="services" class="services section">
  <div class="container">
    <div class="row align-items-start justify-content-between">
      <div class="col-lg-8 order-lg-1">
        <!-- <h1 class="lh-sm my-lg-4" data-aos="fade-up">Beneficios de ser socio:</h1> -->
      </div>

      <div class="order-lg-2">
        <div class="container">
          <div class="row align-items-center" data-aos="fade-up">
            <!-- Imagen (ocupa 1 columna cuando hay 2 servicios) -->
            <div class="col-12 col-sm-12 col-lg-4 me-0 me-lg-5 imagen-services"
              style="background-image: url('<?php echo esc_html( get_template_directory_uri() ); ?>/assets/img/img_v_1.JPG')"
              data-aos="fade-up">
            </div>

            <!-- Servicio 1 -->
            <div class="col col-lg-7 mb-2">
            <h1 class="lh-sm mt-4 mb-lg-4" data-aos="fade-up">Beneficios de ser socio:</h1>

              <div class="d-flex align-items-center my-4" data-aos="fade-up" data-aos-delay="0">
                <div class="fs-3 me-2">
                  💰
                  <!-- <i class="bi bi-window"></i> -->
                </div>
                <p class="mb-1">Ingreso extra (tú decides cuánto cobras)</p>
              </div>
              <div class="d-flex align-items-center my-4" data-aos="fade-up" data-aos-delay="100">
                <div class="fs-3 me-2">
                  <!-- <i class="bi bi-window"></i> -->
                  🤝
                </div>
                <p class="mb-1">Un equipo detrás que te apoya</p>
              </div>
              <div class="d-flex align-items-center my-4" data-aos="fade-up" data-aos-delay="200">
                <div class="fs-3 me-2">
                  <!-- <i class="bi bi-window me-2"></i> -->
                  ✨
                </div>
                <p class="mb-1">Más valor para tus clientes, sin más trabajo</p>
              </div>
              <div class="d-flex align-items-center my-4" data-aos="fade-up" data-aos-delay="300">
                <div class="fs-3  me-2">
                  <!-- <i class="bi bi-window"></i> -->
                  🧘
                </div>
                <p class="mb-1"> Menos estrés, más enfoque en lo que haces bien</p>
              </div>

              <div class="mt-5">
                <a class="btn btn-get-started" href="<?php echo esc_url(home_url('/contacto-socio-flat-latte')); ?>" data-aos="fade-up" data-aos-delay="400">
                  Quiero ser socio
              </a>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section id="CTA" class="section">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="section-title text-center">
        <div class="">
          <h1 class="" data-aos="fade-up">¿Listo para ser socio Flat Latte?</h1>
          <p class="" data-aos="fade-up">
            Ofrece sitios web sin complicarte.
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


<!-- FAQ Section -->
<section id="faq" class="faq section">
  <div class="container section-title" data-aos="fade-up">
    <h1><?php echo esc_html( get_theme_mod('faq_title', 'Preguntas Frecuentes') ); ?></h1>
  </div>

  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-12">
        <div class="custom-accordion" id="accordion-faq">
          <?php
                // Mostrar FAQs desde Customizer o por defecto
                for ($i = 1; $i <= 8; $i++) {
                    $faq_question = esc_html( get_theme_mod("faq_{$i}_question") );
                    $faq_answer = esc_html( get_theme_mod("faq_{$i}_answer") );
                    
                    if ($faq_question || $i <= 6) {
                        echo '<div class="accordion-item">';
                        echo '<p class="mb-0">';
                        echo '<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-' . $i . '">';
                        echo $faq_question ?: (
                            $i == 1 ? '¿Tengo que saber programar o diseñar sitios web?' : 
                            ($i == 2 ? '¿Cuánto puedo ganar por cada sitio web?' : 
                            ($i == 3 ? ' ¿Puedo usar mi propia marca o nombre para ofrecer el servicio?' : 
                            ($i == 4 ? ' ¿Cómo le explico esto a mi cliente si nunca he ofrecido sitios web?' : 
                            ($i == 5 ? '¿Qué pasa si mi cliente necesita algo más complejo?' : 
                            '¿Qué necesito para empezar?' 
                           ))))
                        );

                        echo '</button></p>';
                        echo '<div id="collapse-faq-' . $i . '" class="collapse" aria-labelledby="heading' . $i . '" data-parent="#accordion-faq">';
                        echo '<div class="accordion-body">';
                        echo $faq_answer ?: (
                            $i == 1 ? 'No. Nosotros nos encargamos de todo lo técnico. Tú solo necesitas conocer bien a tu cliente y comunicar sus necesidades.' : 
                            ($i == 2 ? 'Tú decides tu precio. Nosotros te damos un costo base por proyecto y tú agregas el margen que quieras. Lo que cobras al cliente es completamente tuyo.' : 
                            ($i == 3 ? 'Sí. Flat Latte trabaja detrás de escena. Tú puedes presentarlo como un servicio propio o como parte de tu portafolio.' : 
                            ($i == 4 ? 'En nuestra videollamada inicial te damos una guía clara, recursos y ejemplos para que puedas comunicar el valor sin necesidad de hablar de código.' : 
                            ($i == 5 ? 'Nos puedes consultar. Si el proyecto es viable, te damos un presupuesto especial. Si no encaja, te lo decimos con honestidad.' : 
                            'Solo agendar una videollamada. Te explicamos todo, vemos si encajamos bien y listo: puedes comenzar a ofrecer sitios web con nuestro respaldo'  
                            ))))
                        );
                        echo '</div></div></div>';
                    }
                }
            ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /FAQ Section -->

<!-- We Love Section -->
<section id="we-love" class="we-love section">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-12">
        <h1 class="text-center" data-aos="fade-up">
          <?php echo esc_html(get_theme_mod('we_love_title', 'En Flat Latte disfrutamos...')); ?>
        </h1>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-12 col-sm-12">
        <p class="text-center my-2">Del café recién molido</p>
      </div>
    </div>
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-12 col-sm-12">
        <p class="text-center my-2">La música sincera</p>
      </div>
    </div>
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-12 col-sm-12">
        <p class="text-center my-2">La belleza de lo simple</p>
      </div>
    </div>
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-12 col-sm-12">
        <p class="text-center my-2">Crear proyectos con propósito</p>
      </div>
    </div>

    <div class="row justify-content-center" data-aos="fade-up">

      <div class="col-12 col-sm-12">
        <p class="text-center my-4 fw-semibold">
          <?php echo esc_html(get_theme_mod('we_love_question', '¿Y tú también amas lo que haces?')); ?>
        </p>
        <p class="text-center my-5" data-aos="fade-up">
          <a href="<?php echo esc_url(home_url('/contacto-socio-flat-latte')); ?>" class="btn btn-get-started">
            <?php echo esc_html(get_theme_mod('we_love_button_text', 'Hagamos equipo')); ?>
          </a>
        </p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>