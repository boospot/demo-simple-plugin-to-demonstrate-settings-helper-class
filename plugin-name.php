<?php
/*
Plugin Name: Plugin Settings Demo (Simple)
Plugin URI: #
Description: This is Procedural plugin to Demonstrate Boo Settings Helper Class
Author: boospot
Version: 1.0
Author URI: https://github.com/boospot/
*/


function plugin_menu_using_boo_setting_helper_simple() {

	// Require Settings Helper Class
	require_once 'vendor/boo-settings-helper/class-boo-settings-helper.php';

	// Create Config Array
	$settings_config_array             = array();
	$settings_config_array['prefix']   = 'plugin_prefix_';
	$settings_config_array['tabs']     = true;
	$settings_config_array['menu']     = array(
		'page_title' => __( 'Plugin Name Settings', 'plugin-name' ),
		'menu_title' => __( 'Plugin Name', 'plugin-name' ),
		'capability' => 'manage_options',
		'slug'       => 'plugin-name',
//		'icon'       => 'dashicons-performance',
//		'position'   => 10,
//		'submenu'    => true,
//		'parent'     => 'edit.php?post_type=event',
	);
	$settings_config_array['sections'] = array(
		array(
			'id'    => 'general_section',
			'title' => __( 'General Settings', 'plugin-name' ),
			'desc'  => __( 'These are general settings for Plugin Name', 'plugin-name' ),
		),
		array(
			'id'    => 'advance_section',
			'title' => __( 'Advanced Settings', 'plugin-name' ),
			'desc'  => __( 'These are advance settings for Plugin Name', 'plugin-name' )
		)
	);
	$settings_config_array['fields']   = array(
		'general_section' => array(
			array(
				'id'                => 'text_field_id',
				// string  (Must be unique for one config array
				'label'             => __( 'Text Field', 'plugin-name' ),
				// Text
				'desc'              => __( 'Some description of my field', 'plugin-name' ),
				// Text
				'type'              => 'text',
				// string           (field type name like: 'select', 'radio' , 'media'
				'placeholder'       => 'This is Placeholder',
				// string           (Used for fields where placeholder attribute works)
				'default'           => '',
				// string | array   (Depending upon the field where used)
				'options'           => array(),
				// array            (used for: select, radio, multicheck, media)
				'callback'          => '',
				// string | array   (function name to be used to render field )
				'sanitize_callback' => '',
				// string | array   (function name to be used for sanitization )
				'show_in_rest'      => true,
				// true | false     ( Default: true )
				'class'             => 'my_custom_css_class',
				// separate more classes with space
				'size'              => 'regular',
				// 'small' | 'regular' | 'large'  ( Default: 'regular' )
			),
			array(
				'id'    => 'url_field_id',
				'label' => __( 'URL Field', 'plugin-name' ),
				'type'  => 'url',
			),
			array(
				'id'          => 'number_field_id',
				'label'       => __( 'Number Input', 'plugin-name' ),
				'placeholder' => __( 'Your Age here', 'plugin-name' ),
				'options'     => array(
					'min'  => 0,
					'max'  => 99,
					'step' => '1',
				),
				'type'        => 'number',
				'default'     => '50',
			),
			array(
				'id'    => 'color_field_id',
				'label' => __( 'Color Field', 'plugin-name' ),
				'type'  => 'color',
			),
			array(
				'id'          => 'textarea_field_id',
				'label'       => __( 'Textarea Input', 'plugin-name' ),
				'desc'        => __( 'Textarea description', 'plugin-name' ),
				'placeholder' => __( 'Textarea placeholder', 'plugin-name' ),
				'type'        => 'textarea'
			),
			array(
				'id'      => 'radio_field_id',
				'label'   => __( 'Radio Button', 'plugin-name' ),
				'desc'    => __( 'A radio button', 'plugin-name' ),
				'type'    => 'radio',
				'options' => array(
					'radio_1' => 'Radio 1',
					'radio_2' => 'Radio 2',
					'radio_3' => 'Radio 3'
				),
				'default' => 'radio_2'
			),
			array(
				'id'      => 'select_field_id',
				'label'   => __( 'A Dropdown Select', 'plugin-name' ),
				'desc'    => __( 'Dropdown description', 'plugin-name' ),
				'type'    => 'select',
				'default' => 'option_2',
				'options' => array(
					'option_1' => 'Option 1',
					'option_2' => 'Option 2',
					'option_3' => 'Option 3'
				),
			),
			array(
				'id'   => 'html',
				'desc' => __( 'HTML area description. You can use any <strong>bold</strong> or other HTML elements.', 'plugin-name' ),
				'type' => 'html'
			),
			array(
				'id'    => 'checkbox_field_id',
				'label' => __( 'Checkbox', 'plugin-name' ),
				'desc'  => __( 'Checkbox Label', 'plugin-name' ),
				'type'  => 'checkbox',
				''
			),
			array(
				'id'      => 'multi_field_id',
				'label'   => __( 'Multicheck', 'plugin-name' ),
				'desc'    => __( 'A radio button', 'plugin-name' ),
				'type'    => 'multicheck',
				'options' => array(
					'multi_1' => 'Multi 1',
					'multi_2' => 'Multi 2',
					'multi_3' => 'Multi 3'
				),
				'default' => array(
					'multi_1' => 'multi_1',
					'multi_3' => 'multi_3'
				)
			),
			array(
				'id'      => 'pages_field_id',
				'label'   => __( 'Pages Field Type', 'plugin-name' ),
				'desc'    => __( 'List of Pages', 'plugin-name' ),
				'type'    => 'pages',
				'options' => array(
					'post_type' => 'post'
				),
			),
			array(
				'id'      => 'posts_field_id',
				'label'   => __( 'Posts Field Type', 'plugin-name' ),
//						'desc'    => __( 'List of Posts', 'plugin-name' ),
				'type'    => 'posts',
				'options' => array(
					'post_type' => 'post'
				),
			),
			array(
				'id'          => 'password_field_id',
				'label'       => __( 'Password Field', 'plugin-name' ),
				'desc'        => __( 'Password description', 'plugin-name' ),
				'placeholder' => __( 'Textarea placeholder', 'plugin-name' ),
				'type'        => 'password',
				'default'     => '',
			),
			array(
				'id'          => 'file_field_id',
				'label'       => __( 'File', 'plugin-name' ),
				'desc'        => __( 'File description', 'plugin-name' ),
				'type'        => 'file',
				'default'     => '',
				'placeholder' => __( 'Textarea placeholder', 'plugin-name' ),
				'options'     => array(//					'btn' => 'Get it'
				)
			),
			array(
				'id'      => 'media_field_id',
				'label'   => __( 'Media', 'plugin-name' ),
				'desc'    => __( 'Media', 'plugin-name' ),
				'default' => '136',
				'type'    => 'media',
				'options' => array(
//					'btn'       => __( 'Get the image', 'plugin-name' ),
					'width'     => 150,
					'max_width' => 150
				)

			),
			array(
				'id'       => 'text_callback_field_id',
				'label'    => __( 'Field to Demonstrate Callback', 'plugin-name' ),
				'callback' => 'plugin_name_my_callback_render_field'
			),
		),
		'advance_section' => array(
			array(
				'id'                => 'adv_text_field_id',
				'label'             => __( 'Another Text', 'plugin-name' ),
				'desc'              => __( 'with sanitize callback "sanitize_title"', 'plugin-name' ),
				'placeholder'       => __( 'Text Input placeholder', 'plugin-name' ),
				'type'              => 'text',
				'default'           => '',
				'sanitize_callback' => 'sanitize_title'
			)
		)
	);
	$settings_config_array['links']    = array(
		'plugin_basename' => plugin_basename( __FILE__ ),
		'action_links'    => array(
			array(
				'type' => 'default',
				'text' => __( 'Configure', 'plugin-name' ),
			),
			array(
				'type' => 'internal',
				'text' => __( 'Gravity Forms', 'plugin-name' ),
				'url'  => 'admin.php?page=gf_edit_forms',
			),
			array(
				'type' => 'external',
				'text' => __( 'Github Repo', 'plugin-name' ),
				'url'  => 'https://github.com/boospot/boo-settings-helper',
			),
		),
	);

	// Pass Config Array to Class Constructor
	$settings_helper = new Boo_Settings_Helper( $settings_config_array );

}

function plugin_name_my_callback_render_field( $args ) {
//	inspect $args
//	echo "<pre>";var_export( $args);echo "</pre>";
	$html = sprintf(
		'<input 
						class="regular-text"
                        type="%1$s" 
                        name="%2$s" 
                        value="%3$s"
                        placeholder="%4$s"
                        style="border: 3px solid red;"
                        />',
		$args['type'],
		$args['name'],
		$args['value'],
		'Placeholder from callback'
	);
	$html .= '<br/><small>This field is generated with callback parameter</small>';
	echo $html;
	unset( $html );

}

add_action( 'admin_menu', 'plugin_menu_using_boo_setting_helper_simple' );

