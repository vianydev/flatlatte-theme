<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package flatlatte
 */

get_header();
?>

<section id="page-404" class="section">
	<div class="container">

		<div class="col-6 col-lg-4 mb-5 d-flex mx-auto mx-lg-0">
			<img class="img-fluid filter-bw" src="<?php echo get_template_directory_uri(); ?>/assets/img/404.png" alt="error404">
			<div class="col-lg-8">
				</div>
			</div>
			<!-- .page-header -->
			
			<div class="container">
				<h1 class=""><?php esc_html_e( 'Algo salió mal.', 'flatlatte' ); ?></h1>
				<p><?php esc_html_e( 'Flat Latte no encontró la página que buscas, intenta de otra manera.', 'flatlatte' ); ?></p>
	
				<?php
				get_search_form();
				?>
			</div>
			<div class="mt-5">
			
				<h2 class="mb-4">Publicaciones recientes</h2>
				<?php
				$recent_posts = new WP_Query(array(
						'posts_per_page' => 4,       // Cantidad de posts
						'post_status'    => 'publish' // Solo posts publicados
				));

				if ($recent_posts->have_posts()) :
						echo '<ul class="post-card m-0">';
						while ($recent_posts->have_posts()) : $recent_posts->the_post();
								?>
									<li class="m-0">
										<a href="<?php the_permalink(); ?>">
												<p><?php the_title(); ?></p>
										</a>
									</li>
								<?php
						endwhile;
						echo '</ul>';
				else :
						echo '<p>No hay posts disponibles.</p>';
				endif;
				wp_reset_postdata();
				?>
			</div>
		<!-- .page-content -->
	</div>
</section>
<!-- .error-404 -->


<?php
get_footer();
