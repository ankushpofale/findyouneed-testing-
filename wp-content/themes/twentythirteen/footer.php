<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="footer text-center spacer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<p><a href="http://letstartglobal.in/" target="_blank">letstartglobal</a></p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
<!-- jquery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- wow script -->
<script src="<?php bloginfo('template_directory');?>/css/wow/wow.min.js"></script>
<!-- boostrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript" ></script>
<!-- custom script -->
<script src="<?php bloginfo('template_directory');?>/css/script.js"></script>
	<?php wp_footer(); ?>
</body>
</html>