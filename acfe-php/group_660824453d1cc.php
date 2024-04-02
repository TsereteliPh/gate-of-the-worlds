<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_660824453d1cc',
	'title' => 'Block:schedule',
	'fields' => array(
		array(
			'key' => 'field_660824454a3fb',
			'label' => 'Заголовок',
			'name' => 'title',
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
			'layout' => 'table',
			'acfe_seamless_style' => 0,
			'acfe_group_modal' => 0,
			'acfe_field_group_condition' => 0,
			'sub_fields' => array(
				array(
					'key' => 'field_660826e813ee6',
					'label' => 'Выделенный текст',
					'name' => 'highlighted',
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
					'key' => 'field_6608270913ee7',
					'label' => 'Текст',
					'name' => 'text',
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
			),
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'large',
		),
		array(
			'key' => 'field_6608244551c2f',
			'label' => 'Расписание занятий',
			'name' => 'schedule',
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
			'layout' => 'block',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Добавить занятие',
			'acfe_field_group_condition' => 0,
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_66082486f4fa9',
					'label' => '(Column 6/12)',
					'name' => '',
					'aria-label' => '',
					'type' => 'acfe_column',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'columns' => '6/12',
					'endpoint' => 0,
					'border' => '',
					'acfe_field_group_condition' => 0,
					'border_endpoint' => array(
						0 => 'endpoint',
					),
					'parent_repeater' => 'field_6608244551c2f',
				),
				array(
					'key' => 'field_6608249ef4faa',
					'label' => 'Дата',
					'name' => 'date',
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
					'parent_repeater' => 'field_6608244551c2f',
				),
				array(
					'key' => 'field_660824a6f4fab',
					'label' => 'Формат',
					'name' => 'type',
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
					'parent_repeater' => 'field_6608244551c2f',
				),
				array(
					'key' => 'field_660824bbf4fac',
					'label' => 'Стоимость',
					'name' => 'price',
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
							'key' => 'field_660824e3f4fad',
							'label' => 'Полная стоимость',
							'name' => 'full',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'acfe_field_group_condition' => 0,
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
						array(
							'key' => 'field_6608250ef4fae',
							'label' => 'Акционная цена',
							'name' => 'promo',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'acfe_field_group_condition' => 0,
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
					),
					'acfe_group_modal_close' => 0,
					'acfe_group_modal_button' => '',
					'acfe_group_modal_size' => 'large',
					'parent_repeater' => 'field_6608244551c2f',
				),
				array(
					'key' => 'field_6608247ef4fa8',
					'label' => '(Column 6/12)',
					'name' => '',
					'aria-label' => '',
					'type' => 'acfe_column',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'columns' => '6/12',
					'endpoint' => 0,
					'border' => '',
					'acfe_field_group_condition' => 0,
					'border_endpoint' => array(
						0 => 'endpoint',
					),
					'parent_repeater' => 'field_6608244551c2f',
				),
				array(
					'key' => 'field_6608244559281',
					'label' => 'Занятие',
					'name' => 'class',
					'aria-label' => '',
					'type' => 'post_object',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array(
						0 => 'courses',
					),
					'post_status' => array(
						0 => 'publish',
					),
					'taxonomy' => '',
					'return_format' => 'id',
					'multiple' => 0,
					'max' => '',
					'save_custom' => 0,
					'save_post_status' => 'publish',
					'acfe_add_post' => 0,
					'acfe_edit_post' => 0,
					'acfe_bidirectional' => array(
						'acfe_bidirectional_enabled' => '0',
					),
					'allow_null' => 0,
					'acfe_field_group_condition' => 0,
					'bidirectional' => 0,
					'ui' => 1,
					'bidirectional_target' => array(
					),
					'save_post_type' => '',
					'min' => '',
					'parent_repeater' => 'field_6608244551c2f',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => false,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_autosync' => array(
		0 => 'php',
	),
	'acfe_form' => 0,
	'acfe_display_title' => '',
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1711810384,
));

endif;