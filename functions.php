<?php

function your_prefix_get_meta_box( $meta_boxes ) {
	$prefix = 'prefix-';

	$meta_boxes[] = array(
		'id' => 'untitled',
		'title' => esc_html__( 'Untitled Metabox', 'metabox-online-generator' ),
		'post_types' => array('post', 'page' ),
		'context' => 'advanced',
		'priority' => 'high',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'fieldset_text_1',
				'type' => 'fieldset_text',
				'name' => esc_html__( 'Fieldset Text', 'metabox-online-generator' ),
				'rows' => 2,
				'options' => array(
					'date' => esc_html__( 'Date', 'metabox-online-generator' ),
					'id' => esc_html__( 'ID', 'metabox-online-generator' ),
				),
				'clone' => 'true',
				'add_button' => esc_html__( 'Add', 'metabox-online-generator' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'your_prefix_get_meta_box' );
add_action( 'init', 'prefix_load_phone_type' );
function prefix_load_phone_type() {
    require 'custom-fieldset-text.php';
}