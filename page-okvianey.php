<?php
/**
 * Template Name: Página de Links Okvianey
 */
get_header();

// Cargar Bootstrap Icons
// wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css', array(), '1.10.0');

// Obtener valores
$title = get_theme_mod('links_page_title', 'Vianey');
$desc = get_theme_mod('links_page_description', 'Un cafecito mientras sobrepensamos todo y creamos algo.');
$about = get_theme_mod('about', '
Un cafecito mientras sobrepensamos todo y creamos algo.');
$image = get_theme_mod('links_page_image', get_template_directory_uri() . '/assets/img/vianey-perfil.jpg');
$links_data = get_theme_mod('links_page_content', 'nohome studio|Producimos música donde sea|https://youtube.com/@nohomestudio|#||assets/img/nohomestudio.jpg
    Flat Latte|Sitios Web para emprendedores|https://flatlatte.com|#||assets/img/flatlatte.jpg
    Web Portfolio|English version|https://vianydev.github.io/|#||assets/img/web-portfolio.jpg
    Mi día a día|Creando algo|https://www.instagram.com/okvianey|#||assets/img/dia.jpg');

// Procesar enlaces
$links = [];
if (!empty($links_data)) {
    $links_raw = explode("\n", $links_data);
    foreach ($links_raw as $line) {
        $parts = array_map('trim', explode("|", $line));
        if (count($parts) >= 2) { // Mínimo texto y URL
            $links[] = [
                'text' => $parts[0] ?? '',
                'description' => $parts[1] ?? '',
                'url' => $parts[2] ?? '#',
                'color' => $parts[3] ?? '#2e2e2e',
                'icon' => $parts[4] ?? '',
                'custom_img' => isset($parts[5]) && !empty($parts[5]) ? get_template_directory_uri() . '/' . ltrim($parts[5], '/') : ''
            ];
        }
    }
}
?>

<section class="linktree-container">
    <header class="links-header text-center">
        <div class="profile-image-wrapper">
            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>" class="profile-image rounded-circle">
        </div>
        <h1 class="mt-3"><?php echo esc_html($title); ?></h1>
        <?php if ($desc) : ?>
            <p class="description text-muted"><?php echo esc_html($desc); ?></p>
        <?php endif; ?>
    </header>

    <div class="links-grid mt-4">
        <?php foreach ($links as $link) : ?>
            <a href="<?php echo esc_url($link['url']); ?>" 
               class="link-button d-flex align-items-center justify-content-start"
               style="background-color: <?php echo esc_attr($link['color']); ?>"
               target="_blank">
               
                <?php if (!empty($link['custom_img'])) : ?>
                    <img src="<?php echo esc_url($link['custom_img']); ?>" alt="<?php echo esc_attr($link['text']); ?>" class="link-custom-img me-3">
                <?php elseif (!empty($link['icon'])) : ?>
                    <i class="<?php echo esc_attr($link['icon']); ?> me-3 fs-5"></i>
                <?php endif; ?>

                <div class="link-text-box d-flex justify-content-center align-items-center">
                  <span class="link-text">
                    <?php echo esc_html($link['text']); ?>  
                  </span>

                  <span class="link-guion"> - </span>

                  <span class="link-description">
                     <?php echo esc_html($link['description']); ?>
                  </span>
                </div>
                
            </a>
        <?php endforeach; ?>
    </div>

    <div class="mt-5">
      <h2>Sobre mi: </h2>
        
      <p>
      Desde 2013, mezclo mi pasión por el café, la música y la tecnología para dar vida a proyectos que buscan la autenticidad por encima de todo.

      </p>
      <p>
        Con Flat Latte, acompaño a emprendedores creativos que necesitan un sitio web sin preocuparse por lo técnico.
      </p>
      <p>
      En nohome studio, donde hacemos música sincera, demostrando que los límites técnicos no son obstáculos cuando hay una historia genuina que contar..
      </p>
      <p>
      Mi trabajo se trata de tomar lo que hay y sacarle lo máximo posible. De simplificar lo complejo sin vaciarlo de sentido. Si algo he aprendido en este camino, es que lo que vale la pena crear es lo que no necesita adornos... solo necesita existir.
      </p>
    <!-- <?php if ($about) : ?>
            <p class="description text-muted"><?php echo esc_html($about); ?></p>
        <?php endif; ?> -->
    </div>
</section>

<?php get_footer(); ?>