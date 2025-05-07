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
          <?php echo get_theme_mod('hero_title', 'Tienes algo único que merece ser visto.'); ?>
        </h1>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row justify-content-start">
      <div class="col-lg-7 mb-5 mb-lg-0 order-2 order-lg-1 d-flex flex-column">
        <h1 class="lh-sm my-lg-4" data-aos="fade-up"><?php echo get_theme_mod('about_title', 'Sigue creando'); ?></h1>
        <div class="col-lg-11 mb-2" data-aos="fade-up">
          <?php echo wpautop(get_theme_mod('about_content', 'Músicos, fotógrafos, diseñadores, escritores... tenemos algo en común: <b>¡nos encanta crear!.</b>')); ?>
        </div>

        <div class="col-lg-11 mb-4" data-aos="fade-up">
          <?php echo wpautop(get_theme_mod('about_content', 'Entendemos lo que es pasar horas lidiando con lo técnico en vez de hacer lo que disfrutas. Por eso, ayudamos a emprendedores como tú a construir una presencia digital auténtica y libre de ruido, para que conectes con tu audiencia y tu proyecto crezca sin complicaciones.')); ?>
        </div>

        <p class="mt-5" data-aos="fade-up">
          <a href="<?php echo esc_url(home_url('/contacto')); ?>"
            class="btn btn-get-started">
            <?php echo get_theme_mod('about_button_text', 'Hagamos equipo'); ?>
          </a>
        </p>
      </div>

      <div class="col-lg-5 imagen-about mb-5 mb-lg-0 order-1 order-lg-2"
        style="background-image: url('<?php echo esc_url(get_theme_mod('about_image', get_template_directory_uri() . '/assets/img/img_v_3.JPG')); ?>')">
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="services section">
  <div class="container">
    <div class="row align-items-start justify-content-between">
      <div class="col-lg-8 order-lg-1">
        <h1 class="lh-sm my-lg-4" data-aos="fade-up">
          Un sorbo de lo que hacemos:
        </h1>
      </div>

      <div class="col-lg-12 order-lg-2">
        <div class="container">
          <div class="row align-items-center" data-aos="fade-up">
            <!-- Imagen (ocupa 1 columna cuando hay 2 servicios) -->
            <div class="col-12 col-sm-12 col-lg-4 my-2 imagen-services"
              style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img_v_1.JPG')"
              data-aos="fade-up">
            </div>

            <!-- Servicio 1 -->
            <div class="col-12 col-sm-12 col-lg-4 my-2">
              <div class="services-item" data-aos="fade-up" data-aos-delay="300">
                <div class="services-icon">
                  <i class="bi bi-window"></i>
                </div>
                <div>
                  <h3 class="fw-bold mb-1">Sitios Web</h3>
                  <p>
                    Creamos sitios enfocados en destacar tu trabajo con un diseño limpio y eliminando secciones
                    innecesarias.
                  </p>
                  <p class="fst-italic">Ideal para: </p>
                  <div class="services-item p-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="d-flex">
                      <i class="bi bi-check fs-5 me-1"></i>
                      <p class="my-0">Emprendedores creativos</p>
                    </div>
                    <div class="d-flex">
                      <i class="bi bi-check fs-5 me-1"></i>
                      <p class="my-0">Empresas</p>
                    </div>
                    <div class="d-flex">
                      <i class="bi bi-check fs-5 me-1"></i>
                      <p class="my-0">Artistas y bandas</p>
                    </div>
                  </div>
                </div>
                <div class="mt-5">
                  <a class="btn btn-get-started" href="https://wa.me/529223400366?text=Hola,%20me%20gustaría%20un%20sitio%20web.%20¿Podrías%20ayudarme?" target="_blank"  data-aos="fade-up">
                    Empezar ahora
                  </a>
                </div>
              </div>
            </div>

            <!-- Servicio 2 -->
            <div class="col-12 col-sm-12 col-lg-4 my-2">
              <div class="services-item" data-aos="fade-up" data-aos-delay="300">
                <div class="services-icon">
                  <i class="bi bi-plus-square"></i>
                </div>
                <div>
                  <h3 class="fw-bold mb-1">Socio Flat Latte</h3>
                  <p>
                    Agrega valor a tus clientes ofreciendo sitios web sin preocuparte de lo técnico.
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
                <div class="col-lg-12 mt-5">
                  <a class="btn btn-get-started" href="https://wa.me/529223400366?text=Hola,%20me%20gustaría%20saber%20más%20sobre%20ser%20socio%20Flat%20Latte.%20¿Me%20puedes%20dar%20información?" target="_blank"  data-aos="fade-up">
                    Empezar ahora
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
          <h1 class="" data-aos="fade-up">¿Y ahora qué sigue?</h1>
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
                Agendamos una videollamada para hablar de los detalles de tu proyecto y aclares todas tus dudas.
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
                Ponemos tu sitio en línea, listo para mostrar lo que haces.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-12 mt-5 text-center">
          <a class="btn btn-get-started" href="<?php echo esc_url(home_url('/contacto')); ?>"  data-aos="fade-up">
            Empezar ahora
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /How it works Section -->
<!-- FAQ Section -->
<section id="faq" class="faq section">
  <div class="container section-title" data-aos="fade-up">
    <h1><?php echo get_theme_mod('faq_title', 'Preguntas Frecuentes'); ?></h1>
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
                    
                    if ($faq_question || $i <= 8) {
                        echo '<div class="accordion-item">';
                        echo '<p class="mb-0">';
                        echo '<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-' . $i . '">';
                        echo $faq_question ?: (
                            $i == 1 ? '¿Qué tipo de sitios web hacen?' : 
                            ($i == 3 ? '¿Puedo ofrecer sitios web a mis clientes sin saber programar?' : 
                            ($i == 4 ? '¿Cuánto tiempo toma crear un sitio web?' : 
                            ($i == 5 ? '¿Puedo vender mis productos o servicios en mi sitio?' : 
                            ($i == 6 ? '¿Qué pasa si necesito cambios en el futuro?' : 
                            ($i == 7 ? '¿Cuánto cuesta?' : 
                            ($i == 8 ? '¿Es posible cambiar el diseño después de que el sitio esté en producción?' : 
                            '¿El sitio web será totalmente compatible con dispositivos móviles?'))))))
                        );

                        echo '</button></p>';
                        echo '<div id="collapse-faq-' . $i . '" class="collapse" aria-labelledby="heading' . $i . '" data-parent="#accordion-faq">';
                        echo '<div class="accordion-body">';
                        echo $faq_answer ?: (
                            $i == 1 ? 'Trabajamos principalmente con creativos, emprendedores y artistas, por lo que hacemos portafolios, tiendas en línea, blogs, sistemas de reservas, venta de cursos y más.' : 
                            ($i == 3 ? 'Sí. Si eres diseñador o creativo y quieres sumar desarrollo web a tus servicios, nosotros nos encargamos de la parte técnica mientras tú te enfocas en el diseño y la relación con el cliente.' : 
                            ($i == 4 ? 'Depende de la complejidad, pero en general, los proyectos básicos toman de 2 a 4 semanas.' : 
                            ($i == 5 ? '¡Claro! Podemos integrar una tienda online o botones de pago según lo que necesites.' : 
                            ($i == 6 ? 'Podemos hacerlos por ti o enseñarte a manejarlos con facilidad.' : 
                            ($i == 7 ? 'El costo depende del tipo de sitio y funciones que necesites. Escríbenos y te ayudamos a elegir la mejor opción según tu presupuesto.' : 
                            ($i == 8 ? 'Sí, ofrecemos revisiones para asegurar que el diseño final cumpla con tus expectativas o las de tu cliente. Cambios mayores pueden tener un costo adicional.' : 
                            'Absolutamente. Todos nuestros sitios web están diseñados para ser completamente responsivos y adaptarse a cualquier dispositivo.'))))))
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
          <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="btn btn-get-started">
            <?php echo esc_html(get_theme_mod('we_love_button_text', 'Hagamos equipo')); ?>
          </a>
        </p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>