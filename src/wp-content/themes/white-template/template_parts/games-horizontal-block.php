<div class="games-horizontal single-page">
    <div class="container">
        <h2>Лучшие слоты</h2>
        <div class="games-horizontal-block">

        <?php $games_horizontal = $args; ?>
            <?php  if($games_horizontal) {
                ?>
                    <?php 
                    $posts = $games_horizontal;
                    if ($posts) : foreach ($posts as $key => $post) : setup_postdata($post); ?>

                    <?php get_template_part( 'template_parts/games-item-horizontal', null, $key ); ?>
                
                    <?php wp_reset_postdata(); ?>
                    <?php endforeach; endif; ?>
                <?php
            } ?>

        </div>
        <!-- Подключение слайдера для мобильной версии(убираются горизонтальные блоки) -->
        <div class="games-horizontal-block-mob-slider">
            <?php get_template_part( 'template_parts/games-post-slider' ); ?>
        </div>

        <div class="games-horizontal-block-btn">
            <a class="btn-primary" href="/category/slots/">Все игровые автоматы</a>
        </div>  
    </div>
</div>