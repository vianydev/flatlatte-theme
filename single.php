<?php
/**
 * The template for displaying all single posts
 *
 * @package flatlatte
 */
get_header();
?>

<section class="section entradas">
    <div class="container">
        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', get_post_type());

            // Comentarios
						
            // if (comments_open() || get_comments_number()) :
            //     comments_template();
            // endif;

        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>