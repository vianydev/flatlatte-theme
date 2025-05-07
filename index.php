<?php
/**
 * Template Name: Plantilla de Blog
 */
get_header();
?>

<section class="section">
    <div class="container">
        <header class="text-center">
            <h1 class="mb-5">Café para sobrepensadores</h1>
        </header>

        <!-- Filtro de categorías -->
        <div class="category-filter-form mb-4 d-flex justify-content-center">
            <form action="<?php echo esc_url(home_url('/blog/')); ?>" method="get" class="col-8">
                <select name="cat" id="category-select" onchange="this.form.submit()">
                    <option value="" disabled>Filtrar por categoría:</option>
                    <option value="">Todas las categorías</option>
                    <?php
                    $categories = get_categories(array(
                        'orderby' => 'name',
                        'exclude' => array(1) // Excluye "Sin categoría"
                    ));
                    
                    $current_cat = isset($_GET['cat']) ? (int)$_GET['cat'] : 0;
                    
                    foreach ($categories as $category) {
                        $selected = ($current_cat === $category->term_id) ? 'selected' : '';
                        echo '<option value="' . esc_attr($category->term_id) . '" ' . $selected . '>' 
                            . esc_html($category->name) . ' (' . $category->count . ')</option>';
                    }
                    ?>
                </select>
                <noscript>
                    <input type="submit" value="Filtrar" class="filter-button">
                </noscript>
            </form>
        </div>

        <!-- Listado de entradas -->
        <div class="blog col-lg-8 mx-auto row row-gap-4 align-items-end">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6, // Cambia este número según necesites
                'paged' => $paged,
                'category__in' => (isset($_GET['cat'])) ? array($_GET['cat']) : ''
            );
            
            $query = new WP_Query($args);
            
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <article <?php post_class('blog-posts d-md-flex gap-4'); ?>>
                        <div class="col-md-4">
                            <h3 class="title "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="meta">
                                <?php 
                                the_date('d M Y', '<span class="posted-on">', '</span>');
                                // the_category(', ');
                                ?>
                            </div>
                        </div>
                        
                        <div class="col-md-8">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>

                <!-- Paginación -->
                <div class="blog-pagination">
                    <?php
                    echo paginate_links(array(
                        'total' => $query->max_num_pages,
                        'prev_text' => __('&laquo; Anterior'),
                        'next_text' => __('Siguiente &raquo;'),
                        'mid_size' => 2
                    ));
                    ?>
                </div>
                
            <?php else : ?>
                <p class="no-entries">No se encontraron entradas</p>
            <?php endif; 
            wp_reset_postdata();
            ?>
        </div>


    </div>
</section>

<?php
get_footer();