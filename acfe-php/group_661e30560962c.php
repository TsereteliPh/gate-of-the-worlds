<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_661e30560962c',
	'title' => 'Block:faq-master',
	'fields' => array(
		array(
			'key' => 'field_661e30561a416',
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
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'large',
			'sub_fields' => array(
				array(
					'key' => 'field_661e3056257c8',
					'label' => 'Тип',
					'name' => 'type',
					'aria-label' => '',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'h1' => 'H1',
						'h2' => 'H2',
						'h3' => 'H3',
					),
					'default_value' => false,
					'return_format' => 'value',
					'multiple' => 0,
					'max' => '',
					'prepend' => '',
					'append' => '',
					'allow_null' => 0,
					'ui' => 0,
					'acfe_field_group_condition' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'allow_custom' => 0,
					'search_placeholder' => '',
					'min' => '',
				),
				array(
					'key' => 'field_661e305629498',
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
		),
		array(
			'key' => 'field_661e3079ba6fb',
			'label' => 'Фотография мастера',
			'name' => 'img',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => 'Фотография должна быть формата 1 : 1',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'uploader' => '',
			'acfe_thumbnail' => 0,
			'return_format' => 'id',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
			'acfe_field_group_condition' => 0,
			'library' => 'all',
		),
		array(
			'key' => 'field_661e30561dfec',
			'label' => 'Вопросы мастеру',
			'name' => 'faq',
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
			'button_label' => 'Добавить вопрос',
			'acfe_field_group_condition' => 0,
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_661e305637e37',
					'label' => '(Column 5/12)',
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
					'columns' => '5/12',
					'endpoint' => 0,
					'border' => '',
					'acfe_field_group_condition' => 0,
					'border_endpoint' => array(
						0 => 'endpoint',
					),
					'parent_repeater' => 'field_661e30561dfec',
				),
				array(
					'key' => 'field_661e3108ba6fd',
					'label' => 'Имя пользователя',
					'name' => 'name',
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
					'parent_repeater' => 'field_661e30561dfec',
				),
				array(
					'key' => 'field_661e3119ba6fe',
					'label' => 'Фото пользователя',
					'name' => 'img',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => 'Оставить пустым если нет изображения',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'uploader' => '',
					'acfe_thumbnail' => 0,
					'return_format' => 'id',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'preview_size' => 'medium',
					'acfe_field_group_condition' => 0,
					'library' => 'all',
					'parent_repeater' => 'field_661e30561dfec',
				),
				array(
					'key' => 'field_661ea266f2328',
					'label' => 'Дата',
					'name' => 'date',
					'aria-label' => '',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'd.m.Y',
					'return_format' => 'Y-m-d',
					'first_day' => 1,
					'placeholder' => '',
					'min_date' => '',
					'max_date' => '',
					'no_weekends' => 0,
					'acfe_field_group_condition' => 0,
					'parent_repeater' => 'field_661e30561dfec',
				),
				array(
					'key' => 'field_661e30562cfbd',
					'label' => '(Column 7/12)',
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
					'columns' => '7/12',
					'endpoint' => 0,
					'border' => '',
					'acfe_field_group_condition' => 0,
					'border_endpoint' => array(
						0 => 'endpoint',
					),
					'parent_repeater' => 'field_661e30561dfec',
				),
				array(
					'key' => 'field_661e312eba6ff',
					'label' => 'Вопрос',
					'name' => 'question',
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
					'new_lines' => '',
					'acfe_field_group_condition' => 0,
					'parent_repeater' => 'field_661e30561dfec',
				),
				array(
					'key' => 'field_661e30e9ba6fc',
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
					'parent_repeater' => 'field_661e30561dfec',
				),
				array(
					'key' => 'field_661e313cba700',
					'label' => 'Ответ',
					'name' => 'answer',
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
					'parent_repeater' => 'field_661e30561dfec',
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
	'modified' => 1713283801,
));

endif;