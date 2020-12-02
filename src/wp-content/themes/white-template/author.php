<?php get_header(); ?>
<?php 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
$author_id = $curauth->ID;
$avatar = get_field('avatar', 'user_'.$author_id);
?>


<div class="author-block container">
<?php if( function_exists('custom_breadcrumbs') ) custom_breadcrumbs(' > '); ?>
    <div class="author__content">
        <div class="author__content-img">
            <img src="<?php echo $avatar['url'] ?>" alt="<?php echo $avatar['alt'] ?>">
        </div>
        <div class="author__content-about">
            <div class="author__content-name">
                <?php the_author(); ?>
            </div>
            <div class="author__content-descr">
                <?php the_author_meta('user_description'); ?>
            </div>
        </div>
    </div>

    <div class="author__blog">
    <h2>Публикации автора:</h2>
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

        <div class="author__blog-container">
             <?php $posts = new WP_Query( array(
                // 'posts_per_page' => 6,
                'paged' => $paged,
                'author' => $author_id,
                // 'orderby'     => 'date',
                // 'include'     => array(),
                ) ); ?>

                <?php while ( $posts->have_posts() ) : $posts->the_post();
                    get_template_part('template_parts/blog-small-card'); 
                endwhile; ?>
                <?php if (!($posts->have_posts())) {
                    echo 'Публикаций нет';
            } ?>

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