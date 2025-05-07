<?php get_header(); ?>

<section class="portfolio-page section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1 class="m-0"><?php the_title(); ?></h1>
                        
                        <!-- <div class="">
                            <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                        </div> -->
                    </article>
                <?php endwhile; ?>
            </div>
        </div>
      <div class="row">
        <div class="col-lg-8 mt-4">
                <?php if ($tipos = get_field('tipo')) : ?>
                    <p class="m-0"><strong>Tipo de proyecto:</strong></p>
                        <?php foreach ($tipos as $tipo) : ?>
                            <ul class="m-0">
                                <li><?php echo esc_html($tipo); ?> </li>
                            </ul>
                        <?php endforeach; ?>
                <?php endif; ?>

            <!-- ver sitio web -->
            <div class="">
                <a class="btn-line d-inline-flex justify-content-center align-items-center mb-2" href="https://wa.me/529223400366?text=Hola%20¿Me%20podrías%20dar%20información%20sobre%20..." target="_blank" data-bs-toggle="modal" data-bs-target="#portfolioWeb">
                    <i class="bi bi-box-arrow-in-right me-2 fs-3"></i>
                    <!-- mobile version -->
                    <span class="d-flex">Ir al sitio web del proyecto</span>
                </a>
                <!-- Modal -->
                <div class="modal fade portfolio-page" id="portfolioWeb" tabindex="-1" aria-labelledby="agendar-videollamada" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php if ($url = get_field('project-url')) : ?>
                                    <iframe 
                                        src="<?php echo esc_url($url); ?>"
                                        class="example-website"
                                        frameborder="0"
                                        allowfullscreen
                                        >
                                    </iframe>
                                <?php elseif ($galeria = get_field('galeria')) : ?>
                                    <div class="gallery">
                                    <?php foreach ($galeria as $image) : ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                    <?php endforeach; ?>
                                    </div>
                                <?php else : ?>
                                <p>No hay contenido disponible para este proyecto.</p>

                                <?php endif; ?>
                            </div>
                            <div class="modal-footer">
                                <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn-line" data-bs-dismiss="modal">
                                    <span class="nav-arrow">←</span>
                                    Regresar al proyecto
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal -->
                </div>
            <!-- /ver sitio web -->
        </div>
        <div class="">
            <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
        </div>
      </div>
    </div>
</section>
<!-- portfolio page Section -->
<section id="portfolio-page" class="portfolio-page section">
    <div class="container" data-aos="fade">
      
    </div>
</section>

<!-- Navegation -->
<section class="portfolio-navigation">
    <div class="container">
        <div class="nav-links">
            <?php
            // Obtener proyectos anterior y siguiente
            $prev_post = get_previous_post();
            $next_post = get_next_post();
            ?>

            <?php if (!empty($prev_post)) : ?>
                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-project btn-line">
                    <span class="nav-arrow">←</span>
                    <span class="nav-title"><?php echo esc_html($prev_post->post_title); ?></span>
                </a>
            <?php endif; ?>

            <a href="<?php echo get_post_type_archive_link('portfolio'); ?>" class="all-projects btn-line">
                Ver todos los proyectos
            </a>

            <?php if (!empty($next_post)) : ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-project btn-line">
                    <span class="nav-title"><?php echo esc_html($next_post->post_title); ?></span>
                    <span class="nav-arrow">→</span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- /Navegation -->
<?php get_footer(); ?>