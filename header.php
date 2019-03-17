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
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <?php
    // TODO: multiple post pages, like category overview, or by date range
    ?>
    <!-- Meta data for sharing and social meda -->
    <?php if (!is_page() && have_posts()):the_post();endif;?>
    <meta name="description" content="<?php if (is_page() || is_single()): echo strip_tags(get_the_excerpt()); else: bloginfo('description'); endif; ?>"/>

    <!-- Facebook -->
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <?php if (is_single()) { /* A blog post or single page. */?>
        <meta property="og:url" content="<?php the_permalink(); ?>" />
        <meta property="og:title" content="<?php single_post_title(''); ?>" />
        <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
        <meta property="og:type" content="article" />
    <?php } else { ?>
        <meta property="og:url" content="<?php global $wp; echo home_url($wp->request); ?>" />
        <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
        <meta property="og:description" content="<?php if (is_page() && has_excerpt()): echo strip_tags(get_the_excerpt()); else: bloginfo('description'); endif; ?>" />
        <meta property="og:type" content="website" />
    <?php } ?>
    <meta property="og:locale" content="de_DE" />

    <!-- JSON-LD -->
    <!-- The actual web page. -->
    <?php if (is_single()) { /* A blog post or single page. */?>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "<?php single_post_title(''); ?>",
        "description": "<?php if (is_page() && has_excerpt()): echo strip_tags(get_the_excerpt()); else: bloginfo('description'); endif; ?>",
        "license": "http://creativecommons.org/licenses/by-nc-sa/3.0/us/deed.en_US"
    }
    </script>
    <?php } else { ?>
    <?php } ?>
    <!-- The general web site -->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "@id": "https://nerdpause.de/#site",
        "url": "https://nerdpause.de",
        "name": "Nerdpause",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://nerdpause.de/?s={query}",
            "query-input": {
                "@type": "PropertyValueSpecification",
                "valueRequired": "http://schema.org/True",
                "valueName": "query"
          }
        }
    }
    </script>
    
    <!-- The author/owner -->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Person",
        "@id": "https://nerdpause.de/author/kap/#i",
        "name": "Jan-Philipp Kappmeier",
        "email": "jp.kappmeier@gmail.com",
        "url": "https://nerdpause.de/author/kap/",
        "mainEntityOfPage": "https://nerdpause.de/author/kap/",
        "sameAs": [
            "https://twitter.com/kappmeierz",
            "https://www.linkedin.com/in/kappmeier",
            "https://kappmeier.de/about"
        ]
    }
    </script>
    <?php if (is_single()) { ?>

<?php } ?>
<?php
    wp_head();
    while ( have_posts() ) : the_post(); endwhile;
?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header" role="banner">

            <!-- The left part of the header, containing the logo. -->
            <div class="site-header logo-column">
                <!-- Square logo in left corner. -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="https://nerdpause.de/images/branding/logo/np-logo-1ct-sq-512.png" class="header-logo" alt="Nerdpause small logo."/></a>
            </div>

            <!-- The center part of the header, containing blog title and subtitle. -->
            <div class="site-header name-column">
                <hgroup>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                </hgroup>
            </div>

            <!-- The right part of the header, containing an android. -->
            <div class="site-header action-column">
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
