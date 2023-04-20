<?php
add_action('acf/init', 'my_register_blocks');
function my_register_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'            => 'statistics',
            'title'             => __('statistics'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
			'name'            => 'about',
            'title'             => __('about'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
			'name'            => 'portfolio',
            'title'             => __('portfolio'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
			'name'            => 'services',
            'title'             => __('services'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
			'name'            => 'procedure',
            'title'             => __('procedure'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));

    }
}

function my_acf_block_render_callback( $block )
{
	$name = str_replace( 'acf/', '', $block['name'] );

	if ( file_exists( get_theme_file_path( "/template-parts/block-{$name}.php" ) ) ) {
		include( get_theme_file_path( "/template-parts/block-{$name}.php" ) );
	}
}


