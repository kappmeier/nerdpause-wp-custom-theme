<?php
/**
 * The Header template for our theme, taken from Twenty Twelve.
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * - Update to Twenty Twelve original theme: Contains an android robot on the
 *   right corner of the title bar.
 * - Does not contain the top menu bar. Sites (Impressum, ...) are linked in the footer.
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

        <?php if ( get_header_image() ) : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
        <?php endif; ?>
    </header><!-- #masthead -->

    <div id="main" class="wrapper">
