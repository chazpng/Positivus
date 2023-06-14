<?php
/**
 * Greydientlab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package greydientlab
 */

if ( ! defined( '_GL_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_GL_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function greydientlab_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on greydientlab, use a find and replace
		* to change 'greydientlab' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'greydientlab', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'greydientlab' ),
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
			'greydientlab_custom_background_args',
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
add_action( 'after_setup_theme', 'greydientlab_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function greydientlab_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'greydientlab_content_width', 640 );
}
add_action( 'after_setup_theme', 'greydientlab_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function greydientlab_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'greydientlab' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'greydientlab' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'greydientlab_widgets_init' );

/**
 * Enqueue scripts and styles in the frontend.
 */
function greydientlab_scripts() {
	wp_enqueue_style( 'greydientlab-style', get_stylesheet_uri(), array(), _GL_VERSION );
	wp_style_add_data( 'greydientlab-style', 'rtl', 'replace' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/frontend/static/css/main.min.css', array(), _GL_VERSION );

	wp_enqueue_script( 'greydientlab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _GL_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/frontend/static/js/main.min.js', array(), _GL_VERSION, true );

	wp_localize_script(
		'main',
		'ajaxVar',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'ajax-nonce' ),
		)
	);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'greydientlab_scripts' );

/**
 * Enqueues styles and script on the frontend and in the block editor.
 */
function gl_block_assets() {
	wp_enqueue_style( 'dancing-script', 'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&display=swap', array(), _GL_VERSION );
	wp_enqueue_style( 'inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap', array(), _GL_VERSION );
	wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/tailwind/dist/output.min.css', array(), _GL_VERSION );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/libraries/slick/slick.css', array(), _GL_VERSION );
	wp_enqueue_style( 'components', get_template_directory_uri() . '/frontend/static/css/components.min.css', array(), _GL_VERSION );
	wp_enqueue_style( 'inter', 'https://rsms.me/inter/inter.css', array(), _GL_VERSION, true );

	wp_enqueue_script( 'components', get_template_directory_uri() . '/frontend/static/js/components.min.js', array(), _GL_VERSION, true );
	wp_enqueue_script( 'preline', get_template_directory_uri() . '/libraries/preline/preline.js', array(), _GL_VERSION, true );
	wp_enqueue_script( 'resize-sensor', get_template_directory_uri() . '/libraries/resize-sensor/resize-sensor.js', array(), _GL_VERSION, true );
	wp_enqueue_script( 'alpine', 'https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js', array(), _GL_VERSION, true );
}
add_action( 'enqueue_block_assets', 'gl_block_assets' );

/**
 * Add defer attribute to script.
 *
 * @param String $tag script tag.
 * @param String $handle Name of the script.
 * @param String $src Full URL of the script, or path of the script.
 */
function defer_scripts( $tag, $handle, $src ) {
	$defer = array(
		'alpine',
	);

	if ( in_array( $handle, $defer, true ) ) {
		return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n"; // phpcs:ignore WordPress.WP.EnqueuedResources.NonEnqueuedScript
	}

	return $tag;
}

add_filter( 'script_loader_tag', 'defer_scripts', 10, 3 );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Load autoload.
 */
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Load acf blocks.
 */
require get_template_directory() . '/acf/blocks/blocks.php';

/**
 * Load Frontend Components.
 *
 * @param array $directories array of directory.
 */
function load_directories( $directories ) {
	$directories[] = get_template_directory() . '/frontend/components';
	return $directories;
}
add_filter( 'loader_directories', 'load_directories' );

/**
 * Create alias for moxie-lean/loader.
 *
 * @param array $alias array of alias.
 */
function load_alias( $alias ) {
	$alias['atom']     = 'atoms';
	$alias['molecule'] = 'molecules';
	$alias['organism'] = 'organisms';
	return $alias;
}
add_filter( 'loader_alias', 'load_alias' );

/**
 * Load acf fields.
 */
require get_template_directory() . '/acf/custom-fields/fields.php';

/**
 * Enable SVG and json file upload
 *
 * @param mimes $mimes return mime type.
 */
function mime_types( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	$mimes['json'] = 'text/plain';
	return $mimes;
}
add_filter( 'upload_mimes', 'mime_types' );

/**
 * Enable ACF Option page.
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page(
		array(
			'page_title' => 'Theme General Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect'   => false,
		)
	);
}

/**
 * Add inline css style in editor
 * to make it full width.
 */
function editor_full_width_gutenberg() {
	$is_enable = true;

	if ( $is_enable ) {
		echo '<style>
			body.gutenberg-editor-page .editor-post-title__block, body.gutenberg-editor-page .editor-default-block-appender, body.gutenberg-editor-page .editor-block-list__block {
				max-width: none !important;
			}
			.block-editor__container .wp-block {
				max-width: none !important;
			}

			/*code editor*/
			.edit-post-text-editor__body {
				max-width: none !important;
				margin-left: 2%;
				margin-right: 2%;
			}
		</style>';
	}
}
add_action( 'admin_head', 'editor_full_width_gutenberg' );

/**
 * Add ACF Blocks Category
 *
 * @param Array  $categories array of categories.
 * @param Object $post post object.
 */
function gl_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'gl-blocks',
				'title' => 'GL Blocks',
			),
		)
	);
}
add_filter( 'block_categories_all', 'gl_block_category', 10, 2 );

/**
 * Get Blocks assets.
 *
 * @param String $block_name block folder name.
 * @param String $filename asset filename.
 */
function get_block_asset( $block_name, $filename ) {
	echo esc_url( get_template_directory_uri() . '/acf/blocks/' . $block_name . '/img/' . $filename );
}

/**
 * Get Blocks assets url.
 *
 * @param String $block_name block folder name.
 * @param String $filename asset filename.
 */
function get_block_asset_url( $block_name, $filename ) {
	return get_template_directory_uri() . '/acf/blocks/' . $block_name . '/img/' . $filename;
}

/**
 * Get Component assets.
 *
 * @param String $component_type component type.
 * @param String $component_name component folder name.
 * @param String $filename component image file name.
 */
function get_component_url( $component_type, $component_name, $filename ) {
	return get_template_directory_uri() . '/frontend/components/' . $component_type . '/' . $component_name . '/img/' . $filename;
}

/**
 * Add Custom attributes to menu link.
 *
 * @param Array  $atts array of attributes.
 * @param Object $item object item.
 * @param Object $args object arguments.
 */
function add_menu_link_attributes( $atts, $item, $args ) {

	if ( 'menu-1' === $args->theme_location ) {
		$atts['class'] = 'custom-class-here';
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_attributes', 10, 3 );

/**
 * Customize WYSIWYG ACF Toolbars
 *
 * @param Array $toolbars array of ACF WYSIWYG toolbars.
 */
function customize_acf_wysiwyg( $toolbars ) {
	// Unset Basic Type Toolbar.
	unset( $toolbars['Basic']['bold'] );

	// Register a basic toolbar with a single row of options.
	$toolbars['Full'][1] = array(
		'formatselect',
		// 'fontsizeselect',
		'bold',
		'italic',
		'alignleft',
		'aligncenter',
		'alignright',
		'bullist',
		'numlist',
		'link',
		'unlink',
		'forecolor',
		// 'removeformat'
	);

	return $toolbars;
}
add_filter( 'acf/fields/wysiwyg/toolbars', 'customize_acf_wysiwyg' );

/**
 * Remove Copy/Paste Preformatting on ACF WYSIWYG.
 *
 * @param array $settings array of ACF WYSIWYG Settings.
 */
function remove_acf_preformatting( $settings ) {
	// Disable paste with formatting.
	$settings['paste_as_text'] = true;

	return $settings;
}
add_filter( 'tiny_mce_before_init', 'remove_acf_preformatting' );

/**
 * Remove All Native Block.
 * Except blocks in the $allowed_blocks
 *
 * @param array $allowed_blocks array of Native Blocks.
 */
function allow_acf_blocks_starting_with_acf( $allowed_blocks ) {
	// Disable all native blocks.
	$allowed_blocks = array( 'core/paragraph' );

	// Get all ACF blocks and add them to the allowed blocks list.
	$acf_blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();
	foreach ( $acf_blocks as $acf_block ) {
		if ( 0 === strpos( $acf_block->name, 'acf/' ) ) {
			$allowed_blocks[] = $acf_block->name;
		}
	}
	return $allowed_blocks;
}
add_filter( 'allowed_block_types_all', 'allow_acf_blocks_starting_with_acf' );

/**
 * Check if key exists in non and muti dimensional array
 *
 * @param string $search_key search key.
 * @param array  $array array to search for.
 */
function array_key_exists_recursive( $search_key, $array ) {
	if ( ! is_array( $array ) ) {
		return null;
	}

	foreach ( $array as $key => $value ) {
		if ( $key === $search_key ) {
			return $value;
		}

		if ( is_array( $value ) ) {
			$result = array_key_exists_recursive( $search_key, $value );

			if ( null !== $result ) {
				return $result;
			}
		}
	}
	return null;
}

/**
 * Get Block Path
 *
 * @param String $block_name block folder name.
 * @param String $filename asset filename.
 */
function get_custom_block_template( $block_name, $filename ) {
	return get_template_directory() . '/acf/blocks/' . $block_name . '/templates/' . $filename;
}
