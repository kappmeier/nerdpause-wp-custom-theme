<?php
/**
 * The Template for displaying all single posts, taken from Twenty Twelve package.
 */
get_header(); ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">

            <?php
            while (have_posts()) {
                the_post(); ?>

                <?php get_template_part('content', get_post_format()); ?>

                <div class="social-block">
                    <!-- SVG icons for sharing from ShareCounts WP Plugin. -->
                    <div class="fb-like social-share-icon">
                        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" data-href="<?php the_permalink(); ?>" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-width="450" data-share="true" style="height:20px" rel="nofollow noopener noreferrer" target="_blank" title="Share on Facebook"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18.8125" height="32" viewBox="0 0 602 1024" style="fill: #999999; width: 16px; height: 16px;"><path d="M548 6.857v150.857h-89.714q-49.143 0-66.286 20.571t-17.143 61.714v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571q0-106.286 59.429-164.857t158.286-58.571q84 0 130.286 6.857z"></path></svg></a>
                    </div>

                    <div class="social-share-icon">
                        <a href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fnerdpause.de&amp;source=tweetbutton&amp;text=<?php htmlspecialchars(rawurlencode(the_title())) ?>&amp;url=<?php the_permalink() ?>&amp;<?php /* via=nerdpause */ ?>" rel="nofollow noopener noreferrer" target="_blank" title="Share on Twitter" data-text="<?php htmlspecialchars(rawurlencode(the_title())) ?>" data-url="<?php the_permalink() ?>" <?php /* data-via="nerdpause" */ ?> data-related="nerdpause">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="29.71875" height="32" viewBox="0 0 951 1024" style="fill: #999999; width: 16px; height: 16px;"><path d="M925.714 233.143q-38.286 56-92.571 95.429 0.571 8 0.571 24 0 74.286-21.714 148.286t-66 142-105.429 120.286-147.429 83.429-184.571 31.143q-154.857 0-283.429-82.857 20 2.286 44.571 2.286 128.571 0 229.143-78.857-60-1.143-107.429-36.857t-65.143-91.143q18.857 2.857 34.857 2.857 24.571 0 48.571-6.286-64-13.143-106-63.714t-42-117.429v-2.286q38.857 21.714 83.429 23.429-37.714-25.143-60-65.714t-22.286-88q0-50.286 25.143-93.143 69.143 85.143 168.286 136.286t212.286 56.857q-4.571-21.714-4.571-42.286 0-76.571 54-130.571t130.571-54q80 0 134.857 58.286 62.286-12 117.143-44.571-21.143 65.714-81.143 101.714 53.143-5.714 106.286-28.571z"></path></svg>
                        </a>
                    </div>

                    <!--<div class="social-share-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="22.84375" height="32" viewBox="0 0 731 1024" style="fill: #999999; width: 16px; height: 16px;"><path d="M0 341.143q0-61.714 21.429-116.286t59.143-95.143 86.857-70.286 105.714-44.571 115.429-14.857q90.286 0 168 38t126.286 110.571 48.571 164q0 54.857-10.857 107.429t-34.286 101.143-57.143 85.429-82.857 58.857-108 22q-38.857 0-77.143-18.286t-54.857-50.286q-5.714 22.286-16 64.286t-13.429 54.286-11.714 40.571-14.857 40.571-18.286 35.714-26.286 44.286-35.429 49.429l-8 2.857-5.143-5.714q-8.571-89.714-8.571-107.429 0-52.571 12.286-118t38-164.286 29.714-116q-18.286-37.143-18.286-96.571 0-47.429 29.714-89.143t75.429-41.714q34.857 0 54.286 23.143t19.429 58.571q0 37.714-25.143 109.143t-25.143 106.857q0 36 25.714 59.714t62.286 23.714q31.429 0 58.286-14.286t44.857-38.857 32-54.286 21.714-63.143 11.429-63.429 3.714-56.857q0-98.857-62.571-154t-163.143-55.143q-114.286 0-190.857 74t-76.571 187.714q0 25.143 7.143 48.571t15.429 37.143 15.429 26 7.143 17.429q0 16-8.571 41.714t-21.143 25.714q-1.143 0-9.714-1.714-29.143-8.571-51.714-32t-34.857-54-18.571-61.714-6.286-60.857z"></path></svg>
                    </div>-->

                    <div class="social-share-icon">
                        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>" data-ref="<?php the_permalink(); ?>" data-size="small" target="_blank" rel="nofollow noopener noreferrer" title="Share on LinkedIn">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="27.4375" height="32" viewBox="0 0 878 1024" style="fill: #999999; width: 16px; height: 16px;"><path d="M199.429 357.143v566.286h-188.571v-566.286h188.571zM211.429 182.286q0.571 41.714-28.857 69.714t-77.429 28h-1.143q-46.857 0-75.429-28t-28.571-69.714q0-42.286 29.429-70t76.857-27.714 76 27.714 29.143 70zM877.714 598.857v324.571h-188v-302.857q0-60-23.143-94t-72.286-34q-36 0-60.286 19.714t-36.286 48.857q-6.286 17.143-6.286 46.286v316h-188q1.143-228 1.143-369.714t-0.571-169.143l-0.571-27.429h188v82.286h-1.143q11.429-18.286 23.429-32t32.286-29.714 49.714-24.857 65.429-8.857q97.714 0 157.143 64.857t59.429 190z"></path></svg>
                        </a>
                    </div>

                    <!--<div class="social-share-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="29.71875" height="32" viewBox="0 0 951 1024" style="fill: #999999; width: 16px; height: 16px;"><path d="M219.429 877.714h512v-146.286h-512v146.286zM219.429 512h512v-219.429h-91.429q-22.857 0-38.857-16t-16-38.857v-91.429h-365.714v365.714zM877.714 548.571q0-14.857-10.857-25.714t-25.714-10.857-25.714 10.857-10.857 25.714 10.857 25.714 25.714 10.857 25.714-10.857 10.857-25.714zM950.857 548.571v237.714q0 7.429-5.429 12.857t-12.857 5.429h-128v91.429q0 22.857-16 38.857t-38.857 16h-548.571q-22.857 0-38.857-16t-16-38.857v-91.429h-128q-7.429 0-12.857-5.429t-5.429-12.857v-237.714q0-45.143 32.286-77.429t77.429-32.286h36.571v-310.857q0-22.857 16-38.857t38.857-16h384q22.857 0 50.286 11.429t43.429 27.429l86.857 86.857q16 16 27.429 43.429t11.429 50.286v146.286h36.571q45.143 0 77.429 32.286t32.286 77.429z"></path></svg>
                    </div>-->

                    <div class="social-share-icon">
                        <a href="mailto:?subject=Check this site&amp;body=Check out this site: <?php the_permalink(); ?>." title="Share via e-mail">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 1024 1024" style="fill: #999999; width: 16px; height: 16px;"><path d="M1024 405.714v453.714q0 37.714-26.857 64.571t-64.571 26.857h-841.143q-37.714 0-64.571-26.857t-26.857-64.571v-453.714q25.143 28 57.714 49.714 206.857 140.571 284 197.143 32.571 24 52.857 37.429t54 27.429 62.857 14h1.143q29.143 0 62.857-14t54-27.429 52.857-37.429q97.143-70.286 284.571-197.143 32.571-22.286 57.143-49.714zM1024 237.714q0 45.143-28 86.286t-69.714 70.286q-214.857 149.143-267.429 185.714-5.714 4-24.286 17.429t-30.857 21.714-29.714 18.571-32.857 15.429-28.571 5.143h-1.143q-13.143 0-28.571-5.143t-32.857-15.429-29.714-18.571-30.857-21.714-24.286-17.429q-52-36.571-149.714-104.286t-117.143-81.429q-35.429-24-66.857-66t-31.429-78q0-44.571 23.714-74.286t67.714-29.714h841.143q37.143 0 64.286 26.857t27.143 64.571z"></path></svg>
                        </a>
                    </div>
                </div>

                <nav class="nav-single">
                    <h3 class="assistive-text"><?php _e('Post navigation', 'twentytwelve'); ?></h3>
                    <span class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">'._x('&larr;', 'Previous post link', 'twentytwelve').'</span> %title'); ?></span>
                    <span class="nav-next"><?php next_post_link('%link', '%title <span class="meta-nav">'._x('&rarr;', 'Next post link', 'twentytwelve').'</span>'); ?></span>
                </nav><!-- .nav-single -->

                <?php comments_template('', true); ?>

            <?php
		    } // End of the loop. ?>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
