<?php 
/**
 * Template Name: Página principal
 */
get_header();
?>

<!-- Hero Section -->
<section id="hero" class="section p-0 mb-5">
  <div class="container hero d-flex">
    <div class="row justify-content-start justify-content-lg-between align-items-end hero-title">
      <div class="col-lg-8 order-lg-1">
        <h1 data-aos="fade-up" data-aos-delay="300">
          <?php echo esc_html(  get_theme_mod('hero_title', 'Tienes algo único que merece ser visto.') ); ?>
        </h1>
        <p data-aos="fade-up" data-aos-delay="300" class="col-10 opacity-25">
          <?php echo esc_html( get_theme_mod('hero_text', 'Sitios web para creativos, emprendedores y freelancers') ); ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 mb-5 mb-lg-0 order-2 d-flex flex-column text-center">
        <h1 class="lh-sm my-lg-4" data-aos="fade-up"><?php echo esc_html( get_theme_mod('about_title', 'Muestra al mundo lo que haces') ); ?></h1>

        <div class="col-lg-11 mb-4" data-aos="fade-up">
          <?php echo wpautop(get_theme_mod('about_content', 'Creamos sitios web limpios y  bien pensados, sin secciones innesarias, para que tu proyecto conecte con tu audiencia, sin complicarte con detalles técnicos.')); ?>
        </div>

      </div>
    </div>

    <div class="row g-2">

      <div class="col-md-6 col-lg-4 about-box text-center p-3" data-aos="fade-up">
        <div class="about-icon d-flex justify-content-center align-items-center">
          <i class="bi bi-globe"></i>
        </div>
        <h5 class="mt-3">Dominio y Alojamiento incluidos</h5>
        <p class="">Nosotros lo conectamos todo. Tú solo eliges el nombre.</p>
      </div>
  
      <div class="col-md-6 col-lg-4 about-box text-center p-3" data-aos="fade-up">
        <div class="about-icon d-flex justify-content-center align-items-center">
          <i class="bi bi-phone"></i>
        </div>
        <h5 class="mt-3">Diseño móvil optimizado</h5>
        <p class="">Adaptado a cualquier celular, tablet o computadora.</p>
      </div>
  
      <div class="col-md-6 col-lg-4 about-box text-center p-3" data-aos="fade-up">
        <div class="about-icon d-flex justify-content-center align-items-center">
          <i class="bi bi-lightning"></i>
        </div>
        <h5 class="mt-3">Rápido y listo para Google</h5>
        <p class="">Listo para ser encontrado y no hacer esperar.</p>
      </div>

      <div class="col-md-6 col-lg-4 about-box text-center p-3" data-aos="fade-up">
        <div class="about-icon d-flex justify-content-center align-items-center">
          <i class="bi bi-diagram-3"></i>
        </div>
        <h5 class="mt-3">Redes sociales integradas</h5>
        <p class="">Conecta tus canales fácilmente o enlace directo a WhatsApp.</p>
      </div>
  
      <div class="col-md-6 col-lg-4 about-box text-center p-3" data-aos="fade-up">
        <div class="about-icon d-flex justify-content-center align-items-center">
          <i class="bi bi-puzzle"></i>
        </div>
        <h5 class="mt-3">Secciones personalizadas</h5>
        <p class="">Creamos un sitio con las secciones que realmente necesitas, Ya sea un portafolio, tienda o página de contacto, todo depende de tus objetivos.</p>
      </div>
  
      <div class="col-md-6 col-lg-4 about-box text-center p-3" data-aos="fade-up">
        <div class="about-icon d-flex justify-content-center align-items-center">
          <i class="bi bi-pencil-square"></i>
        </div>
        <h5 class="mt-3">Autogestionable</h5>
        <p class="">Podrás actualizar tu contenido cuando quieras, sin depender de un desarrollador.</p>
      </div>

    </div>

    <div class="row text-center">
      <p class="mt-5" data-aos="fade-up">
        <a href="<?php echo esc_url(home_url('/precios')); ?>"
          class="btn btn-get-started">
          <?php echo esc_html( get_theme_mod('about_button_text', 'Quiero mi sitio web') ); ?>
        </a>
      </p>
    </div>

      <!-- <div class="col-lg-5 imagen-about mb-5 mb-lg-0 order-1 order-lg-2">
        <img class="w-50" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/img_v_3.JPG'); ?>" alt="">
      </div> -->

  </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">
  <div class="container">
    <div class="row justify-content-between align-items-end mb-5">
      <div class="col-lg-8">
        <h1 class="mb-4" data-aos="fade-up">
          <?php echo esc_html(get_theme_mod('portfolio_title', 'Algunos de nuestros flat lattes:')); ?>
        </h1>
      </div>
    </div>

    <div class="row gy-4" data-aos="fade-right" data-aos-delay="200">
      <?php
            $portfolio_query = new WP_Query(array(
                'post_type' => 'portfolio',
                'posts_per_page' => 3,
                'meta_key' => '_featured_project',
                'meta_value' => '1',
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            
            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                    ?>
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-img">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large', array('class' => 'img-fluid portfolio-bw-color')); ?>
            <?php else : ?>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/placeholder.jpg'); ?>"
              class="img-fluid portfolio-bw-color" alt="">
            <?php endif; ?>
          </a>
        </div>
      </div>
      <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Mostrar proyectos recientes si no hay destacados
                $recent_query = new WP_Query(array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));
                
                if ($recent_query->have_posts()) :
                    while ($recent_query->have_posts()) : $recent_query->the_post();
                        ?>
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-img">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large', array('class' => 'img-fluid portfolio-bw-color')); ?>
            <?php else : ?>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/placeholder.jpg'); ?>"
              class="img-fluid portfolio-bw-color" alt="">
            <?php endif; ?>
          </a>
        </div>
      </div>
      <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Mostrar placeholders si no hay proyectos
                    for ($i = 1; $i <= 3; $i++) {
                        echo '<div class="col-lg-4 col-md-6 portfolio-item">';
                        echo '<div class="portfolio-img">';
                        echo '<a href="#">';
                        echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/portfolio/project-' . $i . '.jpg') . '" class="img-fluid portfolio-bw-color" alt="">';
                        echo '<h3 class="mt-3">' . sprintf(__('Proyecto de ejemplo %d', 'flatlatte'), $i) . '</h3>';
                        echo '</a></div></div>';
                    }
                endif;
            endif;
            ?>
    </div>
    <div class="my-5 text-center" data-aos="fade-right" data-aos-delay="200">
      <a href="<?php echo get_post_type_archive_link('portfolio'); ?>" class="all-projects btn-line">
        Ver más
      </a>
    </div>
  </div>
</section>
<!-- /Portfolio Section -->
<!-- How it works Section -->
<section id="tabs" class="tabs section">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="section-title text-center">
        <div class="col-lg-12">
          <h1 class="" data-aos="fade-up">Así de simple es tener tu sitio web</h1>
        </div>
      </div>

      <div class="row gap-x-lg-4 justify-content-center align-items-center col-md-12">
        <div class="d-flex flex-column flex-lg-row">
          <div class="tab-item col-12 col-lg-4 text-center" data-aos="fade-left" data-aos-delay="0">
            <div class="mb-4 mx-auto">
              <p class="fs-3 m-0">1</p>
            </div>
            <div class="service-contents">
              <p class="fs-5 fw-semibold mb-1">Hablamos</p>
              <p>
                Agendamos una llamada para hablar de tu proyecto y aclares todas tus dudas.
              </p>
            </div>
          </div>

          <div class="tab-item col-12 col-lg-4 text-center" data-aos="fade-left" data-aos-delay="100">
            <div class="mb-4 mx-auto">
              <p class="fs-3 m-0">2</p>
            </div>
            <div class="service-contents">
              <p class="fs-5 fw-semibold mb-1">Creamos</p>
              <p>
                Comenzamos con el desarrollo de tu sitio web y te enviamos avances para asegurarnos de que todo va como esperas.
              </p>
            </div>
          </div>

          <div class="tab-item col-12 col-lg-4 text-center" data-aos="fade-left" data-aos-delay="200">
            <div class="mb-4 mx-auto">
              <p class="fs-3 m-0">3</p>
            </div>
            <div class="service-contents">
              <p class="fs-5 fw-semibold mb-1">Lanzamos</p>
              <p>
                Ponemos tu sitio en línea, listo para mostrar. además te garantizamos soporte técnicos claro y cercano.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-12 mt-5 text-center">
          <a class="btn btn-get-started" href="<?php echo esc_url(home_url('/precios')); ?>"  data-aos="fade-up">
            Quiero mi sitio web
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /How it works Section -->

<!-- Services Section -->
<section id="services" class="services section">
  <div class="container">
    <div class="row align-items-start justify-content-between">
      <div class="col-lg-12 order-lg-2">
        <div class="container">
          <div class="row align-items-strench" data-aos="fade-up">
            <!-- Imagen (ocupa 1 columna cuando hay 2 servicios) -->
            <div class="col-12 col-sm-12 col-lg-4 imagen-services"
              style="background-image: url('<?php echo esc_html( get_template_directory_uri() ); ?>/assets/img/img_v_1.JPG')"
              data-aos="fade-up">
            </div>

            <!-- Servicio 1 -->
            <div class="col col-sm-12 col-lg-8">
              <div class="services-item row align-content-between" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-12">
                  <h1 class="lh-sm my-2 mb-lg-4" data-aos="fade-up">
                    ¿Eres freelancer y quieres ofrecer sitios web?
                  </h1>
                  <div>
                    <p>
                      Conviértete en socio flat latte y ofrece sitios profesionales sin preocuparte del desarrollo.
                    </p>
                    <p class="fst-italic">Ideal para: </p>
                    <div class="services-item p-0" data-aos="fade-up" data-aos-delay="300">
                      <div class="d-flex">
                        <i class="bi bi-check fs-5 me-1"></i>
                        <p class="my-0">Diseñadores gráficos</p>
                      </div>
                      <div class="d-flex">
                        <i class="bi bi-check fs-5 me-1"></i>
                        <p class="my-0">Fotógrafos</p>
                      </div>
                      <div class="d-flex">
                        <i class="bi bi-check fs-5 me-1"></i>
                        <p class="my-0">Agencias de marketing</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 my-4 my-md-2">
                  <a class="btn btn-get-started " href="<?php echo esc_url(home_url('/socio')); ?>" target="_blank"  data-aos="fade-up">
                    Quiero ser socio
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
                    $faq_question = get_theme_mod("faq_{$i}_question");
                    $faq_answer = get_theme_mod("faq_{$i}_answer");
                    
                    if ($faq_question || $i <= 7) {
                        echo '<div class="accordion-item">';
                        echo '<p class="mb-0">';
                        echo '<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-' . $i . '">';
                        echo $faq_question ?: (
                            $i == 1 ? '¿Qué tipo de sitios web hacen?' :  
                            ($i == 2 ? '¿Cuánto tiempo toma crear un sitio web?' : 
                            ($i == 3 ? '¿Puedo vender mis productos o servicios en mi sitio?' : 
                            ($i == 4 ? '¿Qué pasa si necesito cambios en el futuro?' : 
                            ($i == 5 ? '¿Cuánto cuesta?' : 
                            ($i == 6 ? '¿Es posible cambiar el diseño después de que el sitio esté en producción?' : 
                            '¿El sitio web será totalmente compatible con dispositivos móviles?')))))
                        );

                        echo '</button></p>';
                        echo '<div id="collapse-faq-' . $i . '" class="collapse" aria-labelledby="heading' . $i . '" data-parent="#accordion-faq">';
                        echo '<div class="accordion-body">';
                        echo $faq_answer ?: (
                            $i == 1 ? 'Trabajamos principalmente con creativos, emprendedores y artistas, por lo que hacemos portafolios, tiendas en línea, blogs, sistemas de reservas, venta de cursos y más.' : 
                            ($i == 2 ? 'Depende de la complejidad, pero en general, los proyectos básicos toman de 2 a 4 semanas.' : 
                            ($i == 3 ? '¡Claro! Podemos integrar una tienda online o botones de pago según lo que necesites.' : 
                            ($i == 4 ? 'Podemos hacerlos por ti o enseñarte a manejarlos con facilidad.' : 
                            ($i == 5 ? 'El costo depende del tipo de sitio y funciones que necesites. Escríbenos y te ayudamos a elegir la mejor opción según tu presupuesto.' : 
                            ($i == 6 ? 'Sí, ofrecemos revisiones para asegurar que el diseño final cumpla con tus expectativas o las de tu cliente. Cambios mayores pueden tener un costo adicional.' : 
                            'Absolutamente. Todos nuestros sitios web están diseñados para ser completamente responsivos y adaptarse a cualquier dispositivo.')))))
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
          <?php echo esc_html(get_theme_mod('we_love_title', 'En flat latte disfrutamos...')); ?>
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
          <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="btn btn-get-started">
            <?php echo esc_html(get_theme_mod('we_love_button_text', 'Hagamos equipo')); ?>
          </a>
        </p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>