<section class="faq">
	<div class="container">
		<?php if ( get_sub_field( 'title' ) ) : ?>
			<h2 class="title faq__title"><?php the_sub_field( 'title' ); ?></h2>
		<?php endif; ?>

		<?php
			$faq = get_sub_field( 'faq' );
			if ( $faq ) :
				?>

				<ul class="reset-list faq__list js-accordion">
					<?php foreach ( $faq as $item ) : ?>
						<li class="faq__item">
							<button class="faq__button" type="button">
								<?php echo $item['question']; ?>

								<svg width="40" height="40"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-top"></use></svg>
							</button>

							<div class="faq__text"><?php echo $item['answer']; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>

		<button class="btn faq__btn" type="button" data-fancybox data-src="#question">Задать вопрос</button>
	</div>
</section>
