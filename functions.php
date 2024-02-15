<?php

if (!defined('STYLESOUP_TYPOGRAPHY_CLASSES')) {
	define('STYLESOUP_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if (!function_exists('stylesoup_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function stylesoup_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus([
			'menu-1' => __('Primary', 'stylesoup'),
			'menu-2' => __('Footer Menu', 'stylesoup'),
		]);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			]);

		add_theme_support('custom-logo',[
			'height'      => 100, // Adjust the height as needed
			'width'       => 400, // Adjust the width as needed
			'flex-height' => true,
			'flex-width'  => true,
		]);


		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');
		add_editor_style('style-editor-extra.css');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Remove support for block templates.
		add_theme_support('block-templates');
	}
endif;
add_action('after_setup_theme', 'stylesoup_setup');


/**
 * Enqueue scripts and styles.
 */
function stylesoup_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_style('stylesoup-style', get_stylesheet_uri());
	wp_enqueue_script('stylesoup-script', get_stylesheet_directory_uri() . '/js/script.js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'stylesoup_scripts');

/**
 * Enqueue the block editor script.
 */
function stylesoup_enqueue_block_editor_script() {
	wp_enqueue_script(
		'stylesoup-editor',
		__DIR__ . '/js/block-editor.min.js',
		[
			'wp-blocks',
			'wp-edit-post',
		],
		false,
		true
	);
}
add_action('enqueue_block_editor_assets', 'stylesoup_enqueue_block_editor_script');

/**
 * Enqueue the script necessary to support Tailwind Typography in the block
 * editor, using an inline script to create a JavaScript array containing the
 * Tailwind Typography classes from STYLESOUP_TYPOGRAPHY_CLASSES.
 */
function stylesoup_enqueue_typography_script() {
	if (is_admin()) {
		wp_enqueue_script(
			'stylesoup-typography',
			__DIR__ . '/js/tailwind-typography-classes.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			false,
			true
		);
		wp_add_inline_script('stylesoup-typography', "tailwindTypographyClasses = '" . esc_attr(STYLESOUP_TYPOGRAPHY_CLASSES) . "'.split(' ');", 'before');
	}
}
add_action('enqueue_block_assets', 'stylesoup_enqueue_typography_script');

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function stylesoup_tinymce_add_class($settings) {
	$settings['body_class'] = STYLESOUP_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter('tiny_mce_before_init', 'stylesoup_tinymce_add_class');

/**
 * Custom template tags for this theme.
 */
require __DIR__ . '/inc/template-tags.php';
require __DIR__ . '/inc/template-functions.php';
require __DIR__ . '/inc/Router.php';


function get_image_path($image_name) {
	return get_stylesheet_directory_uri() . '/' . ltrim($image_name, '/');
}


$info_file = __DIR__ . '/info.json';
$services = json_decode(file_get_contents($info_file), true);


$router = new MakeitWorkPress\WP_Router\Router([
	'stylists'    => ['route' => 'stylists/', 'title' => __('Our Stylists')],
	'services'   => ['route' => 'services/', 'title' => __('Our Services')]
]);