<?php

    define("FB_IMAGE_WIDTH_SMALL", 600);
    define("FB_IMAGE_HEIGHT_SMALL", 315);
    define("FB_IMAGE_WIDTH", 2 * FB_IMAGE_WIDTH_SMALL);
    define("FB_IMAGE_HEIGHT", 2 * FB_IMAGE_HEIGHT_SMALL);


    function nerdpause_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'android-animation', get_stylesheet_directory_uri() . '/android.css' );
    }

    add_action( 'wp_enqueue_scripts', 'nerdpause_theme_enqueue_styles' );

    // Allow landing pages to have excerpts. Used to generate meta description.
    add_post_type_support( 'page', 'excerpt' );

    function nerdpause_setup() {
        add_theme_support('post-thumbnails');
        add_image_size('fb-image-small', FB_IMAGE_WIDTH_SMALL, FB_IMAGE_HEIGHT_SMALL, true);
        add_image_size('fb-image', FB_IMAGE_WIDTH, FB_IMAGE_HEIGHT, true);
    }
    add_action( 'after_setup_theme', 'nerdpause_setup' );


    function nerdpause_custom_image_sizes($sizes) {
        return array_merge($sizes, array(
            'fb-image' => __('Facebook Image'),
            'fb-image-small' => __('Facebook Image klein')
        ));
    }

    add_filter( 'image_size_names_choose', 'nerdpause_custom_image_sizes' );

    /*
     * Add set the rel attribute of the privacy policy link to 'nofollow'.
     */
    function nerdpause_privacy_policy($link) {
        // Read the link as document in utf-8 encoding
        $doc = new DOMDocument;
        @$doc->loadHTML('<meta http-equiv="content-type" content="text/html; charset=utf-8">' . $link);

        // Find the link and set the attribute
        $link = $doc->getElementsByTagName('a')[0];
        $link->setAttribute('rel', 'nofollow');

        return $doc->saveHTML($link);
    }
    add_filter( 'the_privacy_policy_link', 'nerdpause_privacy_policy');

    /**
     * Customized comment callback function printing comments and adds json-ld tags.
     */
    function nerdpause_comment($comment, $args, $depth) {
        twentytwelve_comment($comment, $args, $depth);
        switch ( $comment->comment_type ) :
            case 'pingback':
            case 'trackback':
                // We do not handle tracebacks.                
                break;
            default:
                // We add json-ld for a comment.
                ?>
                <script type="application/ld+json">
                {
                    "@context": "http://schema.org/",
                    "@type": "Comment",
                    "@id": " <?php echo get_the_permalink() . '#comment-' . $comment->comment_ID; ?>  ",
                    "author": <?php if (get_comment_author() == "kap"): echo '{ "@id": "https://kappmeier.de/about#kap" }'; else: echo nerdpause_comment_author_json_ld(get_comment_author()); endif; ?>,
                    "text": "<?php echo strip_tags(  preg_replace('/\<br(\s*)?\/?\>/i',"\n", get_comment_text())); ?>"
                }
                </script>
                <?php
                break;
        endswitch; // end comment_type check
    }

    /**
     * Returns json-ld person information for a comment author that is not the blog owner.
     */
    function nerdpause_comment_author_json_ld($comment_author) {
      return "{\n                    " . '"@type": "Person",' . "\n                    " . '"name": "' . $comment_author . '"' . "\n                }";
    }

    /**
     * Call in the loop to get the facebook open graph image url. Uses the large
     * image size, if exists, and then the small image size. As fallback, an image
     * of any size is returned. If there is not image, the nerdpause logo in
     * facebook resolution is returned.
     */
    function facebook_post_image() {
        //if (has_post_thumbnail() ): echo get_the_post_thumbnail_url(); endif;
        if (has_post_thumbnail()) {
            // Try to get high resolution fb image
            $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'fb-image' );
            if ($image_data[1] == FB_IMAGE_WIDTH && $image_data[2] == FB_IMAGE_HEIGHT) {
                return get_the_post_thumbnail_url(null,  'fb-image');
            } else {
                // Try to get the low resolution fb image
                $image_data= wp_get_attachment_image_src( get_post_thumbnail_id(), 'fb-image-small' ); //change thumbnail to whatever size you are using
                if ($image_data[1] == FB_IMAGE_WIDTH_SMALL && $image_data[2] == FB_IMAGE_HEIGHT_SMALL) {
                    return get_the_post_thumbnail_url(null,  'fb-image');
                }

                // Return any picture as fallback
                return get_the_post_thumbnail_url(null,  'post-thumbnail' );
            }
        } else {
            // No thumbnail, return the default nerdpause image in open graph resolution
            return "https://nerdpause.de/images/branding/logo/np-logo-1-og-1200.png";
        }
    }
?>
