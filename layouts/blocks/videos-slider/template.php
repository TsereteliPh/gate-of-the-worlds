<section id="videos-slider" class="videos-slider">
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
								<?php
									$is_youtube = strripos( $video['link'], 'youtube' );
									if ( ( $video['type'] == 'link' ) && ( ! $video['preview'] ) && $is_youtube ) {
										echo '<img src="https://img.youtube.com/vi/' . substr( strrchr( $video['link'], '=' ), 1 ) . '/0.jpg" loading="lazy" alt="Превью YouTube видео" width="480" height="360">';
									} else {
										echo wp_get_attachment_image( $video['preview'] ? $video['preview'] : 45, 'large', false );
									}
								?>
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
