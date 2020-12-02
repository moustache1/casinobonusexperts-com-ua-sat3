<?php get_header(); ?>
<article class="post-content" id="sql-text">
    <h1><?php echo(get_post_meta($post->ID, 'h1', true)); ?></h1>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
</article>

<?php $front_games = get_field('front_games'); ?>
<?php $games_horizontal = get_field('games_horizontal'); ?>
<?php $horizontal_casino = get_field('horizontal_casino'); ?>

<?php get_template_part( 'template_parts/banner'); ?>

<?php get_template_part( 'template_parts/affiliate-horizontal-block', null, $horizontal_casino ); ?>

<div class="seo-text reverse">
    <div class="container">
        <div class="seo-text__wrapper">
            <div class="seo-text__left">
                <?php the_field('text_block_1') ?>
                <div class="seo-text__btn">
                    <div class="seo-text__line"></div>
                    <div class="seo-text__button">
                        <a class="btn-primary" data-link="cG0tZ2FtZXM=">Открыть весь текст</a>
                    </div>  
                </div>
            </div>
            <div class="seo-text__right">
                <img src="<?php bloginfo("template_url"); ?>/images/seo-text-ruletka.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<?php if($front_games) {
    ?>
    <div class="games-block container">
        <h2>Popular Slots</h2>
            <div class="games-wrapper">
            <?php 
            $posts = $front_games;
            if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>

            <?php  get_template_part('template_parts/game-items');?>
        
            <?php wp_reset_postdata(); ?>
            <?php endforeach; endif; ?>
            </div>
        
            <div class="games-block-btn">
                <a class="btn-primary" href="/category/slots">Показать больше игр</a>
            </div>
    </div>
    <?php
} ?>


<div class="scroll-content container">
    <div class="scroll-content-main">
        <div class="for-h"></div>
        <div class="main-text main-text_scroll"></div>
    </div>
</div>

<?php get_template_part( 'template_parts/games-horizontal-block', null, $games_horizontal ); ?>

<div class="seo-text">
    <div class="container">
        <div class="seo-text__wrapper">
            <div class="seo-text__left">
                <?php the_field('text_block_2') ?>
                <div class="seo-text__btn">
                    <div class="seo-text__line"></div>
                    <div class="btn-primary">
                        <a data-link="cG0tY2FzaW5v">Открыть весь текст</a>
                    </div>
                </div>
            </div>
            <div class="seo-text__right">
                <img src="<?php bloginfo("template_url"); ?>/images/main-img-reverse.jpg" alt="">
            </div>
        </div>
    </div>
</div>


<?php get_template_part( 'template_parts/blog' ); ?>

<?php  get_template_part('template_parts/faq/faq');?>

<div class="btn-top">
    <a href="#header"><img src="<?php bloginfo("template_url"); ?>/images/btn-top.svg" alt=""></a>
</div>

<?php get_footer(); ?>


