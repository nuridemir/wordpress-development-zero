<?php

if ( ! function_exists( 'customtheme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */

	function customtheme_setup() {
    /**z
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
		load_theme_textdomain( 'customtheme', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		add_theme_support('widgets');

		/**
		 * Add support for two custom navigation menus.
		 */
		function customtheme_register_menus() {
			register_nav_menus(
				array(
					'primary'   => __( 'Primary Menu', 'customtheme' ),
					'footer'    => __( 'Footer Menu', 'customtheme' ),
				)
			);
		}
		add_action( 'after_setup_theme', 'customtheme_register_menus' );


		
		


		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
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


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		
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

		// Remove feed icon link from legacy RSS widget.
		add_filter( 'rss_widget_feed_link', '__return_empty_string' );

	}





    function customtheme_scripts() {
        // Stil dosyalarını enqueue et
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css');

        // Script dosyalarını enqueue et
        wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.4.1.slim.min.js'));
        wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'));
        wp_enqueue_script('custom-script', get_theme_file_uri('/assets/js/custom.js'));

    }

    add_action('wp_enqueue_scripts', 'customtheme_scripts');



}
add_action( 'after_setup_theme', 'customtheme_setup' );



