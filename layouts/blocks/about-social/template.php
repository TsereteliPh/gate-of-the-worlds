<section id="about-social" class="about-social">
	<div class="container--small">
		<?php if ( get_sub_field( 'title' ) ) : ?>
			<h2 class="title title--line about-social__title"><?php the_sub_field( 'title' ); ?></h2>
		<?php endif; ?>

		<div class="about-social__content">
			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="about-social__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>

			<?php
				$callout = get_sub_field( 'callout' );
				if ( $callout ) :
					?>

					<div class="st-callout about-social__callout">
						<?php
							if ( $callout['icon'] ) {
								echo wp_get_attachment_image( $callout['icon'], 'medium', false, array(
									'class' => 'st-callout__icon'
								) );
							}
						?>

						<div class="st-callout__text"><?php echo $callout['text']; ?></div>
					</div>

					<?php
				endif;
			?>

			<?php if ( get_sub_field( 'extra_text' )) : ?>
				<div class="about-social__extra-text"><?php the_sub_field( 'extra_text' ); ?></div>
			<?php endif; ?>

			<?php
				$link = get_sub_field( 'link' );
				if ( $link ) :
					?>

					<a href="<?php echo $link['url']; ?>" class="btn about-social__link" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>

					<?php
				endif;
			?>
		</div>
	</div>
</section>
