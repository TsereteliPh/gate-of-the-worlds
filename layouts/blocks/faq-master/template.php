<section class="faq-master">
	<div class="container--large faq-master__container">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title ) {
				echo sprintf(
					'<%1$s class="title faq-master__title">%2$s</%1$s>',
					$title['type'],
					$title['text']
				);
			}
		?>

		<?php
			$img = get_sub_field( 'img' );
			if ( $img ) :
				?>

				<div class="faq-master__photo"><?php echo wp_get_attachment_image( $img, 'large', false ); ?></div>

				<?php
			endif;
		?>

		<button class="btn faq-master__modal" type="button" data-fancybox data-src="#question">Задать вопрос</button>

		<?php
			$faq = get_sub_field( 'faq' );
			if ( $faq ) :
				?>

				<ul class="reset-list faq-master__list js-accordion">
					<?php foreach ( $faq as $item ) : ?>
						<li class="faq-master__item">
							<button class="faq-master__button" type="button">
								<div class="faq-master__user">
									<div class="faq-master__user-name"><?php echo $item['name']; ?></div>

									<?php
										if ( $item['img'] ) {
											echo wp_get_attachment_image( $item['img'], 'medium', false, array(
												'class' => 'faq-master__user-photo'
											) );
										} else {
											echo '<svg class="faq-master__user-photo" width="100" height="100"><use xlink:href="' . get_template_directory_uri() . '/assets/images/sprite.svg#icon-no-photo"></use></svg>';
										}
									?>
								</div>

								<div class="faq-master__question"><?php echo $item['question']; ?></div>

								<svg class="faq-master__arrow" width="40" height="40"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-top"></use></svg>
							</button>

							<div class="faq-master__answer"><?php echo $item['answer']; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
