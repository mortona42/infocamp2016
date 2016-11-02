<?php

/* Custom meta for bio page template */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_bios',
		'title' => 'Bios',
		'fields' => array (
			array (
				'key' => 'field_53d1dc433694e',
				'label' => 'Organizer',
				'name' => 'organizer',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_53d1dc583694f',
						'label' => 'Name',
						'name' => 'name',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53d1e21d16822',
						'label' => 'InfoCamp Role',
						'name' => 'infocamp_role',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53d1dc6436950',
						'label' => 'About',
						'name' => 'about',
						'type' => 'textarea',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
					array (
						'key' => 'field_53d1dc8036951',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_53d1dca036952',
						'label' => 'Twitter Handle',
						'name' => 'twitter',
						'type' => 'text',
						'instructions' => '@yourname',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53d1dd1836953',
						'label' => 'Facebook profile',
						'name' => 'facebook',
						'type' => 'text',
						'instructions' => 'URL for your profile',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53d1dd3336954',
						'label' => 'LinkedIn',
						'name' => 'linkedin',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Organizer',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'bios-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


?>