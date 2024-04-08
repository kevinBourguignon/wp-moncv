<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
   

    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <header>
        <nav>
            <?php wp_nav_menu([
                'theme_location'=> 'header',
                'menu_class'=> 'nav-menu',
                'menu_id'=> 'menu'
            ])
            ?>
        </nav>
    </header>

  