<?php 
$posts = get_posts( array(
    'numberposts' => 21,
    'category_name'    => 'blog',
    'orderby'     => 'date',
    'order'       => 'DESC',
));
if ($posts) {
?>
<div class="blog">
    <div class="container">
        <h2>Блог</h2>
        <div class="grid-container-blog">

        <?php 
            setup_postdata($posts[0]);
            $post = $posts[0];
            get_template_part('template_parts/blog-big-card');
            for ($i = 1; $i <= 4; $i++) {
                if (array_key_exists($i, $posts)) {
                    setup_postdata($posts[$i]);
                    $post = $posts[$i];
                    get_template_part('template_parts/blog-small-card');
                }
            } ?>
       
        </div>
        <div class="blog-btn">
            <a class="btn-primary" href="/category/blog">Перейти ко всем статьям</a>
        </div> 
    </div>
</div>
<?php }

?>