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

        <article itemscope itemtype="https://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <script type="application/ld+json">
{
    "@context": "http://schema.org/",
    "headline": "<?php the_title(); ?>",
    "@type":"Article",
    "author": {
        "@type": "Person",
        "name": "Jan-Philipp Kappmeier"
    },
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
    "datePublished":"<?php echo get_the_date(); ?>"
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
            <h1 itemprop="headline" class="entry-title"><?php the_title(); ?></h1>
            <?php else : ?>
            <h1 itemprop="headline" class="entry-title">
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

<!-- author information -->
<style type="text/css">
.circletag {
border: 2px solid black;
            border-radius: 30px;
            -moz-border-radius: 30px;
            -khtml-border-radius: 30px;
            -webkit-border-radius: 30px;
            width: 180px;
            height: 240px;
            background: url('https://de.gravatar.com/userimage/46451036/3a56a25056722bf770bb8f4d44c3c7c8.jpg?size=40');}
</style>

<?php if(is_single()) {?>

<div style="font-size:smaller;margin-bottom:-20px;">Zuletzt geändert: <span class="updated"><?php the_modified_date(); ?></span> um <?php the_modified_time(); ?> Uhr.</div>


                <div class="vcard">
                    <div class="author-info">
                        <div class="author-avatar" style="float:left;">
                            <div style="
border: 2px;
border-color: #EFEFEF;
border-radius: 34px;
-moz-border-radius: 34px;
-khtml-border-radius: 34px;
-webkit-border-radius: 34px;
width: 68px;
height: 68px;
margin-left:24px;
background: url('https://de.gravatar.com/userimage/46451036/3a56a25056722bf770bb8f4d44c3c7c8.jpg?size=68');}
">
                                <span style="display:none">
                                    <a href="https://de.gravatar.com/userimage/46451036/3a56a25056722bf770bb8f4d44c3c7c8.jpg?size=68" itemprop="image"></a>
                                </span>
                            </div>
                        </div><!-- .author-avatar -->
                        <div class="person" itemprop="author" itemscope itemtype="https://schema.org/Person" style="float:left;width:494px;margin-left:24px;
margin-top:-6px;
" class="author-description">
                            <h2>Geschrieben von <span itemprop="name" class="fn"><a itemprop="url" href="https://plus.google.com/+JanPhilippKappmeier?rel=author" target="_blank">Jan-Philipp Kappmeier</a></span>.</h2>
                            <span style="display:none;"> a.k.a. <a itemprop="url" href="https://plus.google.com/+JanPhilippKappmeier?rel=author" target="_blank"><span itemprop="alternateName" class="nickname">Kap</span></a></span>
                            <p>
                                Ich bin Diplom-Informatiker, den es von <span class="adr"><span itemprop="birthPlace" class="locality">Herten</span> im wunderschönen <span class="locality">Ruhrgebiet</span> nach <span itemprop="homeLocation" class="locality">Berlin</span></span> verschlagen hat.
                                An der  <span itemprop="worksFor" itemscope id="tuberlin" itemtype="https://schema.org/Organization" class="org">TU Berlin</span>
                                forsche ich nun als <span itemprop="jobTitle">wissenschaftlicher Mitarbeiter</span> in der kombinatorischen Optimierung an Graphalgorithmen; nebenbei bringe ich Anfängern Programmieren bei. Ich blogge hier über alles was mich interessiert, vor allem Nerdiges und Reisen.
                            </p>
                        </div><!-- .author-description -->
                    </div><!-- .author-info -->
                </div><!-- vcard -->
<?php
    // entry meta contains author, date, and keywords
    //twentytwelve_entry_meta();
} else {
    //twentytwelve_entry_meta();
?>

<div class="vcard">
    <div class="author-info">
        <div style="margin-top:-20px;font:small;">
            Geschrieben von <span class="nickname"><a href="https://plus.google.com/+JanPhilippKappmeier?rel=author" target="_blank">Kap</a></span><span class="fn" style="display:none;">Jan-Philipp Kappmeier</span>. Zuletzt geändert am <span class="updated"><?php the_modified_date(); ?></span>.
        </div>
    </div>
</div>


<?php
}
?>



        <footer class="entry-meta">
            <?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
                <div class="author-info">
                    <div class="author-avatar">
                        <?php
                        /** This filter is documented in author.php */
                        $author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );
                        echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
                        ?>
                    </div><!-- .author-avatar -->
                    <div class="author-description">
                        <!-- <h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2> -->
                        <h2>Geschrieben von Jan-Philipp Kappmeier</h2>
                        <p><?php the_author_meta( 'description' ); ?></p>
                        <div class="author-link">
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                                <?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
                            </a>
                        </div><!-- .author-link    -->
                    </div><!-- .author-description -->
                </div><!-- .author-info -->
            <?php endif; ?>
        </footer><!-- .entry-meta -->
    </article><!-- #post -->
