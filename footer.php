</main>

<?php
	$tel = get_field( 'tel', 'options' );
	$whatsApp = get_field( 'whatsapp_tel', 'options' );
	$text = get_field( 'footer_text', 'options' );
	$socials = get_field( 'socials', 'options' );
?>
<footer class="footer">
	<!-- <div class="container--small footer__form-container">
		<div class="footer__label">
			Остался всего 1 шаг<br>
			к впечатляющим изменениям<br>
			в вашей жизни
		</div>

		<div class="footer__small-label">Обратитесь к специалисту за помощью в подборе программы</div>

		<form method="POST" class="footer__form" name="Консультация">
			<input type="text" class="input footer__input" name="client_name" placeholder="Ваше ФИО" required>

			<input type="email" class="input footer__input" name="client_email" placeholder="E-mail" required>

			<input type="tel" class="input footer__input" name="client_tel" placeholder="+7 ( ____ ) - ___ - __ - __" required>

			<label class="checkbox footer__form-policy">
				<input class="checkbox__input" type="checkbox" checked required>
				<span class="checkbox__switcher"></span>
				<span class="checkbox__text">Даю согласие на обработку моих персональных данных в соответствии с <a href="<?php //echo get_privacy_policy_url(); ?>">Политикой Конфиденциальности</a></span>
			</label>

			<input type="text" class="hidden" name="page_request" value="<?php //echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

			<?php //wp_nonce_field( 'Консультация', 'footer_advice_nonce' ); ?>

			<button class="btn footer__submit" type="submit">Получить консультацию</button>
		</form>
	</div> -->

	<div class="footer__info">
		<div class="container--large footer__container">
			<a href="<?php echo bloginfo( 'url' ); ?>" class="footer__logo" aria-label="Логотип компании Врата Миров"></a>

			<?php if ( $text ) : ?>
				<div class="footer__text"><?php echo $text; ?></div>
			<?php endif; ?>

			<?php if ( $socials ) : ?>
				<div class="socials footer__socials">
					<?php foreach ( $socials as $social ) : ?>
						<a href="<?php echo $social['link']; ?>" class="socials__link" target="_blank">
							<svg width="13" height="13"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-<?php echo $social['type']; ?>"></use></svg>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<?php if ( $tel ) : ?>
				<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>" class="footer__phone"><?php echo $tel; ?></a>
			<?php endif; ?>

			<?php if ( $whatsApp ) : ?>
			<a href="https://api.whatsapp.com/send?phone=<?php echo preg_replace( '/[^0-9]/', '', $whatsApp ); ?>" class="btn footer__callback" target="_blank">Чат WhatsApp</a>
		<?php endif; ?>

			<a href="<?php echo get_privacy_policy_url(); ?>" class="footer__policy">Политика конфиденциальности</a>
		</div>
	</div>
</footer>

<?php get_template_part('layouts/partials/modals'); ?>

<?php wp_footer(); ?>

</body>
</html>
