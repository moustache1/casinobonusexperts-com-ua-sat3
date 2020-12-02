<?php
/*
Template Name: Game Items Category
*/
?>

<?php get_header(); ?>
<?php 
        $args_pagi = array(
            'show_all'     => false, // показаны все страницы участвующие в пагинации
            'end_size'     => 1,     // количество страниц на концах
            'mid_size'     => 1,     // количество страниц вокруг текущей
            'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
            'prev_text'    => __(''),
            'next_text'    => __(''),
        );
        
        ?>
<div class="blog-block">
    <div class="container">
    <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>


        <div class="pagination-block">
        <h1><?php $cat_id = get_query_var('cat');
            $cat_data = get_option("category_$cat_id");
            if (!empty($cat_data['cat_h1'])) { echo $cat_data['cat_h1']; } ?></h1><?php 
            $term_description = term_description();
            if (!empty($term_description)) :
                printf('%s', $term_description);
            endif;?>

            <div class="pagination">
                <?php the_posts_pagination($args_pagi); ?>
            </div>
        </div>

        <div class="blog-wrapper">
        <?php 
        $posts = new WP_Query( array(
            // 'posts_per_page' => 2,
            'paged' => $paged,
            'cat' => $cat_id,
            'orderby' => 'date'
        ));
        // var_dump($posts);
        if ($posts) : while ($posts->have_posts()) : $posts->the_post(); ?>
        
        <?php  get_template_part('template_parts/blog-small-card');?>

    <?php endwhile; endif; ?>
        </div>

    <div class="pagination right">
        <?php 
        $args_pagi = array(
            'show_all'     => false, // показаны все страницы участвующие в пагинации
            'end_size'     => 1,     // количество страниц на концах
            'mid_size'     => 1,     // количество страниц вокруг текущей
            'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
            'prev_text'    => __(''),
            'next_text'    => __(''),
        );
        the_posts_pagination($args_pagi);
        ?>
    </div>
    
    </div>
</div>

<?php get_footer(); ?>