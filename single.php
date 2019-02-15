<?php
/**
 * The Template for displaying all single posts, taken from Twenty Twelve package.
 */

get_header(); ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">

            <?php
            while ( have_posts() ) :
                the_post();
                ?>

            <?php get_template_part( 'content', get_post_format() ); ?>

                <div class="social-block">
                    <ul>
                        <li style="width:300px;height:20px;"><!-- Place this tag where you want the +1 button to render. -->
                            <g:plusone size="medium" href="<?php the_permalink(); ?>" count="false"></g:plusone>
                        </li>
                        <li style="width:40px;height:20px;"><!-- Facebook like. -->
                            <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-width="450" data-share="true" style="height:20px"></div>
                        </li>
                    </ul>
                </div>

                <nav class="nav-single">
                    <h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
                    <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
                    <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
                </nav><!-- .nav-single -->

                <?php comments_template( '', true ); ?>

            <?php endwhile; // end of the loop. ?>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
