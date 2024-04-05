<section class="videos-slider">
	<div class="container--large">
		<?php if ( get_sub_field( 'title' ) ) : ?>
			<h2 class="title videos-slider__title"><?php the_sub_field( 'title' ); ?></h2>
		<?php endif; ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="videos-slider__text"><?php echo the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$videos = get_sub_field( 'videos' );
			if ( $videos ) :
				?>

				<div class="videos-slider__slider swiper">
					<div class="swiper-wrapper">
						<?php foreach ( $videos as $video ) : ?>
							<a href="<?php echo $video[$video['type']]; ?>" class="videos-slider__video swiper-slide" data-fancybox="videos-slider-<?php echo $args['block_id']; ?>">
								<?php echo wp_get_attachment_image( $video['preview'] ? $video['preview'] : 45, 'large', false ); ?>
							</a>
						<?php endforeach; ?>
					</div>

					<div class="pagination videos-slider__pagination"></div>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
