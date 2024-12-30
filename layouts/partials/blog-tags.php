<?php
	$cat_link = get_category_link( 3 );
	$clean_cat_link = str_replace( '/category', '', $cat_link );
	$current_tag = $_GET['tag'];
	if ( $args['single'] ) $current_tag = true;
?>
<div class="blog-tags <?php echo $args['class']; ?>">
	<ul class="reset-list blog-tags__list<?php echo $args['single'] ? '' : ' js-tag-tabs'; ?>">
		<li class="blog-tags__item<?php echo ! $current_tag ? ' active' : ''; ?>" data-slug="all">
			<div class="blog-tags__title">Все</div>

			<?php if ( $args['single'] ) : ?>
				<a href="<?php echo $clean_cat_link; ?>" class="blog-tags__link"></a>
			<?php endif; ?>
		</li>

		<?php foreach ( $args['tags'] as $tag ) : ?>
			<li class="blog-tags__item<?php echo ( $tag->slug === $current_tag ) ? ' active' : ''; ?>" data-slug="<?php echo $tag->slug; ?>">
				<?php
					$img = get_term_meta( $tag->term_id, 'tag_img', true );
					if ( $img ) {
						echo wp_get_attachment_image( $img, 'medium', false, array( 'class' => 'blog-tags__img' ) );
					}
				?>

				<div class="blog-tags__title"><?php echo $tag->name; ?></div>

				<?php if ( $args['single'] ) : ?>
					<a href="<?php echo $clean_cat_link . '?tag=' . $tag->slug; ?>" class="blog-tags__link"></a>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
