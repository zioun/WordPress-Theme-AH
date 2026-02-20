<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <section>
        <div id="header_area">
            <div class="container">
                <div class="row mt-3 justify-content-between align-items-center">
                    <div class="col-md-2">
                        <img src="<?php echo get_theme_mod('ali_logo') ?>" alt="">
                    </div>
                    <div class="col-md-10 align-items-end">
                        <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php wp_footer(); ?>
</body>

</html>