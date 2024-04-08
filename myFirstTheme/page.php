<?php get_header(); ?>

<!-- <section class="competences">
    <h2 class="title-section">Compétences</h2>
    <article class="post competences-content">
        <?php
        $arg = array(
            'post_type' => 'post',
            'category_name' => 'competences',
            'posts_per_page' => 3
        );
 
        $query = new WP_Query($arg);
 
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post() ?>
                <article class="compentences-items">
 
                    <h2 class="the-title"><?php the_title(); ?></h2>
                    <p class="the-content"><?php the_content(); ?></p>
                </article>
        <?php endwhile;
        endif; ?>
 
    </article>
</section> -->

<?php get_footer(); ?>