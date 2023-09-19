<?php
function blog_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

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
	add_theme_support(
		'custom-logo',
		array(
			// 'width'       => 340,
			// 			'height'=> 88,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'blog_setup' );





add_filter( 'wpcf7_form_autocomplete', function ( $autocomplete ) {
	$autocomplete = 'off';
	return $autocomplete;
}, 10, 1 );


function generate_sitemap() {
	$args = array(
			'post_type' => array('page', 'post', 'portfolio', 'service'), // Замените 'your_custom_post_type' на название вашего кастомного типа записей
			'posts_per_page' => -1,
	);

	$query = new WP_Query($args);
	$sitemap = '<ul>';

	while ($query->have_posts()) {
			$query->the_post();
			$sitemap .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
	}

	wp_reset_postdata();

	$sitemap .= '</ul>';

	return $sitemap;
}

add_shortcode('sitemap', 'generate_sitemap');
