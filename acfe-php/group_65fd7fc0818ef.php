<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_65fd7fc0818ef',
	'title' => 'Блоки',
	'fields' => array(
		array(
			'key' => 'field_65fd7fc084813',
			'label' => 'Блоки',
			'name' => 'blocks',
			'aria-label' => '',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_flexible_advanced' => 1,
			'acfe_flexible_stylised_button' => 0,
			'acfe_flexible_hide_empty_message' => 0,
			'acfe_flexible_empty_message' => '',
			'acfe_flexible_layouts_templates' => 0,
			'acfe_flexible_layouts_placeholder' => 0,
			'acfe_flexible_layouts_thumbnails' => 1,
			'acfe_flexible_layouts_settings' => 0,
			'acfe_flexible_layouts_locations' => 0,
			'acfe_flexible_async' => array(
			),
			'acfe_flexible_add_actions' => array(
			),
			'acfe_flexible_remove_button' => array(
			),
			'acfe_flexible_layouts_state' => 'user',
			'acfe_flexible_modal_edit' => array(
				'acfe_flexible_modal_edit_enabled' => '0',
				'acfe_flexible_modal_edit_size' => 'large',
			),
			'acfe_flexible_modal' => array(
				'acfe_flexible_modal_enabled' => '1',
				'acfe_flexible_modal_title' => 'Заголовок',
				'acfe_flexible_modal_size' => 'full',
				'acfe_flexible_modal_col' => '3',
				'acfe_flexible_modal_categories' => '0',
			),
			'acfe_flexible_grid' => array(
				'acfe_flexible_grid_enabled' => '0',
				'acfe_flexible_grid_align' => 'center',
				'acfe_flexible_grid_valign' => 'stretch',
				'acfe_flexible_grid_wrap' => false,
			),
			'layouts' => array(
				'layout_65fd7fc69c8c3' => array(
					'key' => 'layout_65fd7fc69c8c3',
					'name' => 'achievements',
					'label' => 'Достижения',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6605424e6890a',
							'label' => '',
							'name' => '',
							'aria-label' => '',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_660540bae5da4',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_field_group_condition' => 0,
							'acfe_seamless_style' => 0,
							'acfe_clone_modal' => 0,
							'acfe_clone_modal_close' => 0,
							'acfe_clone_modal_button' => '',
							'acfe_clone_modal_size' => 'large',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
			),
			'min' => '',
			'max' => '',
			'button_label' => 'Добавить блок',
			'acfe_field_group_condition' => 0,
			'acfe_flexible_layouts_previews' => false,
			'acfe_flexible_grid_container' => false,
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
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'author',
		1 => 'comments',
		2 => 'discussion',
		3 => 'revisions',
		4 => 'the_content',
		5 => 'slug',
	),
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
	'modified' => 1711620698,
));

endif;