<?php $cat = get_the_category(); 
$cat_id = $cat['0']->term_id;
//var_dump($cat_id);  ?>

<div class="games-block">
  <div class="container">
  <h3>Похожие игры:</h3>
    <div class="games-wrapper">
      <?php 
      $posts = get_posts( array(
        'numberposts' => 4,
        'category'    => $cat_id,
        'orderby'     => 'rand',
        'order'       => 'DESC',
      ));
      if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>

      <div class="game-card b-r">
        <div class="game-card-image">
          <?php if (has_post_thumbnail()) {
            $default_attr = array('title' => $post->post_title);
            echo get_the_post_thumbnail(null, 'full', $default_attr);
          } 
          else {
            echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
            . '/images/default-slots.jpg" alt=""/>';
          }
          ?>
        </div>              
        
        <div class="game-card-name"><?php the_title(); ?> </div>  

        <div class="game-card-overlay b-r">
          <span data-link="cG0tc3BvcnQ=" class="play-btn"><span>Играть на деньги</span></span>
          <a class="demo-btn" href="<?php the_permalink(); ?>">демо игра</a>
        </div>  

      </div>

      <?php endforeach; endif; ?>
    </div>
    <div class="btn-primary"><span>Показать больше игр</span></div>
    </div>
  </div>
</div>
</div>