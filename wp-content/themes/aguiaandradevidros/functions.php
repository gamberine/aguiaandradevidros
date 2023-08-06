<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '6.1', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twenty_twenty_one_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'twentytwentyone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentytwentyone', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => __( 'Secondary menu', 'twentytwentyone' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		
		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ( $is_IE ) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		// add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'twentytwentyone' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'twentytwentyone' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'twentytwentyone' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'twentytwentyone' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'twentytwentyone' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'twentytwentyone' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'twentytwentyone' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'twentytwentyone' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'twentytwentyone' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'twentytwentyone' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'twentytwentyone' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'twentytwentyone' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'twentytwentyone' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'twentytwentyone' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'twentytwentyone' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'twentytwentyone' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'twentytwentyone' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', twenty_twenty_one_get_starter_content() );
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );
	}
}
add_action( 'after_setup_theme', 'twenty_twenty_one_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function twenty_twenty_one_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'twentytwentyone' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'twenty_twenty_one_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function twenty_twenty_one_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twenty_twenty_one_content_width', 750 );
}
add_action( 'after_setup_theme', 'twenty_twenty_one_content_width', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri(  ) . '/assets/css/font-awesome.css' );
		wp_enqueue_style( 'font-ubuntu', get_stylesheet_directory_uri(  ) . '/assets/css/font-ubuntu.css' );
		wp_enqueue_style( 'font-ubuntu-light', get_stylesheet_directory_uri(  ) . '/assets/css/font-ubuntu-light.css' );
	}

	// RTL styles.
	wp_style_add_data( 'twenty-twenty-one-style', 'rtl', 'replace' );

	// Print styles.
	wp_enqueue_style( 'twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );
	
	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script(
		'twenty-twenty-one-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
			)
		)
	);

	// Main navigation scripts.
	if ( has_nav_menu( 'primary' ) ) {
		wp_enqueue_script(
			'twenty-twenty-one-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array( 'twenty-twenty-one-ie11-polyfills' ),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'twenty-twenty-one-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array( 'twenty-twenty-one-ie11-polyfills' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_scripts' );

/**
 * Enqueue block editor script.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_block_editor_script() {

	wp_enqueue_script( 'twentytwentyone-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'twentytwentyone_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twenty_twenty_one_skip_link_focus_fix() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	}

	// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twenty_twenty_one_skip_link_focus_fix' );

/** Enqueue non-latin language styles
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_non_latin_languages() {
	$custom_css = twenty_twenty_one_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'twenty-twenty-one-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new Twenty_Twenty_One_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new Twenty_Twenty_One_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new Twenty_Twenty_One_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_preview_init() {
	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'twentytwentyone-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'twentytwentyone-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'twentytwentyone_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'twentytwentyone_customize_controls_enqueue_scripts' );

/**
 * Calculate classes for the main <html> element.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_the_html_classes() {
	$classes = apply_filters( 'twentytwentyone_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'twentytwentyone_add_ie_class' );


/**Criação de Post-Types**/
		function create_post_types() {
			
		/**Post Type: Conteúdo**/
		$labels = array(
		"name" => __("Conteúdo", "post-type-banner"),
		"singular_name" => __("Conteúdo", "post-type-banner"),
		"all_items" => __("Todos", "post-type-banner"),
		);
		$args = array(
		"label" => __("Conteúdo", "post-type-banner"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array("slug" => "conteudo", "with_front" => true),
		"query_var" => true,
		"menu_position" => 4,
		"menu_icon" => "dashicons-admin-generic",
		"supports" => array("title"),
		);
		register_post_type("conteudo", $args);	

		/**Post Type: Banner**/
		$labels = array(
		"name" => __("Banner", "post-type-banner"),
		"singular_name" => __("Banner", "post-type-banner"),
		"all_items" => __("Todos", "post-type-banner"),
		);
		$args = array(
		"label" => __("Banner", "post-type-banner"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array("slug" => "banner", "with_front" => true),
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => array("title"),
		);
		register_post_type("banner", $args);

		/**Post Type: Parceiros**/
		$labels = array(
		"name" => __("Parceiros", "post-type-parceiros"),
		"singular_name" => __("Parceiros", "post-type-parceiros"),
		"all_items" => __("Todos", "post-type-parceiros"),
		);
		$args = array(
		"label" => __("Parceiros", "post-type-parceiros"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array("slug" => "parceiros", "with_front" => true),
		"query_var" => true,
		"menu_position" => 6,
		"menu_icon" => "dashicons-admin-users",
		"supports" => array("title"),
		);
		register_post_type("parceiros", $args);

		/**Post Type: Produtos **/
		$labels = array(
		"name" => __("Produtos", "post-type-produtos"),
		"singular_name" => __("Produtos", "post-type-produtos"),
		"all_items" => __("Todos", "post-type-produtos"),
		);
		$args = array(
		"label" => __("Produtos", "post-type-produtos"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array("slug" => "produtos", "with_front" => true),
		"query_var" => true,
		"menu_position" => 4,
		"menu_icon" => "dashicons-admin-site-alt3",
		"supports" => array("title"),
		);
		register_post_type("produtos", $args);

		/**Post Type: Blog**/
		// $labels = array(
		// "name" => __("Postagens", "post-type-postagens"),
		// "singular_name" => __("Postagens", "post-type-postagens"),
		// "all_items" => __("Todos", "post-type-postagens"),
		// );
		// $args = array(
		// "label" => __("Postagens", "post-type-postagens"),
		// "labels" => $labels,
		// "description" => "",
		// "public" => true,
		// "publicly_queryable" => true,
		// "show_ui" => true,
		// "delete_with_user" => false,
		// "show_in_rest" => true,
		// "rest_base" => "",
		// "rest_controller_class" => "WP_REST_Posts_Controller",
		// "has_archive" => false,
		// "show_in_menu" => true,
		// "show_in_nav_menus" => true,
		// "exclude_from_search" => true,
		// "capability_type" => "post",
		// "map_meta_cap" => true,
		// "hierarchical" => true,
		// "rewrite" => array("slug" => "postagens", "with_front" => true),
		// "query_var" => true,
		// "menu_position" => 2,
		// "menu_icon" => "dashicons-admin-users",
		// "supports" => array("title"),
		// );
		// register_post_type("postagens", $args);
		
		/**Post Type: Depoimentos**/
		// $labels = array(
		// "name" => __("Depoimentos", "post-type-depoimentos"),
		// "singular_name" => __("Depoimentos", "post-type-depoimentos"),
		// "all_items" => __("Todos", "post-type-depoimentos"),
		// );
		// $args = array(
		// "label" => __("Depoimentos", "post-type-depoimentos"),
		// "labels" => $labels,
		// "description" => "",
		// "public" => true,
		// "publicly_queryable" => true,
		// "show_ui" => true,
		// "delete_with_user" => false,
		// "show_in_rest" => true,
		// "rest_base" => "",
		// "rest_controller_class" => "WP_REST_Posts_Controller",
		// "has_archive" => false,
		// "show_in_menu" => true,
		// "show_in_nav_menus" => true,
		// "exclude_from_search" => true,
		// "capability_type" => "post",
		// "map_meta_cap" => true,
		// "hierarchical" => true,
		// "rewrite" => array("slug" => "depoimentos", "with_front" => true),
		// "query_var" => true,
		// "menu_position" => 7,
		// "menu_icon" => "dashicons-format-chat",
		// "supports" => array("title"),
		// );
		// register_post_type("depoimentos", $args);


		
		/**Fecha Post-Types**/
		};	
		add_action( 'init', 'create_post_types');
		
		/*Taxonomys*/
		function create_taxonomys() {
		/* Taxonomy: Banners*/
		$labels = [
		"name" => __( "Categorias Banners", "custom-post-type-ui" ),
		"singular_name" => __( "Categoria Banners", "custom-post-type-ui" ),
		];
		$args = [
		"label" => __( "Categorias Banners", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'category_banner', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "category_banner",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		];
		register_taxonomy( "category_banner", [ "banner" ], $args );

		/* Taxonomy: Categorias Banners
		*/
		$labels = [
		"name" => __( "Categorias Banners", "custom-post-type-ui" ),
		"singular_name" => __( "Categoria Banner", "custom-post-type-ui" ),
		];
		$args = [
		"label" => __( "Categorias Banners", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'category_banner', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "category_banner",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		];
		register_taxonomy( "category_banner", [ "banner" ], $args );

		};
		add_action( 'init', 'create_taxonomys');
		
		/*Mudar posts para Relatórios*/		
		// function change_post_label() {
		// global $menu;
		// global $submenu;
		// $menu[5][0] = 'Relatórios';
		// $submenu['edit.php'][5][0] = 'Todos';
		// $submenu['edit.php'][10][0] = 'Adicionar';
		// $submenu['edit.php'][16][0] = 'Tags';
		
		// echo '';
		// }
		// function change_post_object() {
		// global $wp_post_types;
		// $labels = $wp_post_types['post']->labels;
		// $labels->name = 'Relatórios';
		// $labels->singular_name = 'Relatório';
		// $labels->add_new = 'Adicionar';
		// $labels->add_new_item = 'Adicionar';
		// $labels->edit_item = 'Editar';
		// $labels->new_item = 'Relatório';
		// $labels->view_item = 'Ver';
		// $labels->search_items = 'Buscar';
		// $labels->not_found = 'Nenhuma resultado encontrado';
		// $labels->not_found_in_trash = 'Nenhum resultado encontrado no Lixo';
		// $labels->all_items = 'Todos';
		// $labels->menu_name = 'Relatórios';
		// $labels->name_admin_bar = 'Relatórios';
		// }
		// add_action( 'admin_menu', 'change_post_label' );
		// add_action( 'init', 'change_post_object' );


		// Logo Login
		function teo_imagem_login()
		{
		echo '<style type="text/css">';
			echo 'h1 a { background: url(' . get_bloginfo('template_directory') . '/' . 'imagens/';
			// Imagem
			echo '0_logo_oficial.png';
			echo ') 50% 50% no-repeat !important;    width: 100% !important;
			background-size: 98% auto !important;
			height: 100px !important; }
			.wp-core-ui .button-primary {
			background: #04153D!important;
			border-color: transparent;
			box-shadow: none;
			border:0px !important;
			color: #fff !important;
			text-decoration: none;
			text-shadow: none;}
			.wp-core-ui .button-primary:hover {
					background: #04153D!important;
					opacity:0.9;
					border:0px !important;
			}
			input[type=color], input[type=date], input[type=datetime-local], input[type=datetime], input[type=email], input[type=month], input[type=number], input[type=password], input[type=search], input[type=tel], input[type=text], input[type=time], input[type=url], input[type=week], select, textarea {
			 border: 1px solid #ccd0d4 !important;
			outline: none!important;
			}
			input[type=checkbox]:focus, input[type=color]:focus, input[type=date]:focus, input[type=datetime-local]:focus, input[type=datetime]:focus, input[type=email]:focus, input[type=month]:focus, input[type=number]:focus, input[type=password]:focus, input[type=radio]:focus, input[type=search]:focus, input[type=tel]:focus, input[type=text]:focus, input[type=time]:focus, input[type=url]:focus, input[type=week]:focus, select:focus, textarea:focus{
			outline-color: #e1e1e!important;
			box-shadow:none !important;
			border:3px solid #e1e1e!important;
			outline: 1px solid #04153D!important;
			border-radius:3px;
			}
			
			.wp-core-ui .button, .wp-core-ui .button-secondary{
				color:#04153D;
				border:0px;
			}
			input[type=checkbox], input[type=radio] {
			border: 1px solid #000000 !important;
			}
			input[type=checkbox]:checked::before {  
			filter: brightness(0);
			}
			.login #login_error, .login .message, .login .success {
			border-left: 4px solid #f2b708 !important;}
			body{background:#efefef !important;}
			.login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
			color: #04153D;
		}
		</style>';
		}
		add_action('login_head', 'teo_imagem_login');
		/*************************************************************/
		
		
		
		/*************************************************************/
		// Remove Formulário de Comentários no Front-end
		function cwp_desativa_comentarios_frontend()
		{
		return false;
		}
		add_filter('comments_open', 'cwp_desativa_comentarios_frontend', 20, 2);
		add_filter('pings_open', 'cwp_desativa_comentarios_frontend', 20, 2);
		// Esconde Comentários Existentes
		function cwp_esconde_comentarios_existentes($comments)
		{
		$comments = array();
		return $comments;
		}
		add_filter('comments_array', 'cwp_esconde_comentarios_existentes', 10, 2);
		// Desativa o menu Comentários do Painel Administrativo
		function cwp_desativa_comentarios_admin_menu()
		{
		remove_menu_page('edit-comments.php');
		}
		// add_action('admin_menu', 'cwp_desativa_comentarios_admin_menu');
		// Se usuário não for Super Admin
		// if (!current_user_can('add_users')) {
		// Desativando notificações de atualizações do CORE
		// add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
		// add_filter('pre_option_update_core', create_function('$a', "return null;"));
		// Desativando notificações de atualizações dos PLUGINS
		// add_action('admin_menu', create_function('$a', "remove_action( 'load-plugins.php', 'wp_update_plugins' );"));
		// add_action('admin_init', create_function('$a', "remove_action( 'admin_init', 'wp_update_plugins' );"), 2);
		// add_action('admin_init', create_function('$a', "remove_action( 'admin_init', 'wp_update_plugins' );"), 2);
		// add_action('init', create_function('$a', "remove_action( 'init', 'wp_update_plugins' );"), 2);
		// add_filter('pre_option_update_plugins', create_function('$a', "return null;"));
		// Removendo menu de atualização da Admin Bar
		// function removeMenuAdminBar()
		// {
		// global $wp_admin_bar;
		// $wp_admin_bar->remove_menu('updates');
		// }
		// add_action('wp_before_admin_bar_render', 'removeMenuAdminBar');
		// // Remove os menus desejados
		// function removeMenu()
		// {
		// global $menu, $submenu;
		// unset($menu[65]);
		// unset($submenu['index.php'][10]); // Painel -> Atualização
		// }
		// add_action('admin_head', 'removeMenu');
		// }
		

	// Open Graph nos atributos de linguagem
	function add_opengraph_doctype( $output ) {
	return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
	}
	add_filter('language_attributes', 'add_opengraph_doctype');

	//Meta info
	function insert_fb_in_head() {
	global $post;
	if ( !is_singular()) //se não é post ou página
	return;
	/* echo ''; */
	echo '';
	echo '';
	echo '';
	echo '';
	if(!has_post_thumbnail( $post->ID )) { //se o post não tiver uma imagem destacada, usar a imagem padrão
	$default_image="http://brenosilveirapsicologo.com.br/wp-content/uploads/breno_formacao.jpg"; 
	// $default_image="http://brenosilveirapsicologo.com.br/wp-content/themes/brenosilveira/imagens/breno_sobre.jpg"; 
	echo '';
	}
	else{
	$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
	echo '';
	}
	echo "
	";
	}
	add_action( 'wp_head', 'insert_fb_in_head', 5 );