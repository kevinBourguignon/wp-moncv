<?php get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<section class="error-404 not-found">
<header class="page-header">

<!-- Personnaliser le titre ici -->
<h1 class="page-title">Erreur 404 : Page Non Trouvée</h1>
</header>

<div class="page-content">

<!-- Placer ici le lien vers votre image d'erreur 404 personnalisée -->
<!-- <p align="center"><img src="./assets/images/404.jpg" alt="Erreur 404" /></p> -->

<!-- Personnaliser le message comme vous le souhaitez -->
<p>Nous sommes désolé mais la page que vous cherchez n'est pas ou plus 
disponible. Nous vous suggérons de vous rendre sur <a href="Accueil">la page 
d'accueil</a> du site ou d'effectuer une nouvelle recherche :</p>

<?php get_search_form(); ?>

<!-- Afficher les derniers articles du blog -->
 <p>Découvrez nos derniers articles :</p>

<ul>
<?php
$my_query = new WP_Query('showposts=5');
while ($my_query->have_posts()) : $my_query->the_post();
?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php
endwhile;
?>
</ul>

<!-- Ajouter des liens vers vos pages importantes -->
<!-- <p>Vous pouvez aussi consulter :</p>

<ul>
<li><a href="/">Page importante #1</a></li>
<li><a href="/">Page importante #2</a></li>
<li><a href="/">Page importante #3</a></li>
</ul>  -->



<?php get_footer(); ?>


