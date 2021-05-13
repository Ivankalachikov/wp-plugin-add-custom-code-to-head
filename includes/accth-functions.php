<?php

function accth_register_settings() {
	add_settings_section(
		'accth_custom_code_section',
		'Add your code here',
		'__return_false',
		'general'
	);
	add_settings_field(
		'accth_custom_code',
		'Tracking code',
		'accth_print_settings',
		'general',
		'accth_custom_code_section'
	);
	register_setting(
		'general',
		'accth_custom_code'
	);
}

function accth_print_settings() {
	$accth_code = get_option( 'accth_custom_code' );
	echo "<textarea id='accth_textarea' name='accth_custom_code[text_area]' rows='7' cols='50' type='textarea'>"
	. esc_attr( $accth_code['text_area'] )
	. '</textarea>';
}

function accth_insert_codes() {
	$accth_code = get_option( 'accth_custom_code' );
	echo implode( '\n', $accth_code );
}

