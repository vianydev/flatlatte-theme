<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flatlatte
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> >
	<header class="">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;

		?>
		<div class="d-flex flex-column flex-md-row justify-content-md-between">
			<?php flatlatte_posted_by() ?>
			<?php flatlatte_posted_on() ?>
		</div>
	</header>

	<?php flatlatte_post_thumbnail(); ?>

	<div class="entry-content mx-auto col-lg-8">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'flatlatte' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'flatlatte' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
	<div>
	<?php
       
            // --- Posts Relacionados (por categoría) ---
            $categories = get_the_category();
            if ($categories) {
                $category_ids = array_map(function($cat) { return $cat->term_id; }, $categories);
                
                $related_args = array(
                    'category__in'      => $category_ids,
                    'post__not_in'     => array(get_the_ID()),
                    'posts_per_page'   => 3,
                    'orderby'          => 'date',
                );

                $related_posts = new WP_Query($related_args);

                if ($related_posts->have_posts()) :
                    echo '<div class="related-posts py-5">';
                    echo '<h3 class="related-title">' . esc_html__('Artículos Relacionados', 'flatlatte') . '</h3>';
                    echo '<div class="related-grid d-flex flex-column flex-lg-row gap-4">';

                    while ($related_posts->have_posts()) : $related_posts->the_post();
                        echo '<article class="related-post col-lg-3 text-center">';
                        if (has_post_thumbnail()) {
													echo '<a href="' . esc_url(get_permalink()) . 
													'" class="related-thumbnail">';
														flatlatte_post_thumbnail();
														echo '<p class="mt-2 fw-semibold">' . get_the_title() . '</p>';
                            echo '</a>';
                        }

                        echo '</article>';
                    endwhile;

                    echo '</div></div>';
                    wp_reset_postdata();
                endif;
            }


        ?>
	</div>
	<!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
