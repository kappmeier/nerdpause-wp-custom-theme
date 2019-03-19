<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

        <article <?php post_class(); ?>>
    <script type="application/ld+json">
    {
    "@context": "http://schema.org/",
    "headline": "<?php the_title(); ?>",
    "@type":"BlogPosting",
    "author": { "@id": "https://kappmeier.de/about#kap" },
    "Publisher": {
        "@type": "Organization",
        "name": "Nerdpause",
        "url": "https://nerdpause.de",
        "logo": {
            "@type": "ImageObject",
            "name": "nerdpause-logo",
            "width": "256",
            "height": "256",
            "url": "https://nerdpause.de/images/branding/logo/np-logo-1s-sq-256.png"
        }
    },
    "url": "<?php the_permalink(); ?>",
    "datePublished":"<?php echo get_the_date("c"); ?>",
    "image":"https://nerdpause.de/images/branding/logo/np-logo-1s-sq-256.png",
    "mainEntityOfPage":"<?php the_permalink(); ?>",
    "dateModified":"<?php the_modified_date("c"); ?>"
    }
    </script>
        <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
        <div class="featured-post">
            <?php _e( 'Featured post', 'twentytwelve' ); ?>
        </div>
        <?php endif; ?>
        <header class="entry-header">
            <?php
            if ( ! post_password_required() && ! is_attachment() ) :
                the_post_thumbnail();
            endif;
            ?>
            <?php if ( is_single() ) : ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php else : ?>
            <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h1>
            <?php endif; // is_single() ?>
            <?php if ( comments_open() ) : ?>
                <div class="comments-link">
                    <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
                </div><!-- .comments-link -->
            <?php endif; // comments_open() ?>
        </header><!-- .entry-header -->

        <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
            <?php
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->
        <?php endif; ?>

        <footer class="entry-meta">
<?php
    // Replace the default behaviour of author info with a fixed author block, containing also meta data.
    if(is_single()) {
?>
            <div style="font-size:smaller;margin-bottom:-20px;">
                Zuletzt geändert: <span class="updated"><?php the_modified_date(); ?></span> um <?php the_modified_time(); ?> Uhr.
            </div>
            <!-- author information -->
            <div class="vcard">
                <div itemscope itemtype="https://schema.org/Person" class="author-info">
                    <div class="author-avatar">
                            <span style="display:none"><a href="https://de.gravatar.com/userimage/46451036/3a56a25056722bf770bb8f4d44c3c7c8.jpg?size=68" itemprop="image"></a></span>
                    </div><!-- .author-avatar -->
                    <div class="author-description">
                        <h2>Geschrieben von <span itemprop="name" class="fn"><a itemprop="url" href="https://plus.google.com/+JanPhilippKappmeier?rel=author" target="_blank">Jan-Philipp Kappmeier</a></span>.</h2>
                        <span style="display:none;"> a.k.a. <a itemprop="url" href="https://plus.google.com/+JanPhilippKappmeier?rel=author" target="_blank"><span itemprop="alternateName" class="nickname">Kap</span></a></span>
                            <p>
                                Ich bin Diplom-Informatiker, den es von <span class="adr"><span itemprop="birthPlace" class="locality">Herten</span> im wunderschönen <span class="locality">Ruhrgebiet</span> nach <span itemprop="homeLocation" class="locality">Berlin</span></span> verschlagen hat.
                                An der  <span itemprop="worksFor" itemscope id="tuberlin" itemtype="https://schema.org/Organization" class="org">TU Berlin</span>
                                forsche ich nun als <span itemprop="jobTitle">wissenschaftlicher Mitarbeiter</span> in der kombinatorischen Optimierung an Graphalgorithmen; nebenbei bringe ich Anfängern Programmieren bei. Ich blogge hier über alles was mich interessiert, vor allem Nerdiges und Reisen.
                            </p>
                    </div><!-- .author-description -->
                </div><!-- .author-info -->
            </div>
<?php } else { // Is not single. ?>
            <div class="vcard">
                <div class="author-info">
                    <div style="font-size:smaller;margin-bottom:-20px;">
                        Geschrieben von <span class="nickname"><a href="https://plus.google.com/+JanPhilippKappmeier?rel=author" target="_blank">Kap</a></span><span class="fn" style="display:none;">Jan-Philipp Kappmeier</span>. Zuletzt geändert am <span class="updated"><?php the_modified_date(); ?></span>.
                    </div>
                </div>
            </div>
<?php } ?>

        </footer><!-- .entry-meta -->
    </article><!-- #post -->
