<section class="masters-slider">
	<div class="container--large">
		<?php if ( get_sub_field( 'title' ) ) : ?>
			<h2 class="title masters-slider__title"><?php the_sub_field( 'title' ); ?></h2>
		<?php endif; ?>

		<div class="masters-slider__slider swiper">
			<ul class="reset-list masters-slider__list swiper-wrapper">
				<?php
					$query = new WP_Query( [
						'post_type' => 'masters',
						'orderby' => 'post_date'
					] );
					$posts = $query->posts;

					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) :
							$query->the_post();
								?>

								<li class="masters-slider__item swiper-slide">
									<div class="masters-slider__item-img">
										<?php
											if ( get_the_post_thumbnail() ) {
												the_post_thumbnail( 'large' );
											} else {
												echo wp_get_attachment_image( 45, 'large', false );
											}
										?>
									</div>

									<div class="masters-slider__item-info">
										<div class="masters-slider__item-name"><?php the_title(); ?></div>

										<div class="masters-slider__text"><?php the_field( 'text' ); ?></div>
									</div>
								</li>

								<?php
							endwhile;
						wp_reset_postdata();
					endif;
				?>
			</ul>

			<div class="pagination masters-slider__pagination"></div>
		</div>
	</div>
</section>
