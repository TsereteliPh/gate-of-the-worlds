<section class="course-form">
	<div class="container--small">
		<?php if ( get_sub_field( 'title' ) ) : ?>
			<h2 class="title title--line course-form__title"><?php the_sub_field( 'title' ); ?></h2>
		<?php endif; ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="course-form__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<form method="POST" class="course-form__form" name="Курс">
			<input type="text" class="input course-form__input" name="client_name" placeholder="Ваше ФИО" required>

			<input type="email" class="input course-form__input" name="client_email" placeholder="E-mail">

			<input type="tel" class="input course-form__input" name="client_tel" placeholder="+7 ( ____ ) - ___ - __ - __" required>

			<input type="text" class="hidden" name="page_request" value="<?php echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

			<?php wp_nonce_field( 'Курс', 'course_form_nonce' ); ?>

			<button class="btn course-form__submit" type="submit">Выбрать курс</button>

			<label class="checkbox course-form__form-policy">
				<input class="checkbox__input" type="checkbox" checked required>
				<span class="checkbox__switcher"></span>
				<span class="checkbox__text">Даю согласие на обработку моих персональных данных в соответствии с <a href="<?php echo get_privacy_policy_url(); ?>">Политикой Конфиденциальности</a></span>
			</label>
		</form>
	</div>
</section>
