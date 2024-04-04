<section class="graduates">
	<?php
		$title = get_sub_field( 'title' );
		if ( $title ) :
			?>

			<h2 class="title title--highlighted graduates__title">
				<?php if ( $title['highlighted'] ) : ?>
					<span><?php echo $title['highlighted']; ?></span>
				<?php endif; ?>

				<?php echo $title['text']; ?>
			</h2>

			<?php
		endif;
	?>

	<div class="graduates__slider swiper">
		<ul class="reset-list graduates__list swiper-wrapper">
			<?php
				$query = new WP_Query( [
					'post_type' => 'graduates',
					'orderby' => 'post_date'
				] );
				$posts = $query->posts;

				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) :
						$query->the_post();
							?>

							<li class="graduates__item swiper-slide">
								<div class="graduates__item-content">
									<div class="graduates__item-title"><?php the_title(); ?></div>

									<?php
										$type = get_field( 'type' );
										if ( $type == 'tasks' ) :
											$lists = get_field( 'lists' );
											$tasks = $lists['tasks'];
											$solutions = $lists['solutions'];
											$results = $lists['results'];
											?>

											<?php if ( $tasks ) : ?>
												<div class="graduates__item-tasks">
													<div class="graduates__item-legend">Задачи</div>

													<ul class="reset-list graduates__item-list">
														<?php foreach ( $tasks as $task ) : ?>
															<li class="graduates__item-item"><?php echo $task['text']; ?></li>
														<?php endforeach; ?>
													</ul>
												</div>
											<?php endif; ?>

											<?php if ( $solutions ) : ?>
												<div class="graduates__item-solutions">
													<div class="graduates__item-legend">Решение</div>

													<ul class="reset-list graduates__item-list">
														<?php foreach ( $solutions as $solution ) : ?>
															<li class="graduates__item-item"><?php echo $solution['text']; ?></li>
														<?php endforeach; ?>
													</ul>
												</div>
											<?php endif; ?>

											<?php if ( $results ) : ?>
												<div class="graduates__item-results">
													<div class="graduates__item-legend">Результат</div>

													<ul class="reset-list graduates__item-list">
														<?php foreach ( $results as $result ) : ?>
															<li class="graduates__item-item"><?php echo $result['text']; ?></li>
														<?php endforeach; ?>
													</ul>
												</div>
											<?php endif; ?>

										<?php else : ?>
												<?php if ( get_field( 'story' ) ) : ?>
													<div class="graduates__item-story"><?php the_field( 'story' ); ?></div>
												<?php endif; ?>
											<?php
										endif;
									?>

									<button class="btn graduates__item-btn" type="button" data-fancybox data-src="#callback">Хочу так же!</button>
								</div>

								<div class="graduates__item-img">
									<?php
										if ( get_the_post_thumbnail() ) {
											the_post_thumbnail( 'large' );
										}
									?>
								</div>
							</li>

							<?php
						endwhile;
					wp_reset_postdata();
				endif;
			?>
		</ul>

		<div class="graduates__controls">
			<div class="btn-prev graduates__prev">
				<svg width="40" height="40"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-top"></use></svg>
			</div>

			<div class="btn-next graduates__next">
				<svg width="40" height="40"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-top"></use></svg>
			</div>
		</div>

		<div class="pagination graduates__pagination"></div>
	</div>
</section>
