<?php
/*
Template Name: Casino Review Post
*/
?>

<?php get_header(); ?>
    <div class="casino-review-post container">
    <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
        <div class="casino-review-top-block">  
            <div class="casino-review-left">
                <div class="casino-review-rating">
                    <div class="casino-review-stars">
                        <?php $average = ci_comment_rating_get_average_ratings( $post->ID); $stars = '';?>
                        <?php
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
                        ?> 
                    </div>
                    <div class="casino-review-mark">
                        
                        <?php if ($average) {
                            echo $average;
                        } else {
                            echo 'No reviews';
                        } ?>
                    </div>
                </div>
                <div class="casino-review-img">
                <?php $casinoparameter = get_field('casino_parameter'); ?>
                    <img src="<?php echo $casinoparameter['casino_parameter_image']['url'] ?>" alt="<?php echo $casinoparameter['casino_parameter_image_alt']; ?>">
                </div>
                <div class="casino-review-btn">
                    <div class="btn-main"><a href="<?php echo $casinoparameter['affiliate_link']; ?>">Играть сейчас</a></div>
                </div>
            </div>
            <div class="casino-review-right">
                <div class="casino-review-title for-h"></div>
                <div class="casino-review-text">
                    <?php the_field('top_page_text') ?>
                </div>
            </div>
        </div>
   
    <article class="casino-review-single-post post-content">
        <h1><?php echo (get_post_meta($post->ID, "h1", true))?></h1>
        <?php if (have_posts()) : the_post() ?>
        <?php the_content();?>
        <?php endif; ?>
        <?php  get_template_part('template_parts/content-scroll');?>
    </article>
    
    <?php get_template_part('template_parts/author-block');?>

 <div class="comments">
    <?php 
    $req = null;
    $commenter = null;
    $aria_req = null;
    $html5 = null;
    $html_req = null;
    ?> 
    <?php if (comments_open()) { ?>
        <?php have_posts(); ?>
            <?php if (get_comments_number() != 0) { ?>
                <?php while (have_posts()) : the_post(); ?>
            <?php comments_template(); ?> 
            <?php

                function my_comment($comment, $args, $depth){
                $GLOBALS['comment'] = $comment; ?>
                <li class="comment comment-li" id="li-comment-<?php comment_ID() ?>">
                    <div id="comment-<?php comment_ID(); ?>">
                    <div class="comment-author vcard">
                        <?php printf(__('<span class="author">%s</span>'), get_comment_author_link()) ?>
                    </div>
                    
                    
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em><?php _e('Ваш комментарий ожидает модерацию.') ?></em>
                        <br>
                    <?php endif; ?>
                    <div class="comment-text"><?php comment_text() ?></div>
                    <div class="comment-meta commentmetadata">
                        <span><?php echo(get_comment_date($c = 'd.m.Y'))  ?></span>
                    </div>
                    </div>

            <?php }
                $args = array(
                'reply_text' => 'Ответить',
                'callback' => 'my_comment'
                );
                wp_list_comments($args);
            ?>
            
            <?php endwhile; ?>
        <?php } ?>
               
        
        <?php } else { ?>
        <h3>Обсуждения закрыты для данной страницы</h3>
        <?php }
    ?>

</div>  
    <div class="comment-form-wrapper">
        <?php
        $fields = array(
            'author' => '<p class="comment-form-author"><label for="author">' . __( 'Name' ) . ($req ? '<span class="required">*</span>' : '') . '</label><input type="text" id="author" name="author" class="author" value="' . esc_attr($commenter['comment_author']) . '" placeholder="Ваше имя"  autocomplete="on" tabindex="1" required' . $aria_req . '></p>',
            'email'  => '<p class="comment-form-email">
            <label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> 
            <input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="Ваш e-mail" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />
            </p>'
        );
        $args = array(
            'comment_notes_after' => '',
            'label_submit' => 'Опубликовать отзыв',
            'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" class="comment-form" aria-required="true" placeholder="Ваш комментарий"></textarea></p>',
            'fields' => apply_filters('comment_form_default_fields', $fields)
        );

        comment_form($args);
        ?>
    </div> 
    <?php get_template_part( 'template_parts/blog-post-slider' ); ?>

    <div class="casino-review-reviews">
        <div class="casino-review-reviews-title">
            Отзывы о казино:
        </div>
       
        <div class="for-comments"></div>  
  
    </div>
</div>

<div class="btn-top">
    <a href="#header"><img src="<?php bloginfo("template_url"); ?>/images/btn-top.svg" alt=""></a>
</div>

<?php get_footer(); ?>