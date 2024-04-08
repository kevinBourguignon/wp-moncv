<?php
get_header();


if (have_posts()) :
    while (have_posts()) : the_post();
        the_post_thumbnail();
        ?>
         <h1><a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></h1>
<?php
        the_excerpt();

        the_content();
    

    endwhile;
endif;
//get_sidebar();
get_footer();