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

?>
