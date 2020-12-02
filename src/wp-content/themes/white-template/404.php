<?php get_header(); ?>

<?php $front_id = get_option('page_on_front'); ?>
<?php $games_horizontal = get_field('games_horizontal', $front_id); ?>

<div class="full-404 container">
    
    <div class="bg-404">404</div>
    <div class="text-404">
        <article class="post-content" id="sql-text">
        <p><span>Запрашиваемая страница не найдена!</span></p>
        <p>Вернитесь <a href="/" onclick="window.history.back();" rel="nofollow" class="large-button" title="Назад">назад</a> или перейдите на <a href="/">главную страницу</a></p>
        </article>
    </div>
    <div class="btn-404">
        <a class="btn-primary" href="/">Вернуться на главную</a>
    </div> 
    
    <?php get_template_part( 'template_parts/games-horizontal-block', null, $games_horizontal ); ?>

</div>

<?php get_footer(); ?>
