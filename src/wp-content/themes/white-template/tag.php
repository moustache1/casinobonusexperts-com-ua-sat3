<?php get_header(); ?>


<div class="game-items-cat games-block container">

    <article id="sql-text" class="post-content clearfix">
    <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
    <h1><?php $cat_id = get_query_var('cat');
        $cat_data = get_option("category_$cat_id");
        if (!empty($cat_data['cat_h1'])) { echo $cat_data['cat_h1']; } ?></h1>
        <div class="for-h"></div>
        <?php 
        $term_description = term_description();
        if (!empty($term_description)) :
            printf('%s', $term_description);
        endif;?>
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