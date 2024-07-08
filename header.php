<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon" width="16" height="16">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
	$tel = get_field( 'tel', 'options' );
	$whatsApp = get_field( 'whatsapp_tel', 'options' );
	$socials = get_field( 'socials', 'options' );
?>
<header class="header<?php echo ( is_front_page() || is_page( 413 ) ) ? ' header--index' : ''; ?>">
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

		<a href="<?php echo 'https://vratamirov.com/teach/control'; ?>" class="header__profile">
			<svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-profile"></use></svg>
		</a>

		<?php if ( $whatsApp ) : ?>
			<a href="https://api.whatsapp.com/send?phone=<?php echo preg_replace( '/[^0-9]/', '', $whatsApp ); ?>" class="btn header__callback" target="_blank">Чат WhatsApp</a>
		<?php endif; ?>
	</div>
</header>

<main class="main<?php echo ( is_front_page() || is_page( 413 ) ) ? '' : ' main--indent'; ?>">
	<?php if ( is_front_page() ) get_template_part('layouts/partials/welcome'); ?>
