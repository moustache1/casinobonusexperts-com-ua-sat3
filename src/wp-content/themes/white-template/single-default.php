<?php get_header(); ?>


<div class="game-items-cat games-block container">

    <article class="single-post post-content">
            <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
            <h1><?php echo (get_post_meta($post->ID, "h1", true)) ?></h1>
            <div class="for-h"></div>
            <?php if (have_posts()) : the_post() ?>
            <?php the_content();?>
            <?php endif; ?>
        </article>
        
    <div class="games-block">
            <div class="games-wrapper">

            <?php 
                $posts = new WP_Query( array(
                    'posts_per_page' => 12,
                    'cat' => '5',
                    'orderby' => 'date'
                ));
                
                if ($posts) : while ($posts->have_posts()) : $posts->the_post(); ?>

                <?php  get_template_part('template_parts/game-items');?>
        
                <?php endwhile; endif; ?>
    </div>
        
            <div class="btn-primary"><span>Показать больше игр</span></div>
    </div>


</div>

<?php get_footer(); ?>