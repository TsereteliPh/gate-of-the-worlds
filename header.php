<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
	$tel = get_field( 'tel', 'options' );
	$socials = get_field( 'socials', 'options' );
?>
<header class="header">
	<div class="container--large header__container">
		<button class="header__burger" type="button" aria-label="Открыть/Закрыть меню">
			<span></span>
		</button>

		<a href="<?php echo bloginfo( 'url' ); ?>" class="header__logo" aria-label="Логотип компании Врата Миров"></a>

		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu_main',
				'container' => '',
				'menu_id' => 'menu-main',
				'menu_class' => 'reset-list header__menu'
			) );
		?>

		<?php if ( $tel ) : ?>
			<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>" class="header__phone">
				<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-phone"></use></svg>
				<?php echo $tel; ?>
			</a>
		<?php endif; ?>

		<?php if ( $socials ) : ?>
			<div class="socials header__socials">
				<?php foreach ( $socials as $social ) : ?>
					<a href="<?php echo $social['link']; ?>" class="socials__link" target="_blank">
						<svg width="13" height="13"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-<?php echo $social['type']; ?>"></use></svg>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<button class="btn header__callback" type="button" data-fancybox data-src="#callback">Заказать звонок</button>
	</div>
</header>

<main class="main">
	<?php if ( is_front_page() ) get_template_part('layouts/partials/welcome'); ?>
