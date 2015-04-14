<?php
/**
 * Add Google Analytics
 */
class CJHS_Google_Analytics {
    /**
     * Class Constructor
     */
    public function __construct() {
        if( get_field( 'cjhs_google_analytics_id', 'option' ) ) {
            add_action( 'wp_footer',array( $this, 'google_analytics' ) );
        }
    }
    public function google_analytics() {
        $url = home_url();
        $url = trim( $url, '/' );
        // If scheme not included, prepend it
        if ( !preg_match( '#^http(s)?://#', $url ) ) {
            $url = 'http://' . $url;
        }
        $url_parts = parse_url($url);
        $domain = preg_replace( '/^www\./', '', $url_parts['host'] );
        ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', <?php echo '\''. get_field( 'cjhs_google_analytics_id', 'option' ) .'\'' ?>, <?php echo '\''. $domain .'\'' ?>);
    ga('send', 'pageview');

</script>
    <?php 
    }
}