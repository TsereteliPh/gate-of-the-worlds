<section id="training-pluses" class="training-pluses">
	<div class="container">
		<?php if ( get_sub_field( 'title' ) ) : ?>
			<h2 class="title training-pluses__title"><?php the_sub_field( 'title' ); ?></h2>
		<?php endif; ?>

		<?php
			$advantages = get_sub_field( 'advantages' );
			if ( $advantages ) :
				?>

				<div class="training-pluses__slider swiper">
					<ul class="reset-list training-pluses__list swiper-wrapper">
						<?php foreach( $advantages as $advantage ) : ?>
							<li class="training-pluses__item swiper-slide">
								<div class="training-pluses__item-icon">
									<?php
										if ( $advantage['icon'] ) {
											echo wp_get_attachment_image( $advantage['icon'], 'large', false );
										}
									?>
								</div>

								<div class="training-pluses__item-title"><?php echo $advantage['title']; ?></div>

								<div class="training-pluses__item-text"><?php echo $advantage['text']; ?></div>
							</li>
						<?php endforeach; ?>
					</ul>

					<div class="pagination training-pluses__pagination"></div>

				</div>

				<?php
			endif;
		?>
	</div>
</section>
