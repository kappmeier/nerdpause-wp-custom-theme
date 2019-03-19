<?php
    function nerdpause_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'android-animation', get_stylesheet_directory_uri() . '/android.css' );
    }

    add_action( 'wp_enqueue_scripts', 'nerdpause_theme_enqueue_styles' );

    // Allow landing pages to have excerpts. Used to generate meta description.
    add_post_type_support( 'page', 'excerpt' );

    add_filter( 'the_privacy_policy_link', 'test_function');

    /*
     * Add set the rel attribute of the privacy policy link to 'nofollow'.
     */
    function test_function($link) {
        // Read the link as document in utf-8 encoding
        $doc = new DOMDocument;
        @$doc->loadHTML('<meta http-equiv="content-type" content="text/html; charset=utf-8">' . $link);

        // Find the link and set the attribute
        $link = $doc->getElementsByTagName('a')[0];
        $link->setAttribute('rel', 'nofollow');

        return $doc->saveHTML($link);
    }

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
?>
