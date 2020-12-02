<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title><?php wp_title( ''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="/wp-content/themes/white-template/style.css"/> -->
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
   <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>
    <header id="header" class="site-header clearfix">
        <div class="wrapper container center-block">
                <!--noindex-->
            <div class="header__wrapper">
                <div class="header__nav">
                    <div class="header__logo">
                        <a href="/" class="logo" title="Online PM Casino">
                            <img src="<?php bloginfo("template_url"); ?>/images/logo.svg" alt="PM Casino">
                        </a>
                    </div>
                    <div class="header__nav-wrapper">
                        <div class="header__nav-menu">
                            <nav class="main-nav"><?php wp_nav_menu( array('theme_location' => 'Primary',
                                'menu' => 'primary-menu',
                                'menu_class' => 'nav-list-wrapper kill-list',
                                'container' => '',
                                'items_wrap' => '<ul class="%2$s">%3$s</ul>') );?>
                            </nav>   
                            <div class="header__nav-btn">
                                <div class="btn-main" data-link="cG0tcGxheQ==">Лучший оффер!</div>
                            </div>
                        </div>
                    </div>
                    <div class="burger">
                        <span class="burger__line burger__line_top"></span>
                        <span class="burger__line burger__line_middle"></span>
                        <span class="burger__line burger__line_bottom"></span>
                    </div>
                </div>
            </div>
        </div> 
                <!--/noindex-->
    </header>