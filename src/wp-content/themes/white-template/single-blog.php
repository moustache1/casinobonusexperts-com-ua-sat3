<?php get_header(); ?>


<?php $front_id = get_option('page_on_front'); ?>
<?php $games_horizontal = get_field('games_horizontal', $front_id); ?>

<article class="blog-post post-content">
<?php $date_check = get_the_date('F j, Y'); ?>
<?php if (have_posts()) : the_post() ?>
<h1><?php echo (get_post_meta($post->ID, "h1", true))?></h1>
<div class="blog-block-about">
    <div class="blog-block-date">
        <?php echo $date_check; ?>
    </div>
    <div class="blog-block-dot">
        • by
    </div>
    <div class="blog-block-author">
        <?php the_author_posts_link(); ?>
    </div>
</div>
<?php the_content();?>
<?php get_template_part( 'template_parts/content-scroll' ); ?>
<?php endif; ?>
</article>
    <div class="blog-post container">
    <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>

        
    <?php get_template_part( 'template_parts/blog-post-slider' ); ?>

        <div class="blog-post-block">
            <div class="blog-block-left">
                <div class="main-text"></div>
            </div>
            <div class="blog-block-right">
            <?php 
            $posts = get_posts( array(
                'numberposts' => 4,
                'category'    => 9,
                // 'category'    => 21,
                'orderby'     => 'rand',
                'order'       => 'DESC',
              ));
            if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>

            <?php get_template_part( 'template_parts/blog-small-card' ); ?>

            <?php endforeach; endif; ?>
            </div>
        </div>
        
        <?php get_template_part( 'template_parts/author-block' ); ?>

        <?php get_template_part( 'template_parts/games-horizontal-block', null, $games_horizontal ); ?>

        
    </div>
<!-- Кнопка для редактирвоания поста -->
<?php edit_post_link(__('Edit This')); ?>
<?php get_footer(); ?>