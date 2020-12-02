<?php
/*
Template Name: Footer
*/
?>
       
       <!--noindex-->
        <?php $tags = get_tags();
        $html = '<div class="manufacturers-panel clearfix">';
        foreach ($tags as $tag) {
            $tag_link = get_tag_link($tag->term_id);
            $html .= "<a href='{$tag_link}' rel='nofollow' class='manuf-link' title='{$tag->name}'>";
            $html .= "{$tag->name}</a>";
        }
        $html .= '</div>';
        echo $html;
        ?><!--/noindex-->
    </div>


    <footer class="footer">
    <!--noindex-->

        <div class="container">
            <div class="footer__top">
                <div class="footer__top-wrapper">
                    <div class="footer__top-logo">
                        <img src="<?php bloginfo("template_url"); ?>/images/footer-logo.svg" alt="">
                    </div>
                    <div class="footer__top-descr">
                        <div class="footer__top-title">
                            Лучшие обзоры казино
                        </div>
                        <div class="footer__top-link">
                            <a data-link="cG0tY2FzaW5v">onlineslotsclub.com.ua</a>
                        </div>
                    </div>
                </div>
                <div class="footer__top-sprite">
                    <div class="footer__top-sprite-logo">
                        <ul>
                            <li><img src="<?php bloginfo("template_url"); ?>/images/sprite/ecogra.png" alt=""></li>
                            <li><img src="<?php bloginfo("template_url"); ?>/images/sprite/gamcare.png" alt=""></li>
                            <li><img src="<?php bloginfo("template_url"); ?>/images/sprite/security-lock.png" alt=""></li>
                            <li><img src="<?php bloginfo("template_url"); ?>/images/sprite/18+.png" alt=""></li>
                            <li><img src="<?php bloginfo("template_url"); ?>/images/sprite/norton.png" alt=""></li>
                            <li><img src="<?php bloginfo("template_url"); ?>/images/sprite/curacao-egaming.png" alt=""></li>
                            <li><img src="<?php bloginfo("template_url"); ?>/images/sprite/begambleaware.png" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__menus">

                <div class="footer__top-menu">
                <?php wp_nav_menu( array('theme_location' => 'Footer',
                'menu' => 'Footer Menu',
                'menu_class' => 'footer-nav-list kill-list',
                'container' => '',
                'fallback_cb' => '__return_empty_string',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>') );?>
                </div>

                <div class="footer__bottom-menu">
                <?php wp_nav_menu( array('theme_location' => 'Footer Titled Menu',
                'menu' => 'footer-titled',
                'menu_class' => 'footer-nav-list kill-list',
                'container' => '',
                'fallback_cb' => '__return_empty_string',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                'walker' => new Custom_Menu_Walker()) );?>
                </div>
            </div>
            <div class="footer__social">
                <img src="<?php bloginfo("template_url"); ?>/images/twitter.svg" alt="">
                <img src="<?php bloginfo("template_url"); ?>/images/facebook.svg" alt="">
            </div>
            <div class="footer__copyright">
                All rights reserved © 2020 onlineslotsclub.com.ua
            </div>
            </div>
        </div>
    <!--/noindex-->
    </footer>
    <?php wp_footer(); ?>
<!--  -->
   </body>
</html>