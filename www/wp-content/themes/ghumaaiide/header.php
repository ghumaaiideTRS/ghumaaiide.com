<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() . "/assets/images/logo.png"; ?>" width="200px;" height="200px;" />
    <title>Ghumaaiide</title>
    <?php wp_head(); ?>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css" />
    <script type="text/javascript">
        window.onload = function() {
            L.mapquest.key = 'FBBhoG2GAIjGrnEvYXMyNPtgSZmTwLDb';

            var map = L.mapquest.map('map', {
                center: [28.3949, 84.1240],
                layers: L.mapquest.tileLayer('map'),
                zoom: 6.5
            });

            map.addControl(L.mapquest.control());
        }
    </script>
</head>

<body>
    <header>
        <?php if (wp_is_mobile()) { ?>
            <?php if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } ?>
            <?php wp_nav_menu(

                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'item_wrap' => ''
                )
            ); ?>
            </div>
        <?php } else { ?>

            <nav>
                <div id="menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
                <a id="logo-img" href="<?php echo site_url(); ?>">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, '', 'option');
                    if (has_custom_logo()) {
                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                    } else { ?>
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/logo.png"; ?>" width="200px;" height="200px;">
                    <?php } ?>
                </a>
                <?php wp_nav_menu(

                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'item_wrap' => ''
                    )
                ); ?>
            <?php } ?>
            </nav>
    </header>
    <main>
        <section>
            <div id="banner">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/home-banner.jpg;?>">
                <h1><?php the_title(); ?></h1>

                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                } ?>
            </div>
        </section>