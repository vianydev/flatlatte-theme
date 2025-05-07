<?php
/**
 * Template Name: Plantilla de Portafolio
 */
get_header();
?>

<section class="section">
    <div class="container">
        <header class="page-header">
            <h1 class="page-title">Proyectos</h1>
        </header>


        <div class="portfolio-grid">

            <?php if (have_posts()) : 
                while (have_posts()) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?> >
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="portfolio-image">
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                            <?php endif; ?>
                            
                            <div class="portfolio-content">
                                <p class="portfolio-title"><?php the_title(); ?></p>
                                <?php 
                                $terms = get_the_terms(get_the_ID(), 'categoria-portafolio');
                                if ($terms && !is_wp_error($terms)) : ?>
                                    <div class="portfolio-categories">
                                        <?php foreach ($terms as $term) {
                                            echo '<span>'.$term->name.'</span>';
                                        } ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                <?php endwhile; 
                
                // Paginación
                the_posts_pagination(array(
                    'prev_text' => __('Anterior', 'textdomain'),
                    'next_text' => __('Siguiente', 'textdomain'),
                ));
                
            else : ?>
                <p><?php esc_html_e('No hay proyectos encontrados.', 'textdomain'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();