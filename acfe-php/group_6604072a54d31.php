<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6604072a54d31',
	'title' => 'Первый экран',
	'fields' => array(
		array(
			'key' => 'field_6604072ae217a',
			'label' => '',
			'name' => 'welcome',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'acfe_seamless_style' => 0,
			'acfe_group_modal' => 0,
			'acfe_field_group_condition' => 0,
			'sub_fields' => array(
				array(
					'key' => 'field_660407d2e217b',
					'label' => 'Заголовок',
					'name' => 'title',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'acfe_field_group_condition' => 0,
				),
				array(
					'key' => 'field_660407eee217c',
					'label' => 'Текст',
					'name' => 'text',
					'aria-label' => '',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'acfe_textarea_code' => 0,
					'maxlength' => '',
					'rows' => 3,
					'placeholder' => '',
					'new_lines' => '',
					'acfe_field_group_condition' => 0,
				),
				array(
					'key' => 'field_66040802e217d',
					'label' => 'Преимущества',
					'name' => 'advantages',
					'aria-label' => '',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_repeater_stylised_button' => 0,
					'layout' => 'table',
					'pagination' => 0,
					'min' => 0,
					'max' => 0,
					'collapsed' => '',
					'button_label' => 'Добавить преимущество',
					'acfe_field_group_condition' => 0,
					'rows_per_page' => 20,
					'sub_fields' => array(
						array(
							'key' => 'field_66040956e217e',
							'label' => 'Иконка',
							'name' => 'icon',
							'aria-label' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '20',
								'class' => '',
								'id' => '',
							),
							'acfe_field_group_condition' => 0,
							'uploader' => '',
							'acfe_thumbnail' => 0,
							'return_format' => 'id',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '.png, .svg',
							'preview_size' => 'medium',
							'library' => 'all',
							'parent_repeater' => 'field_66040802e217d',
						),
						array(
							'key' => 'field_66040978e217f',
							'label' => 'Текст',
							'name' => 'text',
							'aria-label' => '',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'acfe_field_group_condition' => 0,
							'default_value' => '',
							'acfe_textarea_code' => 0,
							'maxlength' => '',
							'rows' => 3,
							'placeholder' => '',
							'new_lines' => 'br',
							'parent_repeater' => 'field_66040802e217d',
						),
					),
				),
			),
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'large',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_autosync' => array(
		0 => 'php',
	),
	'acfe_form' => 0,
	'acfe_display_title' => '',
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1711543161,
));

endif;