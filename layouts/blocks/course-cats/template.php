<section id="course-cats" class="course-cats">
	<div class="container--large">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title ) :
				?>

				<h2 class="title title--highlighted course-cats__title">
					<?php if ( $title['highlighted'] ) : ?>
						<span><?php echo $title['highlighted']; ?></span>
					<?php endif; ?>

					<?php echo $title['text']; ?>
				</h2>

				<?php
			endif;
		?>

		<?php if ( get_sub_field( 'text' )  ) : ?>
			<div class="course-cats__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$cats = get_sub_field( 'categories' );
			if ( $cats ) :
				?>

				<ul class="reset-list course-cats__tabs js-tabs">
					<?php foreach ( $cats as $key => $cat ) : ?>
						<li class="course-cats__tab<?php echo ( $key == 0 ) ? ' active' : ''; ?>" data-tab="course-cat-<?php echo $key + 1; ?>"><?php echo $cat['category']; ?></li>
					<?php endforeach; ?>
				</ul>

				<div class="course-cats__holder">
					<?php foreach ( $cats as $key => $cat ) : ?>
						<div id="course-cat-<?php echo $key + 1; ?>" class="course-cats__cat swiper<?php echo ( $key == 0 ) ? ' active' : ''; ?>">
							<ul class="reset-list course-cats__list swiper-wrapper">
								<?php
									foreach ( $cat['courses'] as $post ) {
										setup_postdata( $post );

										get_template_part('layouts/partials/cards/course-card', null, array(
											'class' => 'course-cats__item swiper-slide'
										));

										wp_reset_postdata();
									}
								?>
							</ul>

							<div class="pagination course-cats__pagination"></div>

							<?php if ( $cat['link'] ) : ?>
								<a href="<?php echo bloginfo( 'url' ) . $cat['link']; ?>" class="btn course-cats__link">Перейти в каталог</a>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
