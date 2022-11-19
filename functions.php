<?php

	define('DI_DIR_CSS', get_template_directory_uri() . '/assets/css/');
	define('DI_DIR_JS', get_template_directory_uri() . '/assets/js/');
  define('DI_DIR_SPLIDE_CSS', get_template_directory_uri() . '/assets/js/splide-4.1.3/dist/css/');
	define('DI_DIR_SPLIDE_JS', get_template_directory_uri() . '/assets/js/splide-4.1.3/dist/js/');
	define('DI_DIR_IMG', get_template_directory_uri() . '/assets/img/');
	define('DI_DIR_FONTS', get_template_directory_uri() . '/assets/fonts/');

  include('inc/registerPostTypes.php');

  add_theme_support( 'custom-logo' );
  
  add_action('after_setup_theme', function(){
		add_theme_support('post-thumbnails');
	});

  add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('splide_css', DI_DIR_SPLIDE_CSS . 'splide.min.css');
    wp_enqueue_style('fonts', DI_DIR_FONTS . 'fonts.css');
    wp_enqueue_style('styles', DI_DIR_CSS . 'styles.css');

    wp_enqueue_script('splide_js', DI_DIR_SPLIDE_JS . 'splide.min.js', [], false, true);
    wp_enqueue_script('main', DI_DIR_JS . 'main.js', [], false, true);
  });

  add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
        
    return $content;
  });

  add_filter('wpcf7_autop_or_not', '__return_false');

  //Disable Gutenberg
  if( 'disable_gutenberg' ){
    remove_theme_support( 'core-block-patterns' );

    add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

    remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );

    add_action( 'admin_init', function(){
      remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
      add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
    } );
  }
  //End disable Gutenberg