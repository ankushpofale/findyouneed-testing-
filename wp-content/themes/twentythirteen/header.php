<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/animate/animate.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/animate/set.css" />


<!-- favicon -->
<link rel="shortcut icon" href="" type="">
<link rel="icon" href="" type="">


<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style_main.css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
	
		<script>
var screensize = document.documentElement.clientWidth;
if (screensize  < 1024) {
alert('Enable your gps location on phone and click ok To get the exact location');
}

	</script>
</head>

<body <?php body_class(); ?>>
	<div id="indexpage">
		<header id="masthead" class="site-header" role="banner">
			<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
           <a class="navbar-brand" href=" http://findyouneed.letstartglobal.in/?page_id=6">LOGO</a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div  class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div><!-- #navbar -->
			</div>
		</header><!-- #masthead -->
<div class="banner">
          <div class="caption">
            <div class="caption-wrapper">
              <div class="caption-info">              
              <h1 class="animated bounceInUp">FIND All YOU NEED</h1>
			  <div class="container">
			  <div class="offset3 span6">
			  <div class="search_banner_form">
					<?php echo do_shortcode('[gmw search_form="2"]'); ?>
					</div>
					</div>
              </div>
            </div>
          </div>
</div>
	
</div>


