<?php

require_once 'aq_resizer.php'; 

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // custom.js
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
}

/*--- CUSTOM FIELDS ---*/

add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    /*--- HERO & PAGE TITLES ---*/
    register_block_type( __DIR__ . '/blocks/hero-img-bg' );
    register_block_type( __DIR__ . '/blocks/hero-video-bg' );
    register_block_type( __DIR__ . '/blocks/hero-con-img' );

    /*--- COMMON ---*/
    register_block_type( __DIR__ . '/blocks/con-img' );
    register_block_type( __DIR__ . '/blocks/accordion-img' );
    register_block_type( __DIR__ . '/blocks/button' );
    register_block_type( __DIR__ . '/blocks/accordion' );
    register_block_type( __DIR__ . '/blocks/title-con-btn' );
    register_block_type( __DIR__ . '/blocks/textarea' );
    register_block_type( __DIR__ . '/blocks/txt-txt' );
    register_block_type( __DIR__ . '/blocks/value' );
    register_block_type( __DIR__ . '/blocks/carousel' );
    register_block_type( __DIR__ . '/blocks/carousel-wrap' );
    register_block_type( __DIR__ . '/blocks/contact' );

    /*--- MEDIA ---*/
    register_block_type( __DIR__ . '/blocks/gallery' );

	
}

// CUSTOM GUTENBERG CATEGORY 

add_filter( 'block_categories_all' , function( $categories ) {

    // Adding a new category.
	$categories[] = array(
		'slug'  => '_projekt',
		'title' => 'Project'
	);

    // Adding a new category.
	$categories[] = array(
		'slug'  => '_media',
		'title' => 'Media'
	);

    // Adding a new category.
	$categories[] = array(
		'slug'  => '_con',
		'title' => 'Containers'
	);

    // Adding a new category.
	$categories[] = array(
		'slug'  => '_tekst',
		'title' => 'Text'
	);

	return $categories;
} );

// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

/*--- MAIN CLASS ADD ---*/

function main_class() {
    register_block_type('core/main', array(
        'attributes' => array(
            'customClassName' => array(
                'type' => 'string',
                'default' => '',
            ),
        ),
    ));
}
add_action('init', 'main_class');