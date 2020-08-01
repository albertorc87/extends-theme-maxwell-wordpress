<?php
/**
 * The template for displaying the footer.
 *
 * Contains all content after the main content area and sidebar
 *
 * @package Maxwell
 */

?>

	</div><!-- #content -->

	<?php do_action( 'maxwell_before_footer' ); ?>

	<div id="footer" class="footer-wrap">

		<footer id="colophon" class="pie_pagina" role="contentinfo">

			<p class="footer-copyright">&copy;
				<?php
				echo date_i18n(
					_x( 'Y', 'copyright date format', 'twentytwenty' )
				);
				?>
				<?php bloginfo( 'name' ); ?>. Todos los derechos reservados.
			</p>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

			</div><!-- .site-info -->

		</footer><!-- #colophon -->

	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
