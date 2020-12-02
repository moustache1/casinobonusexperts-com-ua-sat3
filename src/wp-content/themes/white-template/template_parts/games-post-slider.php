<div class="games-post-slider">
<?php 
$posts = get_posts( array(
    'numberposts' => 5,
    // 'category'    => 22,
    'category'    => 5,
    'orderby'     => 'orderby',
    'order'       => 'DESC',
  ));
    if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
    
    <div class="games-item-vertical-wrapper">

    <?php get_template_part( 'template_parts/games-item-vertical' ); ?>

    </div>

    <?php wp_reset_postdata(); ?>
    <?php endforeach; endif; ?>
</div>

