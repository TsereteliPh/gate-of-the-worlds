<?php
	$tel = get_field( 'tel', 'options' );
	$messengers = get_field( 'messengers', 'options' );
?>
<div id="success" class="modal modal--success">
	<div class="modal__label">
		<span>Спасибо!</span>
		Ваша заявка отправлена!
	</div>

	<div class="modal__text">Сделайте стремительный шаг в новую жизнь под руководством наставников</div>

	<?php if ( $tel ) : ?>
		<div class="modal__phone">
			<span>Долго ждать?</span>

			Наберите нас прямо сейчас

			<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>"><?php echo $tel; ?></a>
		</div>
	<?php endif; ?>

	<?php if ( $messengers ) : ?>
		<div class="modal__messengers">
			<span>Или добавляйтесь в мессенджер</span>

			<?php foreach ( $messengers as $item ) : ?>
				<a href="<?php echo $item['link']; ?>" class="modal__messengers-item" target="_blank">
					<svg width="40" height="40"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-<?php echo $item['type']; ?>"></use></svg>
				</a>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<button class="modal__close" type="button">
		Закрыть
		<span></span>
	</button>
</div>

<div id="callback" class="modal modal--callback">
	<div class="modal__label">
		Ждем вас в центре развития человека
		<span>«Врата Миров»</span>
	</div>

	<div class="modal__text">Сделайте стремительный шаг в новую жизнь под руководствомнаставников</div>

	<form method="POST" class="modal__form" name="Заявка">
		<input type="text" class="input modal__input" name="client_name" placeholder="Ваше ФИО" required>

		<input type="email" class="input modal__input" name="client_email" placeholder="E-mail" required>

		<input type="tel" class="input modal__input" name="client_tel" placeholder="+7 ( ____ ) - ___ - __ - __" required>

		<label class="checkbox modal__form-policy">
			<input class="checkbox__input" type="checkbox" checked required>
			<span class="checkbox__switcher"></span>
			<span class="checkbox__text">Даю согласие на обработку моих персональных данных в соответствии с <a href="<?php echo get_privacy_policy_url(); ?>">Политикой Конфиденциальности</a></span>
		</label>

		<input type="text" class="hidden" name="page_request" value="<?php echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

		<?php wp_nonce_field( 'Заявка', 'modal_callback_nonce' ); ?>

		<button class="btn modal__submit" type="submit">Оставить заявку</button>
	</form>

	<button class="modal__close" type="button">
		Закрыть
		<span></span>
	</button>
</div>
