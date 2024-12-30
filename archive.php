<?php get_header(); ?>

<?php if ( in_category( 3 ) ) : ?>
	<section class="blog">
		<div class="container--large blog__container">
			<h1 class="title title--highlighted blog__title">
				<span>СТАТЬИ О</span>

				МАГИИ, ЭЗОТЕРИКИ, САМОРАЗВИТИИ
			</h1>

			<?php
				$tags = get_tags( [
					'taxonomy' => 'post_tag'
				] );

				if ( $tags ) {
					get_template_part( '/layouts/partials/blog-tags', null, array(
						'class' => 'blog__tags',
						'tags' => $tags,
						'single' => false
					) );
				}
			?>

			<ul class="reset-list blog__list">
				<?php
					$query = new WP_Query( [
						'post_type' => 'post',
						'cat' => 3,
						'posts_per_page' => -1
					] );

					$posts = $query->posts;

					if ( $query->have_posts() ) {
						if ( is_archive() ) {
							foreach ( $posts as $post ) {
								get_template_part('/layouts/partials/cards/blog-card', null, array(
									'class' => 'blog__item',
								) );
							}
						} else {
							while ( $query->have_posts() ) {
								$query->the_post();

								get_template_part('/layouts/partials/cards/blog-card', null, array(
									'class' => 'blog__item',
								) );
							}

							wp_reset_postdata();
						}
					}
				?>
			</ul>
		</div>
	</section>
<?php endif; ?>

<?php
	$term = get_queried_object();
	get_template_part( 'layouts/partials/blocks', null, array(
		'id' => 'category_' . $term->cat_ID
	) );
?>

<?php get_footer(); ?>
