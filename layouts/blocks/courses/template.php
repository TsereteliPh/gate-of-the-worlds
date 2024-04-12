<section id="courses" class="courses">
	<div class="container--large">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title ) {
				echo sprintf('<%1$s class="courses__title">%2$s</%1$s>',
					$title['type'],
					$title['text']
				);
			}
		?>

		<ul class="reset-list courses__list js-show-more-container">
            <?php
                $query = new WP_Query([
                    'post_type' => 'courses',
                    'orderby' => 'post_date',
                    'posts_per_page' => 6,
                    'paged' => 1
                ]);
				$posts = $query->posts;

				if ( $query->have_posts() ) {
					if ( is_archive() ) {
						foreach ($posts as $post) {

							get_template_part('layouts/partials/cards/course-card', null, array(
								'class' => 'courses__item'
							));
						}
					} else {
						while ( $query->have_posts() ) {
							$query->the_post();

							get_template_part('layouts/partials/cards/course-card', null, array(
								'class' => 'courses__item'
							));
						}

						wp_reset_postdata();
					}
				}
            ?>
        </ul>

		<?php if ( $query->max_num_pages > 1) : ?>
			<button class="btn courses__button js-show-more" type="button">Показать еще</button>

			<script>
				let posts = '<?php echo json_encode($query->query_vars); ?>';
				let current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
				let max_pages = <?php echo $query->max_num_pages; ?>;
			</script>
		<?php endif; ?>
	</div>
</section>
