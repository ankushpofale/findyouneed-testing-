<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="container">
		<div id="content" class="col-md-6" role="main">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>
		</div>
		<?php endif; ?>
			<?php echo do_shortcode('[gmw_single_location]'); ?>
			
			<div class="comment">
		
		<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
?>
		</div>
		</div>
		
		<!-- #content -->
<!-- #primary -->


	<div class="col-md-6" ><?php get_sidebar(); ?></div>
	
	</div>
	
<?php get_footer(); ?>