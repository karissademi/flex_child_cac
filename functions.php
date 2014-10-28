<?php
/* custom functions

*/

//allow pages to have cats
function add_categories_to_page(){
	register_taxonomy_for_object_type('category', 'page');
}
add_action( 'init', 'add_categories_to_page' );


function cac_js() {
	wp_enqueue_script( 'general', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'cac_js' );

//show kitchen sink!
function unhide_kitchensink( $args ) {
$args['wordpress_adv_hidden'] = false;
return $args;
}
add_filter( 'tiny_mce_before_init', 'unhide_kitchensink' );

function futures_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Futures Sidebar', 'cac' ),
        'id' => 'futures',
        'description' => __( 'Widgets in this area will be shown on the Futures Pages.', 'cac' ),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'futures_widgets_init' );

if(!function_exists('md_remove_page_from_search')) {
    function md_remove_page_from_search($query) {
    //dont do anything
    }
    add_filter('pre_get_posts','md_remove_page_from_search');
}

?>