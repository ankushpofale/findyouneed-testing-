<?php

/* 
	Template Name:Search_content_template
 */
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
	
<div class="container">
	  
	
	
	<div class="visible-xs col-md-4">
<?php echo do_shortcode('[gmw search_form="3"]'); ?>
			</div>
<div class="col-md-8 col-xs-12">

			
<div class="profile-item">
	
				<?php if ( have_posts() ) : ?>     

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div>
	
</div>
	<div class="hidden-xs col-md-4">
		<?php get_sidebar(); ?>
			</div>
</div>

<?php get_footer(); ?>
