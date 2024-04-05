<section id="course-info" class="course-info">
	<div class="container--small course-info__container">
		<?php if ( get_sub_field( 'title' ) ) : ?>
			<h2 class="title title--line course-info__title"><?php the_sub_field( 'title' ); ?></h2>
		<?php endif; ?>

		<div class="course-info__box">
			<div class="course-info__content">
				<?php if ( get_sub_field( 'text' ) ) : ?>
					<div class="course-info__text"><?php the_sub_field( 'text' ); ?></div>
				<?php endif; ?>

				<?php
					$advantages = get_sub_field( 'list' );
					if ( $advantages ) :
						?>

						<div class="course-info__advantages">
							<?php if ( $advantages['title'] ) : ?>
								<div class="course-info__advantages-label"><?php echo $advantages['title']; ?></div>
							<?php endif; ?>

							<?php if ( $advantages['advantages'] ) : ?>
								<ul class="st-ul course-info__advantages-list">
									<?php foreach ( $advantages['advantages'] as $item ) : ?>
										<li class="course-info__advantages-item"><?php echo $item['text']; ?></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>

						<?php
					endif;
				?>
			</div>

			<div class="course-info__extra-holder">
				<?php if ( get_sub_field( 'extra_text' ) ) : ?>
					<div class="course-info__extra-text"><?php the_sub_field( 'extra_text' ); ?></div>
				<?php endif; ?>

				<?php if ( get_sub_field( 'link' ) ) : ?>
					<a href="<?php echo bloginfo( 'url' ) . get_sub_field( 'link' ); ?>" class="btn course-info__link">Получить доступ</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
