<?php
	$term_slugs_implode;
	$term_names_implode;
	$tags = wp_get_post_tags( $post->ID );
	if ( $tags ) {
		$term_slugs = array_map( function( $tag ) {
			return $tag->slug;
		}, $tags);
		$term_slugs_implode = implode(', ', $term_slugs);

		$term_names = array_map( function( $tag ) {
			return $tag->name;
		}, $tags);

		$term_names_implode = implode(', ', $term_names);
	}
?>
<li class="blog-card <?php echo $args['class'] ? $args['class'] : ''; ?>" data-tags="<?php echo $term_slugs_implode; ?>">
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

	<?php if ( $term_names_implode ) : ?>
		<div class="blog-card__tags"><?php echo $term_names_implode; ?></div>
	<?php endif; ?>
</li>
