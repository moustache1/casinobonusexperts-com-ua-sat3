<?php get_header(); ?>
    <div class="post container">

        <?php $front_id = get_option('page_on_front'); ?>
        <?php $gameinfo = get_field('game_info'); ?>
        <?php $iframe = get_field('iframe'); ?>
        <?php $horizontal_casino = get_field('horizontal_casino', $front_id); ?>

        <article class="single-post post-content">
            <h1><?php echo (get_post_meta($post->ID, "h1", true)) ?></h1>
            <?php if (have_posts()) : the_post() ?>
            <?php the_content();?>
            <?php endif; ?>
        </article>
   
        <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
        <div class="for-h"></div>

        <div class="post-wrapper">

            <div class="post-wrapper-left">
                <!--noindex-->

                <?php echo $iframe; ?>

                <div class="post-wrapper-left-btn">
                    <div class="btn-main" data-link="cG0tY2FzaW5v">Играть на деньги</div>
                </div>  
                <!--/noindex-->

                <div class="main-text"></div>
                <?php get_template_part( 'template_parts/content-scroll' ); ?>
            </div>

            <div class="post-wrapper-right">

            <?php  get_template_part('template_parts/game-items-4vertical');?> 
                
            </div>

            <?php get_template_part( 'template_parts/affiliate-horizontal-block', null, $horizontal_casino ); ?>

            <?php  get_template_part('template_parts/author-block');?>
        
        </div>
        
    </div>
        
<!-- Кнопка для редактирвоания поста -->
<div class="btn-top">
    <a href="#header"><img src="<?php bloginfo("template_url"); ?>/images/btn-top.svg" alt=""></a>
</div>

<?php get_footer(); ?>