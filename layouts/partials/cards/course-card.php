<li class="course-card <?php echo $args['class'] ? $args['class'] : ''; ?>">
	<a <?php echo get_field( 'link' ) ? 'href="' . get_field( 'link' ) . '"' : ''; ?> class="course-card__link">
		<?php
			if ( get_the_post_thumbnail() ) {
				the_post_thumbnail( 'large', array(
					'class' => 'course-card__img'
				) );
			} else {
				echo wp_get_attachment_image( 45, 'large', false, array(
					'class' => 'course-card__img'
				) );
			}
		?>

		<div class="course-card__content">
			<?php if ( get_field( 'master') ) : ?>
				<div class="course-card__master"><?php the_field( 'master' ); ?></div>
			<?php endif; ?>

			<div class="course-card__title"><?php echo '&#171;' .  get_the_title() . '&#187;'; ?></div>
		</div>
	</a>
</li>
