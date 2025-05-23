<?php
/**
 * flatlatte functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package flatlatte
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function flatlatte_setup() {
	load_theme_textdomain( 'flatlatte', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'primary', 'flatlatte' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// // Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'flatlatte_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Soporte para otros features
	add_theme_support('automatic-feed-links');
	add_theme_support('editor-styles');
	add_theme_support('wp-block-styles');
	add_theme_support('responsive-embeds');
	add_theme_support('align-wide');

	// /**
	//  * Add support for core custom logo.
	//  *
	//  * @link https://codex.wordpress.org/Theme_Logo
	//  */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'flatlatte_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function flatlatte_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'flatlatte' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'flatlatte' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'flatlatte_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function flatlatte_scripts() {
	// Bootstrap CSS
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/libs/bootstrap/css/bootstrap.min.css');
    
	// Bootstrap Icons
	wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/libs/bootstrap-icons/bootstrap-icons.css');
	
	// AOS Animation
	wp_enqueue_style(
		'aos-css',
		get_template_directory_uri() . '/assets/libs/aos/aos.css',
		array(),
		'2.3.4'
	);
	
	// Estilo principal
	wp_enqueue_style(
		'flatlatte-style', 
		get_stylesheet_uri(),
		array('bootstrap', 'bootstrap-icons', 'aos-css')
);
	
	// Scripts
	wp_enqueue_script(
			'flatlatte-script', 
			get_template_directory_uri() . '/assets/js/script.js',
			array('jquery', 'bootstrap', 'aos-js')
	);

	wp_enqueue_script(
		'bootstrap', 
		get_template_directory_uri() . '/assets/libs/bootstrap/js/bootstrap.bundle.min.js',
		array('jquery'),
		'5.3.0',
		true
	);

	wp_enqueue_script(
			'aos-js', 
			get_template_directory_uri() . '/assets/libs/aos/aos.js',
			array(),
			'2.3.4',
			true
	);


	 // Inicialización de AOS
	 wp_add_inline_script('aos-js', '
		document.addEventListener("DOMContentLoaded", function() {
				if (typeof AOS !== "undefined") {
						AOS.init({
								duration: 600,
								easing: "ease-in-out",
								once: true,
								mirror: false,
								
						});
				}
		});
	');


	// wp_enqueue_script( 'flatlatte-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'flatlatte_scripts' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// Registrar Custom Post Type para Portfolio
function flatlatte_register_portfolio() {
	$labels = array(
			'name' => __('Portfolio', 'flatlatte'),
			'singular_name' => __('Project', 'flatlatte'),
			'add_new' => __('Add New', 'flatlatte'),
			'add_new_item' => __('Add New Project', 'flatlatte'),
			'edit_item' => __('Edit Project', 'flatlatte'),
			'new_item' => __('New Project', 'flatlatte'),
			'view_item' => __('View Project', 'flatlatte'),
			'search_items' => __('Search Projects', 'flatlatte'),
			'not_found' => __('No projects found', 'flatlatte'),
			'not_found_in_trash' => __('No projects found in Trash', 'flatlatte'),
			'parent_item_colon' => __('Parent Project:', 'flatlatte'),
			'menu_name' => __('Portfolio', 'flatlatte'),
			'public' => true,
			'show_in_rest' => true, // ¡Importante para compatibilidad!
			'has_archive' => true,
	);

	$args = array(
			'labels' => $labels,
			'hierarchical' => false,
			'description' => 'Portfolio items',
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 20,
			'menu_icon' => 'dashicons-portfolio',
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => array('slug' => 'portfolio'),
			'capability_type' => 'post',
			'show_in_rest' => true,
	);

	register_post_type('portfolio', $args);
}
add_action('init', 'flatlatte_register_portfolio');

register_taxonomy('Type', 'portfolio', [
	'labels' => ['name' => 'Tipo de proyecto'],
	'hierarchical' => false,
	'show_in_rest' => true
]);

// En tu functions.php o en un plugin personalizado
function add_featured_meta_box() {
	add_meta_box(
			'featured_project_meta_box',
			'Destacar Proyecto',
			'render_featured_meta_box',
			'portfolio', // Asegúrate que coincide con tu post_type
			'side',
			'default'
	);
}
add_action('add_meta_boxes', 'add_featured_meta_box');

function render_featured_meta_box($post) {
	$featured = get_post_meta($post->ID, '_featured_project', true);
	wp_nonce_field('featured_project_nonce', 'featured_project_nonce_field');
	?>
	<label>
			<input type="checkbox" name="_featured_project" value="1" <?php checked($featured, 1); ?> />
			Marcar como destacado
	</label>
	<?php
}

function save_featured_meta($post_id) {
	if (!isset($_POST['featured_project_nonce_field']) || 
			!wp_verify_nonce($_POST['featured_project_nonce_field'], 'featured_project_nonce')) {
			return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
	if (!current_user_can('edit_post', $post_id)) return;

	$featured = isset($_POST['_featured_project']) ? 1 : 0;
	update_post_meta($post_id, '_featured_project', $featured);
}
add_action('save_post', 'save_featured_meta');

// =============================================  
// CONTROL DE ACCESO A PANEL DE SOCIOS
// =============================================  

// Crea el rol si no existe
add_action('init', function() {
    if (!get_role('socio')) {
        add_role('socio', 'Socio', ['read' => true]);
    }
});

// Asigna el rol al registrar (forma segura)
add_action('user_register', function($user_id) {
    $user = new WP_User($user_id);
    $user->set_role('socio');
});

add_action('admin_init', function() {
    if (current_user_can('socio')) {
        wp_redirect(home_url()); // Redirige al inicio
        exit;
    }
});

add_filter('user_has_cap', function($allcaps, $caps, $args, $user) {
    if (in_array('socio', $user->roles)) {
        // Solo mantiene 'read' y elimina cualquier otra capacidad
        $allcaps = array_intersect_key($allcaps, ['read' => true]);
    }
    return $allcaps;
}, 10, 4);

// Redirección del logout en el panel de socio
add_filter( 'wpmem_logout_redirect', 'custom_logout_redirect' );
function custom_logout_redirect() {
	// Redirige a /acceso
	return home_url( '/acceso' ); 
}

add_action('template_redirect', function() {
    if (is_page('socios') && !is_user_logged_in()) {
        wp_redirect(home_url('/acceso'));
        exit;
    }
});


add_filter('wpmem_login_redirect', function($redirect_to, $user_id) {
    return home_url('/socios');
}, 10, 2);


add_filter('wpmem_login_heading', function() {
    return 'Iniciar Sesión';
});

// Mensaje cuando el usuario no existe
add_filter('wpmem_login_failed_username', function() {
    return 'El usuario no está registrado. ¿Quieres <a href="' . wp_registration_url() . '">crear una cuenta</a>?';
});

// Mensaje cuando la contraseña es incorrecta
add_filter('wpmem_login_failed_password', function() {
    return 'Contraseña incorrecta. <a href="' . wp_lostpassword_url() . '">¿Recuperar contraseña?</a>';
});

// Mensaje genérico de error
add_filter('wpmem_login_failed', function() {
    return 'Usuario o contraseña incorrecta.';
});

// Traducción de los formularios de acceso de socios
add_filter('gettext', function($translated, $original, $domain) {
    if ($domain == 'wp-members') {
        switch ($original) {
            case 'Existing Users Log In':
                return 'Inicio de sesión para socios';
            case 'Username or Email':
                return 'Nombre de usuario o Email';
            case 'Password':
                return 'Contraseña';
            case 'Remember Me':
                return 'Recordar sesión';
            case 'Log In':
                return 'Acceder';
            case 'Forgot password?':
                return '¿Olvidaste tu contraseña?';
            case 'New User?':
                return '¿Aún no eres socio?,';
            case 'Click here to register':
                return 'click para resgistrarte.';
            case 'New User Registration':
                return 'Registrarse como socio';
						case 'Register':
								return 'Registrarse';
            case 'Required field':
                return 'Campo requerido';
        }
    }
    return $translated;
}, 10, 3);