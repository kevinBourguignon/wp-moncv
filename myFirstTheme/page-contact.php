<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
    <h1>Contactez-moi</h1>
     
    <div class="contenu-forms">
    <?php the_content(); ?>
</div>
<?php endwhile; ?>



<?php get_footer(); ?>
