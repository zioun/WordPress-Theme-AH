<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <section>
        <div id="header_area">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-2">
                        <img src="<?php echo get_theme_mod('ali_logo') ?>" alt="">
                    </div>
                    <div class="col-md-9">
                        <ul id="nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Media</a></li>
                            <li>
                                <a href="#">Services</a>
                                <ul>
                                    <li><a href="#">Services Item 1</a></li>
                                    <li>
                                        <a href="#">Services Item 2</a>
                                        <ul>
                                            <li><a href="#">Item 1</a></li>
                                            <li><a href="#">Item 2</a></li>
                                            <li><a href="#">Item 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Services Item 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Download</a></li>
                            <li><a href="#">Projects</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php wp_footer();?>
</body>
</html>