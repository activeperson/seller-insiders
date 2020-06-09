<?php
/**
 * Seller Insiders functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Seller_Insiders
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'seller_insiders_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function seller_insiders_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Seller Insiders, use a find and replace
		 * to change 'seller-insiders' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'seller-insiders', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'seller-insiders' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'seller_insiders_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
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
endif;
add_action( 'after_setup_theme', 'seller_insiders_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function seller_insiders_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'seller_insiders_content_width', 640 );
}
add_action( 'after_setup_theme', 'seller_insiders_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function seller_insiders_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'seller-insiders' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'seller-insiders' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'seller_insiders_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function seller_insiders_scripts() {
	// wp_enqueue_style( 'seller-insiders-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'seller-insiders-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'seller-insiders-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'seller-insiders-slick-js', get_template_directory_uri() . '/assets/js/helpers/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'seller-insiders-waterwheelCarousel', get_template_directory_uri() . '/assets/js/helpers/jquery.waterwheelCarousel.min.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'seller-insiders-main-js', get_template_directory_uri() . '/assets/js/app.js', array(), _S_VERSION, true );

	// wp_enqueue_script( 'seller-insiders-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );
	wp_enqueue_style( 'seller-insiders-slick-css', get_template_directory_uri() . '/assets/js/helpers/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'seller-insiders-main-css', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
}
function shapeSpace_include_custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
   }
   add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

add_action( 'wp_enqueue_scripts', 'seller_insiders_scripts' );

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

// remove_filter( 'the_content', 'wpautop' );// для контента
// remove_filter( 'the_excerpt', 'wpautop' );// для анонсов
// remove_filter( 'comment_text', 'wpautop' );// для комментарий
add_filter( 'wpcf7_autop_or_not', '__return_false' );


add_action( 'wp_footer', 'redirect_cf7' );
 
function redirect_cf7() {
	?>
<!-- 	<script type="text/javascript">
		document.addEventListener('wpcf7mailsent', function (event) {
			if ('147' == event.detail.contactFormId) {
				location = '<?php echo get_home_url(); ?>';
			}
		}, false);
	</script> -->
<?php }

//свои собственные css-классы у элементов меню start 
function wph_css_class_to_menu($classes, $item){
    if( $item->title == "Главная" ){ 
        $classes[] = "menu-home";
    }
    if( $item->title == "Рубрики" ){ 
        $classes[] = "menu-categories";
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'wph_css_class_to_menu' , 10 , 2); 
//свои собственные css-классы у элементов меню end

// Удалим слэш на конце, если нужно. Если слэш есть в структуре ЧПУ, то он будет добавляться и к постоянным страницам.
add_filter( 'user_trailingslashit', 'no_page_slash', 70, 2 );
function no_page_slash( $string, $type ){
   global $wp_rewrite;

	if( 'page' === $type && $wp_rewrite->using_permalinks() && $wp_rewrite->use_trailing_slashes )
		$string = untrailingslashit( $string );

   return $string;
}