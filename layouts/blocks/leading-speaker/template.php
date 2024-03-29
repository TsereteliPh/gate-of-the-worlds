<?php
    $title = get_sub_field( 'title' );
    $text = get_sub_field( 'text' );
    $callout = get_sub_field( 'callout' );
    $extra_text = get_sub_field( 'extra_text' );
    $videos = get_sub_field( 'video' );
?>
<section class="leading-speaker">
    <div class="container--small">
        <div class="leading-speaker__content">
            <?php if ( $title ) : ?>
				<div class="leading-speaker__title">
					<h2 class="leading-speaker__title-text"><?php echo $title['full_name']; ?></h2>

					<div class="leading-speaker__title-job"><?php echo $title['job']; ?></div>
				</div>
            <?php endif; ?>

            <?php if ( $text ) : ?>
                <div class="leading-speaker__text"><?php echo $text; ?></div>
            <?php endif; ?>

            <?php if ( $callout ) : ?>
                <div class="st-callout leading-speaker__callout">
                    <?php
                        if ( $callout['icon'] ) {
                            echo wp_get_attachment_image( $callout['icon'], 'medium', false, array(
                                'class' => 'st-callout__icon'
                            ) );
                        }
                    ?>

                    <div class="st-callout__text"><?php echo $callout['text']; ?></div>
                </div>
            <?php endif; ?>

            <?php if ( $extra_text ) : ?>
                <div class="leading-speaker__extra-text"><?php echo $extra_text; ?></div>
            <?php endif; ?>

            <?php if ( $videos ) : ?>
                <div class="leading-speaker__videos swiper">
                    <div class="leading-speaker__videos-wrapper swiper-wrapper">
                        <?php foreach ( $videos as $video ) : ?>
                            <a href="<?php echo $video[$video['type']]; ?>" class="leading-speaker__link swiper-slide" data-fancybox="speaker-video-gallery-<?php echo $args['block_id']; ?>">
								<?php echo wp_get_attachment_image( $video['preview'] ? $video['preview'] : 45, 'medium', false ); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
