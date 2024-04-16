<section class="faq-links">
	<div class="container faq-links__container">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title ) {
				echo sprintf(
					'<%1$s class="title faq-links__title">%2$s</%1$s>',
					$title['type'],
					$title['text']
				);
			}
		?>

		<?php
			$links = get_sub_field( 'links' );
			if ( $links ) :
				?>

				<ul class="reset-list faq-links__list">
					<?php foreach ( $links as $link ) : ?>
						<li class="faq-links__item">
							<div class="faq-links__item-photo">
								<?php echo wp_get_attachment_image( $link['img'] ? $link['img'] : 45, 'large', false ); ?>
							</div>

							<div class="faq-links__item-label"><?php echo $link['name']; ?></div>

							<?php if ( $link['link'] ) : ?>
								<a href="<?php echo $link['link']['url']; ?>" class="btn faq-links__item-link" target="<?php echo $link['link']['target']; ?>">Задать вопрос</a>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
