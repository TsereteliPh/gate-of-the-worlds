<?php
	$title = get_sub_field( 'title' );
	$text = get_sub_field( 'text' );
	$tabs = get_sub_field( 'courses' );
?>
<section class="course-tabs">
	<div class="container--large">
		<div class="course-tabs__text-holder">
			<?php if ( $title ) : ?>
				<h2 class="title course-tabs__title"><?php echo $title; ?></h2>
			<?php endif; ?>

			<?php if ( $text ) : ?>
				<div class="course-tabs__text"><?php echo $text; ?></div>
			<?php endif; ?>
		</div>

		<?php if ( $tabs ) : ?>
			<div class="course-tabs__tabs">
				<ul class="reset-list course-tabs__tabs-list js-tabs">
					<?php foreach ( $tabs as $key => $tab ) : ?>
						<li class="course-tabs__tabs-item<?php echo ( $key == 0 ) ? ' active' : ''; ?>" data-tab="course-tab-<?php echo $key + 1; ?>"><?php echo $tab['tab']; ?></li>
					<?php endforeach; ?>
				</ul>

				<div class="course-tabs__content">
					<?php foreach ( $tabs as $key => $tab ) : ?>
						<div class="course-tabs__courses swiper<?php echo ( $key == 0 ) ? ' active' : ''; ?>" id="course-tab-<?php echo $key + 1; ?>">
							<ul class="reset-list course-tabs__list swiper-wrapper">
								<?php foreach ( $tab['courses'] as $post ) : ?>
									<?php setup_postdata( $post ); ?>
										<li class="course-tabs__item swiper-slide">
											<?php
												if ( get_the_post_thumbnail() ) {
													the_post_thumbnail( 'large', array(
														'class' => 'course-tabs__item-img'
													) );
												} else {
													echo wp_get_attachment_image( 45, 'large', false, array(
														'class' => 'course-tabs__item-img'
													) );
												}
											?>

											<div class="course-tabs__item-content">
												<div class="course-tabs__item-title"><?php the_title(); ?></div>

												<?php if ( get_field( 'desc' ) ) : ?>
													<div class="course-tabs__item-text"><?php the_field( 'desc' ); ?></div>
												<?php endif; ?>

												<?php
													$extras = get_field( 'extras' );
													if ( $extras ) :
														?>

														<ul class="reset-list course-tabs__item-extras">
															<?php foreach ( $extras as $item ) : ?>
																<li class="course-tabs__item-extra"><?php echo $item['text']; ?></li>
															<?php endforeach; ?>
														</ul>

														<?php
													endif;
												?>

												<?php if ( get_field( 'link' ) ) : ?>
													<a href="<?php bloginfo( 'url' ) . the_field( 'link' ); ?>" class="btn course-tabs__item-link">О программе</a>
												<?php endif; ?>
											</div>
										</li>
									<?php wp_reset_postdata(); ?>
								<?php endforeach; ?>
							</ul>

							<div class="pagination course-tabs__pagination"></div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
