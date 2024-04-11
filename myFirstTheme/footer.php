<?php wp_footer(); ?>

<footer class="site-footer" role="contentinfo">
		<div class="site-info container">
			<p id="copyright">&copy; Copyright 2024 - Kévin Bourguignon. Tous droits réservés.</p>
		</div>
		<?php wp_nav_menu([
			 'theme_location'=> 'footer',
			 'menu_class'=> 'footer-menu',
			 'menu_id'=> 'menu'
		])
		?>
		<div class="main">
		<aside class="site__sidebar">
            <ul>
                <?php dynamic_sidebar( 'blog-sidebar' ); ?>
            </ul>
        </aside>
	</div>
	</footer>
</body>
</html>