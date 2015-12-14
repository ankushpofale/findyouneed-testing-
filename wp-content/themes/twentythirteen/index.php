<?php


/* 
	Template Name:local_protal

 */
/**
 Theme Name:local_protal
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<!--<div id="works"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeIn">
        <img src="<?php //bloginfo('template_directory');?>/images/portfolio/1.jpg" alt="img01"/>
        <figcaption>
            <h2>Electricians</h2>
            <p>
            <a href="http://localhost/local_protal_new_wp/?p=35" title="1">View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php //bloginfo('template_directory');?>/images/portfolio/2.jpg" alt="img01"/>
        <figcaption>
            <h2>Mechanics</h2>
            <p>
           <a href="http://localhost/local_protal_new_wp/?p=2" title="1">View more</a></p>             
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php //bloginfo('template_directory');?>/images/portfolio/3.jpg" alt="img01"/>
        <figcaption>
            <h2>Plumbers</h2>
            <p>
            <a href="http://localhost/local_protal_new_wp/?p=2" title="1">View more</a></p>             
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php //bloginfo('template_directory');?>/images/portfolio/4.jpg" alt="img01"/>
        <figcaption>
            <h2>House Painters</h2>
            <p>
            <a href="http://localhost/local_protal_new_wp/?p=2" title="1">View more</a></p>             
        </figcaption>
    </figure>
	  <figure class="effect-oscar  wowload fadeInUp">
	  <img src="<?php// bloginfo('template_directory');?>/images/portfolio/5.jpg" alt="img01"/>
        
        <figcaption>
            <h2>Medical</h2>
            <p>
            <a href="http://localhost/local_protal_new_wp/?p=2" title="1">View more</a></p>             
        </figcaption>
    </figure>
   <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php //bloginfo('template_directory');?>/images/portfolio/6.jpg" alt="img01"/>
        <figcaption>
            <h2>Laptop Repair & Services</h2>
            <p>
            <a href="http://localhost/local_protal_new_wp/?p=2" title="1">View more</a></p>             
        </figcaption>
    </figure>
</div>--> 
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
<div class="col-sm-12 col-xs-12">
<i class="fa fa-graduation-cap  fa-5x"></i><h4><?php
$count_posts = wp_count_posts();
print_r($count_posts->publish);
?> Total listing</h4>
</div>
</div>
</div>
</div>
</div>
</div>


<?php get_footer(); ?>
