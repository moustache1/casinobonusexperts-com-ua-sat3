<div class="blog-post-slider">
<?php 
$posts = get_posts( array(
    'numberposts' => 6,
    // 'category'    => 22,
    'category'    => 10,
    'orderby'     => 'rand',
    'order'       => 'DESC',
  ));
    if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
    
    <div class="affiliate-item-vertical-wrapper">

    <?php get_template_part( 'template_parts/affiliate-item-vertical' ); ?>

    </div>

    <?php wp_reset_postdata(); ?>
    <?php endforeach; endif; ?>
</div>

