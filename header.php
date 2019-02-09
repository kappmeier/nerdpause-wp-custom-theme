<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
<style>
/* android */
b {
  color:#A4C739;
}
.droid {
position: absolute;
bottom: 30px;
right: 60px;
height: 60px;
width: 65px;
}
.droid .torso {
position: absolute;
background:  #A4C739;
width: 65px;
height: 60px;
border-radius: 0px 0px 10px 10px;
}
.droid .head {
position: absolute;
top: -32px;
background:  #A4C739;
width: 65px;
height: 30px;
border-radius: 65px 65px 0% 0%;
}
.droid .head .eye {
height: 6px;
width: 6px;
border-radius: 5px;
background: #FFFFFF;
position: absolute;
top: 12px;
}
.droid .head .eye:nth-child(1) {
left: 20px;
}
.droid .head .eye:nth-child(2) {
right: 20px;
}
.droid .head .ear {
height: 15px;
width: 3px;
border-radius: 15px;
background: #A5C63B;
position: absolute;
top: -10px;
}
.droid .head .ear:nth-child(3) {
left: 15px;
transform: rotate(-30deg);
-webkit-transform: rotate(-30deg);
-moz-transform: rotate(-30deg);
-o-transform: rotate(-30deg);
}
.droid .head .ear:nth-child(4) {
right: 15px;
transform: rotate(30deg);
-moz-transform: rotate(30deg);
-webkit-transform: rotate(30deg);
-o-transform: rotate(30deg);
}
.droid .leg {
position: absolute;
bottom: -27px;
background:  #A5C63B;
width: 15px;
height: 27px;
border-radius: 0px 0px 30px 30px;
}
.droid .leg:nth-child(3) {
left: 12px;
}
.droid .leg:nth-child(4) {
right: 12px;
}
.droid .arm1,
.droid .arm2 {
left:68px;
top:-3px;
width: 15px;
height: 40px;
background: #A5C63B;
position: absolute;
border-radius: 25px;
}
.droid .arm1 {
left:-18px;
-webkit-transform-origin: 54% 18%;
-moz-transform-origin: 54% 18%;
-o-transform-origin: 54% 18%;
transform-origin: 54% 18%;
}
@-webkit-keyframes droid-wave {
  0% { -webkit-transform: rotate(0deg); }
  15% { -webkit-transform: rotate(110deg); }
  30% { -webkit-transform: rotate(135deg); }
  45% { -webkit-transform: rotate(110deg); }
  60% { -webkit-transform: rotate(135deg); }
  100% { -webkit-transform: rotate(0deg); }
}
@-moz-keyframes droid-wave {
  0% { -moz-transform: rotate(0deg); }
  15% { -moz-transform: rotate(110deg); }
  30% { -moz-transform: rotate(135deg); }
  45% { -moz-transform: rotate(110deg); }
  60% { -moz-transform: rotate(135deg); }
  100% { -moz-transform: rotate(0deg); }
}
@-o-keyframes droid-wave {
  0% { -o-transform: rotate(0deg); }
  15% { -o-transform: rotate(110deg); }
  30% { -o-transform: rotate(135deg); }
  45% { -o-transform: rotate(110deg); }
  60% { -o-transform: rotate(135deg); }
  100% { o-transform: rotate(0deg); }
}
@keyframes droid-wave {
  0% { transform: rotate(0deg); }
  15% { transform: rotate(110deg); }
  30% { transform: rotate(135deg); }
  45% { transform: rotate(110deg); }
  60% { transform: rotate(135deg); }
  100% { transform: rotate(0deg); }
}
.droid:hover .arm1  {
  -webkit-animation-name: droid-wave;
  -moz-animation-name: droid-wave;
  -o-animation-name: droid-wave;
  animation-name: droid-wave;
  -webkit-animation-duration: 1.5s;
  -moz-animation-duration: 1.5s;
  -o-animation-duration: 1.5s;
  animation-duration: 1.5s;
  -webkit-animation-delay: 0s;
  -moz-animation-delay: 0s;
  -o-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation-fill-mode: forwards;
  -moz-animation-fill-mode: forwards;
  -o-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
</style>
<!-- The left part of the header, containing blog title and subtitle. -->
<div style="float:left;width:60%;">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

</div>
<!-- The right part of the header, containing an android. -->
<div style="float:right;width:39%;height:120px;position:relative;">
  <div class="droid">
    <div class="head">
      <div class="eye"></div>
      <div class="eye"></div>
      <div class="ear"></div>
      <div class="ear"></div>
    </div>
    <div class="torso"></div>      
    <div class="leg"></div>
    <div class="leg"></div>
    <div class="arm1"></div>
    <div class="arm2"></div>
  </div>
</div>
<!--		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav>--><!-- #site-navigation -->

		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">
