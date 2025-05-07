<?php
/**
 * flatlatte Theme Customizer
 *
 * @package flatlatte
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function flatlatte_customize_register( $wp_customize ) {
	// Sección Hero
    $wp_customize->add_section('flatlatte_hero', array(
        'title' => __('Hero Section', 'flatlatte'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Tienes algo único que merece ser visto.',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('hero_title_control', array(
        'label' => __('Hero Title', 'flatlatte'),
        'section' => 'flatlatte_hero',
        'settings' => 'hero_title',
        'type' => 'text',
    ));
    
    // Sección About
    $wp_customize->add_section('flatlatte_about', array(
        'title' => __('About Section', 'flatlatte'),
        'priority' => 31,
    ));
    
    $wp_customize->add_setting('about_title', array(
        'default' => 'Sigue creando',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('about_title_control', array(
        'label' => __('About Title', 'flatlatte'),
        'section' => 'flatlatte_about',
        'settings' => 'about_title',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('about_content', array(
        'default' => 'Músicos, fotógrafos, diseñadores, escritores... tenemos algo en común: <b>¡nos encanta crear!.</b>',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('about_content_control', array(
        'label' => __('About Content', 'flatlatte'),
        'section' => 'flatlatte_about',
        'settings' => 'about_content',
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('about_button_text', array(
        'default' => 'Hagamos equipo',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('about_button_text_control', array(
        'label' => __('About Button Text', 'flatlatte'),
        'section' => 'flatlatte_about',
        'settings' => 'about_button_text',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('about_button_link', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('about_button_link_control', array(
        'label' => __('About Button Link', 'flatlatte'),
        'section' => 'flatlatte_about',
        'settings' => 'about_button_link',
        'type' => 'dropdown-pages',
    ));
    
    $wp_customize->add_setting('about_image', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image_control', array(
        'label' => __('About Image', 'flatlatte'),
        'section' => 'flatlatte_about',
        'settings' => 'about_image',
    )));
    
   // Sección Portfolio
$wp_customize->add_section('portfolio_section', array(
    'title' => __('Portfolio Section', 'flatlatte'),
    'priority' => 33,
));

$wp_customize->add_setting('portfolio_title', array(
    'default' => 'Algunos de nuestros flat lattes:',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('portfolio_title_control', array(
    'label' => __('Portfolio Title', 'flatlatte'),
    'section' => 'portfolio_section',
    'settings' => 'portfolio_title',
    'type' => 'text',
));

// Texto del botón
$wp_customize->add_setting('portfolio_button_text', array(
    'default' => 'Ver todos los proyectos',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('portfolio_button_text_control', array(
    'label' => __('Texto del Botón de Portafolio', 'flatlatte'),
    'section' => 'portfolio_section',
    'settings' => 'portfolio_button_text',
    'type' => 'text',
));

// Página de portafolio
$wp_customize->add_setting('portfolio_page', array(
    'default' => '',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control('portfolio_page_control', array(
    'label' => __('Seleccionar Página de Portafolio', 'flatlatte'),
    'section' => 'portfolio_section',
    'settings' => 'portfolio_page',
    'type' => 'dropdown-pages',
));
    
    // Sección FAQ
    $wp_customize->add_section('flatlatte_faq', array(
        'title' => __('FAQ Section', 'flatlatte'),
        'priority' => 34,
    ));
    
    $wp_customize->add_setting('faq_title', array(
        'default' => 'Preguntas Frecuentes',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('faq_title_control', array(
        'label' => __('FAQ Title', 'flatlatte'),
        'section' => 'flatlatte_faq',
        'settings' => 'faq_title',
        'type' => 'text',
    ));
    
    // FAQs individuales (9 FAQs)
    for ($i = 1; $i <= 9; $i++) {
        $wp_customize->add_setting("faq_{$i}_question", array(
            'default' => '',
            'transport' => 'refresh',
        ));
        
        $wp_customize->add_control("faq_{$i}_question_control", array(
            'label' => sprintf(__('FAQ %d Question', 'flatlatte'), $i),
            'section' => 'flatlatte_faq',
            'settings' => "faq_{$i}_question",
            'type' => 'text',
        ));
        
        $wp_customize->add_setting("faq_{$i}_answer", array(
            'default' => '',
            'transport' => 'refresh',
        ));
        
        $wp_customize->add_control("faq_{$i}_answer_control", array(
            'label' => sprintf(__('FAQ %d Answer', 'flatlatte'), $i),
            'section' => 'flatlatte_faq',
            'settings' => "faq_{$i}_answer",
            'type' => 'textarea',
        ));
    }


 // Sección para la página de Links
    $wp_customize->add_section('links_page_section', array(
        'title' => __('Página de Links ', 'flatlatte'),
        'priority' => 120,
    ));

    // Imagen de perfil (con valor por defecto)
    $wp_customize->add_setting('links_page_image', array(
        'default' => get_template_directory_uri() . '/assets/img/vianey-perfil.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'links_page_image_control', array(
        'label' => __('Imagen de perfil', 'flatlatte'),
        'section' => 'links_page_section',
        'settings' => 'links_page_image',
    )));

    // Título
    $wp_customize->add_setting('links_page_title', array(
        'default' => 'Vianey',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('links_page_title_control', array(
        'label' => __('Título principal', 'flatlatte'),
        'section' => 'links_page_section',
        'settings' => 'links_page_title',
        'type' => 'text',
    ));

    // Descripción
    $wp_customize->add_setting('links_page_description', array(
        'default' => 'Un cafecito mientras sobrepensamos todo y creamos algo.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('links_page_description_control', array(
        'label' => __('Descripción breve', 'flatlatte'),
        'section' => 'links_page_section',
        'settings' => 'links_page_description',
        'type' => 'textarea',
    ));

    // Lista de enlaces mejorada
    $wp_customize->add_setting('links_page_content', array(
        'default' => "
        nohome studio|Producimos música donde sea|https://youtube.com/@nohomestudio|#||assets/img/nohomestudio.jpg
        \nFlat Latte|Sitios Web para emprendedores|https://flatlatte.com|#||assets/img/flatlatte.jpg
        \nWeb Portfolio|English version|https://vianydev.github.io/|#||assets/img/web-portfolio.jpg
        \nMi día a día|Creando algo|https://www.instagram.com/okvianey|#||assets/img/dia.jpg
        ",
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('links_page_content_control', array(
        'label' => __('Lista de Enlaces', 'flatlatte'),
        'description' => __('Un enlace por línea. Formato:<br>Texto||URL||Color||Icono Bootstrap|Ruta Imagen (opcional)<br>Ejemplos:<br>Instagram|https://instagram.com|#E1306C|bi-instagram|<br>YouTube||#FF0000||assets/img/youtube.jpg', 'flatlatte'),
        'section' => 'links_page_section',
        'settings' => 'links_page_content',
        'type' => 'textarea',
    ));

    // Descripción
    $wp_customize->add_setting('links_page_about', array(
        'default' => 'Un cafecito mientras sobrepensamos todo y creamos algo.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('links_page_about_control', array(
        'label' => __('about me', 'flatlatte'),
        'section' => 'links_page_section',
        'settings' => 'links_page_about',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'flatlatte_customize_register');