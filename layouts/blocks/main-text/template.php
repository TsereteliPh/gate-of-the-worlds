<section id="main-text" class="main-text">
	<div class="container">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title ) {
				echo sprintf('<%1$s class="main-text__title">%2$s</%1$s>',
					$title['type'],
					$title['text']
				);
			}
		?>

		<div class="main-text__text"><?php the_sub_field( 'text' ); ?></div>
	</div>
</section>
