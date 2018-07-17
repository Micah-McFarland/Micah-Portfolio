<?php function your_prefix_get_meta_box( $meta_boxes ) {
	$prefix = 'prefix-';

	$meta_boxes[] = array(
		'id' => 'textbox',
		'title' => esc_html__( 'Textbox', 'metabox-online-generator' ),
		'post_types' => array( 'post', 'page' ),
		'context' => 'after_editor',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'text_1',
				'type' => 'text',
				'name' => esc_html__( 'Text', 'metabox-online-generator' ),
				'size' => 4,
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'your_prefix_get_meta_box' );

add_filter('show_admin_bar', '__return_false');

function wpse_ssl_template_redirect() {
    if ( !is_ssl() ) {
        if ( 0 === strpos($_SERVER['REQUEST_URI'], 'http') ) {
            wp_redirect(preg_replace('|^http://|', 'https://', $_SERVER['REQUEST_URI']), 301 );
            exit();
        } else {
            wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301 );
            exit();
        }
    }
}

add_action( 'template_redirect', 'wpse_ssl_template_redirect', 1 );

?>
