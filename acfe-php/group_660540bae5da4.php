<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_660540bae5da4',
	'title' => 'Block:achievements',
	'fields' => array(
		array(
			'key' => 'field_660540bb5c97e',
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
			'key' => 'field_6605412ff6cf2',
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
		),
		array(
			'key' => 'field_66054144f6cf4',
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
			'rows' => 5,
			'placeholder' => '',
			'new_lines' => 'br',
			'acfe_field_group_condition' => 0,
		),
		array(
			'key' => 'field_66054141f6cf3',
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
		),
		array(
			'key' => 'field_66054164f6cf5',
			'label' => 'Дополнительный текст',
			'name' => 'extra_text',
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
			'rows' => 5,
			'placeholder' => '',
			'new_lines' => 'br',
			'acfe_field_group_condition' => 0,
		),
		array(
			'key' => 'field_660541b3f6cf6',
			'label' => '(Column Fill)',
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
			'columns' => 'fill',
			'endpoint' => 0,
			'border' => '',
			'acfe_field_group_condition' => 0,
			'border_endpoint' => array(
				0 => 'endpoint',
			),
		),
		array(
			'key' => 'field_660541c1f6cf7',
			'label' => 'Достижения',
			'name' => 'achievements',
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
			'max' => 6,
			'collapsed' => '',
			'button_label' => 'Добавить достижение',
			'acfe_field_group_condition' => 0,
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_66054200f6cf8',
					'label' => 'Число',
					'name' => 'number',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '10',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'acfe_field_group_condition' => 0,
					'parent_repeater' => 'field_660541c1f6cf7',
				),
				array(
					'key' => 'field_66054217f6cf9',
					'label' => 'Описание',
					'name' => 'desc',
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
					'parent_repeater' => 'field_660541c1f6cf7',
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
	'modified' => 1711636285,
));

endif;