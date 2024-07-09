<section id="schedule" class="schedule">
	<div class="container--large">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title ) :
				?>

				<h2 class="title title--highlighted schedule__title">
					<?php if ( $title['highlighted'] ) : ?>
						<span><?php echo $title['highlighted']; ?></span>
					<?php endif; ?>

					<?php echo $title['text']; ?>
				</h2>

				<?php
			endif;
		?>

		<?php
			$schedule = get_sub_field( 'schedule' );
			if ( $schedule ) :
				?>

				<div class="schedule__slider swiper">
					<ul class="reset-list schedule__list swiper-wrapper">
						<?php
							foreach ( $schedule as $item ) :
								$post = $item['class'];
								if ( $post ) :
									setup_postdata( $post );
										?>

										<li class="schedule__item swiper-slide">
											<div class="schedule__item-box">
												<?php
													if ( get_the_post_thumbnail() ) {
														the_post_thumbnail( 'large', array(
															'class' => 'schedule__item-img'
														) );
													} else {
														echo wp_get_attachment_image( 45, 'large', false, array(
															'class' => 'schedule__item-img'
														) );
													}
												?>

												<div class="schedule__item-title"><?php the_title(); ?></div>
											</div>

											<div class="schedule__item-holder">
												<ul class="reset-list schedule__item-list">
													<?php if ( $item['date'] ) : ?>
														<li class="schedule__item-info">
															<div class="schedule__item-label">Дата</div>

															<div class="schedule__item-content"><?php echo $item['date']; ?></div>
														</li>
													<?php endif; ?>

													<?php if ( get_field( 'master' ) ) : ?>
														<li class="schedule__item-info">
															<div class="schedule__item-label">Мастер</div>

															<div class="schedule__item-content"><?php the_field( 'master' ); ?></div>
														</li>
													<?php endif; ?>

													<?php if ( $item['type'] ) : ?>
														<li class="schedule__item-info">
															<div class="schedule__item-label">Формат</div>

															<div class="schedule__item-content"><?php echo $item['type']; ?></div>
														</li>
													<?php endif; ?>

													<?php if ( $item['price'] ) : ?>
														<li class="schedule__item-info">
															<div class="schedule__item-label">Стоимость участия</div>

															<div class="schedule__item-content schedule__item-content--price">
																<?php
																	if ( ! $item['price']['promo'] ) {
																		echo $item['price']['full'] ? $item['price']['full'] : $item['price']['promo'];
																	} else {
																		echo '<span>' . $item['price']['full'] . '</span>';
																		echo $item['price']['promo'];
																	};
																?>
															</div>
														</li>
													<?php endif; ?>
												</ul>

												<?php if ( get_field( 'link' ) ) : ?>
													<a href="<?php bloginfo( 'url' ) . the_field( 'link' ); ?>" class="btn schedule__item-link">Зарегистрироваться</a>
												<?php endif; ?>
											</div>
										</li>

										<?php
									wp_reset_postdata();
								endif;
							endforeach;
						?>
					</ul>

					<div class="pagination schedule__pagination"></div>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
