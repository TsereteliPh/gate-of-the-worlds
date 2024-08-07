<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'adem_setup' ) ) {
	function adem_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
		add_theme_support( 'editor-styles' );
		add_editor_style();

		register_nav_menus(
			array(
				'menu_main' => 'Основное меню',
			)
		);
	}

	//	register thumbnails
//	add_image_size( '123x123', 123, 123, true );

	// register post types
	register_post_type( 'courses', [
		'label' => null,
		'labels' => [
			'name' => 'Программы и курсы',
			'singular_name' => 'Курс',
			'add_new' => 'Добавить курс',
			'add_new_item' => 'Добавить курс',
			'edit_item' => 'Редактировать курс',
			'new_item' => 'Новый курс',
			'view_item' => 'Смотреть курс',
			'search_items' => 'Найти курс',
			'not_found' => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'menu_name' => 'Программы и курсы',
		],
		'public' => true,
		'show_in_menu' => true,
		'menu_position' => 21,
		'menu_icon' => 'dashicons-category',
		'supports' => ['title', 'editor', 'thumbnail'],
		'taxonomies' => ['course_type'],
		'has_archive' => false,
		'rewrite' => true,
		'query_var' => true,
		'publicly_queryable' => false
	] );

	register_post_type( 'masters', [
		'label' => null,
		'labels' => [
			'name' => 'Мастера',
			'singular_name' => 'Мастер',
			'add_new' => 'Добавить мастера',
			'add_new_item' => 'Добавить мастера',
			'edit_item' => 'Редактировать информацию о мастере',
			'new_item' => 'Новый мастер',
			'view_item' => 'Смотреть информацию о мастере',
			'search_items' => 'Найти мастера',
			'not_found' => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'menu_name' => 'Мастера',
		],
		'public' => true,
		'show_in_menu' => true,
		'menu_position' => 22,
		'menu_icon' => 'dashicons-groups',
		'supports' => ['title', 'editor', 'thumbnail'],
		'taxonomies' => ['course_type'],
		'has_archive' => false,
		'rewrite' => true,
		'query_var' => true,
		'publicly_queryable' => false
	] );

	register_post_type( 'graduates', [
		'label' => null,
		'labels' => [
			'name' => 'Выпускники',
			'singular_name' => 'Выпускник',
			'add_new' => 'Добавить выпускника',
			'add_new_item' => 'Добавить выпускника',
			'edit_item' => 'Редактировать информацию о выпускнике',
			'new_item' => 'Новый выпускник',
			'view_item' => 'Смотреть информацию о выпускнике',
			'search_items' => 'Найти выпускника',
			'not_found' => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'menu_name' => 'Выпускники',
		],
		'public' => true,
		'show_in_menu' => true,
		'menu_position' => 23,
		'menu_icon' => 'dashicons-welcome-learn-more',
		'supports' => ['title', 'editor', 'thumbnail'],
		'taxonomies' => ['course_type'],
		'has_archive' => false,
		'rewrite' => true,
		'query_var' => true,
		'publicly_queryable' => false
	] );
}

add_action( 'after_setup_theme', 'adem_setup' );

// Return classic widgets
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'wp_enqueue_scripts', 'adem_scripts' );
function adem_scripts() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-block-style' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'classic-theme-styles' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/vendor/css/fancybox.css', array(), '4.0.31' );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/vendor/js/fancybox.umd.js', array(), '4.0.31', true );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/vendor/css/swiper-bundle.min.css', array(), '10.3.1' );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/vendor/js/swiper-bundle.min.js', array(), '10.3.1', true );
	wp_enqueue_style( 'adem', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_script( 'adem', get_template_directory_uri() . '/assets/js/main.min.js', array(), _S_VERSION, true );
	wp_localize_script( 'adem', 'adem_ajax', array( 'url' => admin_url( 'admin-ajax.php' ) ) );
}

// disable scale images
add_filter( 'big_image_size_threshold', '__return_false' );

// remove prefix in archive title
add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

// excerpt
function adem_excerpt( $limit, $ID = null ) {
	return mb_substr( get_the_excerpt( $ID ), 0, $limit ) . '...';
}

// custom wordpress menu
add_filter( 'wp_nav_menu_objects', 'adem_wordpress_menu' );

function adem_wordpress_menu( $items ) {
	foreach ( $items as $item ) {

		if ( ! is_front_page() && ( strripos( $item->url, '#' ) !== false ) ) {
			$item->url = get_home_url() . '/' . $item->url;
		}
	}

	return $items;
}

// Yandex.Metrika counter
add_action('wp_footer', 'adem_yandex_metrika_counter');
function adem_yandex_metrika_counter() {
	?>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
			(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
				m[i].l=1*new Date();
				for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
				k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			ym(27274703, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true,
				webvisor:true
			});
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/27274703" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	<?php
}

require 'inc/acf.php';
require 'inc/load-more.php';
require 'inc/mail.php';
require 'inc/svg.php';
require 'inc/tiny-mce.php';
require 'inc/traffic.php';
