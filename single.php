<?php get_header(); ?>

<?php
	$tags = wp_get_post_tags( $post->ID );
	$term_names_implode;
	if ( $tags ) {
		$term_names = array_map( function( $tag ) {
			return $tag->name;
		}, $tags);

		$term_names_implode = implode(', ', $term_names);
	}
?>

<?php if ( in_category( 3 ) ) : ?>
	<section class="blog-post">
		<?php
			$tags = get_tags( [
				'taxonomy' => 'post_tag'
			] );

			if ( $tags ) :
				?>

				<div class="container--large">
					<?php get_template_part( '/layouts/partials/blog-tags', null, array(
						'class' => 'blog-post__tags',
						'tags' => $tags,
						'single' => true
					) ); ?>
				</div>

				<?php
			endif;
		?>

		<div class="container">
			<?php if ( $term_names_implode ) : ?>
				<div class="blog-post__small-tags"><?php echo $term_names_implode; ?></div>
			<?php endif; ?>

			<?php get_template_part( '/layouts/partials/title', null, array(
				'class' => 'blog-post__title',
				'title' => array(
					'type' => 'h1',
					'text' => get_the_title()
				)
			) ); ?>

			<?php
				$text = get_field( 'blog_text', get_the_ID() );
				if ( $text ) :
					?>

					<div class="blog-post__text"><?php echo $text; ?></div>

					<?php
				endif;
			?>
		</div>
	</section>
<?php endif; ?>

<?php get_template_part('layouts/partials/blocks'); ?>

<?php get_footer(); ?>
