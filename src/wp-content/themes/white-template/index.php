            <?php get_header(); ?>
            <article class="post-content" id="sql-text">
            <h1><?php echo(get_post_meta($post->ID, 'h1', true)); ?></h1>
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
                <?php edit_post_link(__('Edit This')); ?>
                <?php endwhile; endif; ?>
            </article>
            <ul class="gamelist-wrapper kill-list clearfix"><?php
                $posts = get_posts("numberposts=-1&orderby=rand"); 
                if ($posts) : ?>
                    <?php foreach ($posts as $post) : setup_postdata($post);
                     ?><li class="game-item"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php
                         if (has_post_thumbnail()) {
                            $default_attr = array('title' => $post->post_title);
                            echo get_the_post_thumbnail(null, 'full', $default_attr);
                        } 
                        ?><span class="game-title"><?php the_title(); ?></span></a></li>
                    <?php endforeach; ?>
                <?php endif; 
            ?></ul>
            <div class="text-goal"></div>
            <?php get_footer(); ?>
