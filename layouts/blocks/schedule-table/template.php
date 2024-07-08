<section class="schedule-table">
	<div class="container">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title ) :
				?>

				<h2 class="title title--highlighted schedule-table__title">
					<?php if ( $title['highlighted'] ) : ?>
						<span><?php echo $title['highlighted']; ?></span>
					<?php endif; ?>

					<?php echo $title['text']; ?>
				</h2>

				<?php
			endif;
		?>

		<?php
			$schedule = get_sub_field( 'schedule' );
			if ( $schedule ) :
				?>

				<table class="schedule-table__table">
					<thead class="schedule-table__table-head">
						<tr>
							<th>Семинар</th>
							<th>Дата</th>
							<th>Мастер</th>
							<th>Форма</th>
							<th>Запись</th>
						</tr>
					</thead>

					<tbody class="schedule-table__table-body">
						<?php
							foreach ( $schedule as $item ) :
								$post = $item['class'];
								if ( $post ) :
									setup_postdata( $post );
										?>

										<tr>
											<td class="schedule-table__table-title-cell"><?php the_title(); ?></td>
											<td><?php echo $item['date']; ?></td>
											<td><?php the_field( 'master' ); ?></td>
											<td><?php echo $item['type']; ?></td>
											<td class="schedule-table__table-link-cell">
												<a href="<?php echo bloginfo( 'url' ) . get_field( 'link' ); ?>" class="btn schedule-table__table-link">Записаться</a>
											</td>
										</tr>

										<?php
									wp_reset_postdata();
								endif;
							endforeach;
						?>
					</tbody>
				</table>

				<?php
			endif;
		?>
	</div>
</section>
