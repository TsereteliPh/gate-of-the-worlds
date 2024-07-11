<?php
	$welcome = get_field( 'welcome' );
	if ( $welcome ) :
		?>

		<section class="welcome">
			<div class="welcome__content">
				<div class="container welcome__container">
					<div class="welcome__holder">
						<?php if ( $welcome['title'] ) : ?>
							<h1 class="welcome__title"><?php echo $welcome['title']; ?></h1>
						<?php endif; ?>

						<?php if ( $welcome['text'] ) : ?>
							<div class="welcome__text"><?php echo $welcome['text']; ?></div>
						<?php endif; ?>

						<!-- <form method="POST" class="welcome__form" name="Подбор">
							<input type="tel" class="input welcome__input" name="client_tel" placeholder="Телефон" required>

							<input type="text" class="hidden" name="page_request" value="<?php //echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

							<?php //wp_nonce_field( 'Подбор', 'welcome_selection_nonce' ); ?>

							<button class="btn welcome__submit" type="submit">Подобрать обучение</button>
						</form> -->
					</div>

					<div class="welcome__person-wrapper">
						<div class="welcome__person">
							<span></span>

							<div class="welcome__person-img" aria-label="Фотография ведущего спикера центра развития - Ольги Веремеевой"></div>
						</div>

						<div class="welcome__person-name">Ольга Михайловна Веремеева</div>
					</div>
				</div>
			</div>

			<?php if ( $welcome['advantages'] ) : ?>
				<div class="container--large">
					<ul class="reset-list welcome__list">
						<?php foreach ( $welcome['advantages'] as $advantage ) : ?>
							<li class="welcome__item">
								<?php
									if ( $advantage['icon'] ) {
										echo wp_get_attachment_image( $advantage['icon'], 'medium', false, array(
											'class' => 'welcome__item-icon'
										) );
									}
								?>

								<div class="welcome__item-text"><?php echo $advantage['text']; ?></div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>
		</section>

		<?php
	endif;
?>
