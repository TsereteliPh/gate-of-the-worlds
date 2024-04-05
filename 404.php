<?php get_header(); ?>

<section class="not-found">
	<div class="container not-found__container">
		<h1 class="title not-found__title">Ошибка 404. Страница не найдена</h1>

		<div class="not-found__text">
			Простите, но мы не можем найти страницу, которую вы ищете. Возможно, она отправилась на поиски истины глубже внутри себя.<br>
			Чтобы вернуться на главную страницу и продолжить своё духовное путешествие, просто кликните по ссылке ниже:
		</div>

		<a href="<?php echo bloginfo( 'url' ); ?>" class="btn not-found__link">Вернуться на главную</a>
	</div>
</section>

<?php get_footer(); ?>
