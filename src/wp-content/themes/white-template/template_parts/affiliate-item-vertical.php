<div class="affiliate__vertical">
<?php $casinoparameter = get_field('casino_parameter'); ?>
    <div class="affiliate__vertical-img">
        <img src="<?php echo $casinoparameter['casino_parameter_image']['url'] ?>" alt="<?php echo $casinoparameter['casino_parameter_image_alt']; ?>">
    </div>
    <div class="affiliate__vertical-rating">
        <div class="affiliate__vertical-stars">
        <?php $average = ci_comment_rating_get_average_ratings( $post->ID); $stars = '';?>
            <?php
                if ( $average ) {
                    for ( $i = 1; $i <= $average + 1; $i++ ) {
                        $width = intval( $i - $average > 0 ? 20 - ( ( $i - $average ) * 20 ) : 20 );
                        if ( 0 === $width ) {
                            continue;
                        }
                            $stars .= '<span class="dashicons dashicons-star-filled dashicons-style" style="overflow:hidden; width:' . $width . 'px" class="dashicons dashicons-star-filled dashicons-style"></span>';
                        if ( $i - $average > 0 ) {
                            $stars .= '<span style="overflow:hidden; position:relative; left:-' . $width .'px;" class="dashicons dashicons-star-empty dashicons-style"></span>';
                        } 
                    }
                    echo $stars;
                } else {
                    echo 'No Review';
                }
            ?> 
        </div>
        <div class="affiliate__vertical-mark">
            <?php if ($average) {
                echo $average;
            } else {
                echo '';
            } ?>
        </div>
    </div>
    <div class="affiliate__vertical-title">
        <span><?php echo $casinoparameter['casino_parameter_name']; ?></span>
    </div>
    <div class="affiliate__vertical-price">
        <span><?php echo $casinoparameter['casino_parameter_prize']; ?></span>
    </div>
    <div class="affiliate__vertical-descr">
        <span><?php echo $casinoparameter['casino_parameter_description']; ?></span>
    </div>
    <a class="btn-main" href="<?php echo $casinoparameter['affiliate_link']; ?>">
        Играть сейчас
    </a>
    <div class="affiliate__vertical-read">
        <a href="<?php the_permalink(); ?>">Читать обзор ></a>
    </div>
</div>
