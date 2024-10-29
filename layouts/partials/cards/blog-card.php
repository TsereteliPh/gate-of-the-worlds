<li class="blog-card <?php echo $args['class'] ? $args['class'] : ''; ?>">
	<div class="blog-card__img">
		<?php
			if ( get_the_post_thumbnail() ) {
				the_post_thumbnail( 'large');
			} else {
				echo wp_get_attachment_image( 45, 'large', false );
			}
		?>
	</div>

	<a href="<?php the_permalink(); ?>" class="blog-card__link"><?php the_title(); ?></a>
</li>
