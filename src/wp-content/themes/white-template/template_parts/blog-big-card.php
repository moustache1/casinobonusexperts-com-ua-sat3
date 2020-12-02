<div class="main-blog">
<?php $date_check = get_the_date('F j, Y'); ?>
    <div class="main-blog-img">
        <img src="<?php bloginfo("template_url"); ?>/images/pmcasino-bg.png" alt="PM Casino">
    </div>
    <div class="main-blog-wrapper">
        <div class="main-blog-info">
            <div class="main-blog-date">
                <?php echo $date_check; ?>
            </div>
            <div class="main-blog-dot">
                • by
            </div>
            <div class="main-blog-author">
                <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a>
            </div>
        </div>
        <div class="main-blog-title">
            <?php the_title(); ?>
        </div>
        <div class="main-blog-descr">
            <?php the_excerpt(); ?>
        </div>
        <div class="main-blog-read">
            <a href="<?php the_permalink(); ?>">Read full article ></a>
        </div>
    </div>
</div>