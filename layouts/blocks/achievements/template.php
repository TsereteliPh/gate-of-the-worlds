
<section class="achievements">
	<div class="container achievements__container">
		<?php if ( get_sub_field( 'title' ) ) : ?>
			<h2 class="title title--line achievements__title"><?php the_sub_field( 'title' ); ?></h2>
		<?php endif; ?>

		<div class="achievements__text-holder">
			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="achievements__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>

			<?php if ( get_sub_field( 'extra_text' ) ) : ?>
				<div class="achievements__extra-text"><?php the_sub_field( 'extra_text' ); ?></div>
			<?php endif; ?>
		</div>

		<?php
			$achievements = get_sub_field( 'achievements' );
			if ( $achievements ) :
				?>

				<ul class="reset-list achievements__list">
					<?php foreach ( $achievements as $achievement ) : ?>
						<li class="achievements__item">
							<div class="achievements__number"><?php echo $achievement['number']; ?></div>

							<div class="achievements__desc"><?php echo $achievement['desc']; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
