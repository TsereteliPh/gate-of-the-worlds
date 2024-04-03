<section class="about">
	<div class="container">
		<?php if ( get_sub_field( 'title' ) ) : ?>
			<h2 class="title about__title"><?php the_sub_field( 'title' ); ?></h2>
		<?php endif; ?>

		<div class="about__holder">
			<?php
				$list = get_sub_field( 'list' );
				if ( $list ) :
					?>

					<?php if ( $list['title'] ) : ?>
						<div class="about__legend"><?php echo $list['title']; ?></div>
					<?php endif; ?>

					<ul class="st-ul about__list">
						<?php foreach ( $list['advantages'] as $item ) : ?>
							<li class="about__item"><?php echo $item['text']; ?></li>
						<?php endforeach; ?>
					</ul>

					<?php
				endif;
			?>

			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="about__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>

			<?php if ( get_sub_field( 'link' ) ) : ?>
				<a href="<?php echo bloginfo( 'url' ) . get_sub_field( 'link' ); ?>" class="btn about__link">Выбрать программу</a>
			<?php endif; ?>
		</div>
	</div>
</section>
