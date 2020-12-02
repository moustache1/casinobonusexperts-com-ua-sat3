<?php
/*
Template Name: Casino Review Category
*/
?>

<?php get_header(); ?>
<?php 
$front_id = get_option('page_on_front');
$horizontal_casino = get_field('horizontal_casino', $front_id);
$category = get_the_category();
    $category_name = $category[0] -> name;
    $category_slug = $category[0] -> slug;
    $category_id = $category[0] -> cat_ID;
?>


<div class="casino-review container">
    <?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
    <div class="affiliate-horizontal-block">
        <h1><?php $cat_id = get_query_var('cat');
            $cat_data = get_option("category_$cat_id");
            if (!empty($cat_data['cat_h1'])) { echo $cat_data['cat_h1']; } ?></h1>
            <div class="for-h"></div>
            <?php 
            $term_description = term_description();
            if (!empty($term_description)) :
                printf('%s', $term_description);
            endif;?>
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1 ,
                    'category' => $category_id,
                    'orderby'     => 'rand',
                    'order'       => 'DESC',
                ));
                if ($posts) : foreach ($posts as $key => $post) : setup_postdata($post); ?>

                <?php get_template_part( 'template_parts/affiliate-item-horizontal', null, $key ); ?>
            
                <?php wp_reset_postdata(); ?>
                <?php endforeach; endif; ?>
    </div>

    <div class="affiliate-horizontal-block-mob">
        <div class="affiliate-horizontal-block-mob-item">
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1 ,
                    'category' => $category_id,
                    'orderby'     => 'rand',
                    'order'       => 'DESC',
                ));
                if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>

                <?php get_template_part( 'template_parts/affiliate-item-vertical' ); ?>
            
                <?php wp_reset_postdata(); ?>
                <?php endforeach; endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>