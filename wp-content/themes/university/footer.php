<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package University
 */
?>
</div>
</div>


<div id="footer">
  <div id="socialize">
    <?php if (get_theme_mod( 'googleplus_account' )) : ?>
    <a class="socialicon googleplusicon" href="<?php echo esc_url(get_theme_mod( 'googleplus_account')); ?>" target="blank"></a>
    <?php endif ?>
    <?php if (get_theme_mod( 'instagram_account' )) : ?>
    <a class="socialicon instagramicon" href="<?php echo esc_url(get_theme_mod( 'instagram_account')); ?>" target="blank"></a>
    <?php endif ?>
    <?php if (get_theme_mod( 'tumblr_account' )) : ?>
    <a class="socialicon tumblricon" href="<?php echo esc_url(get_theme_mod( 'tumblr_account')); ?>" target="blank"></a>
    <?php endif ?>
    <?php if (get_theme_mod( 'youtube_account' )) : ?>
    <a class="socialicon youtubeicon" href="<?php echo esc_url(get_theme_mod( 'youtube_account')); ?>" target="blank"></a>
    <?php endif ?>
    <?php if (get_theme_mod( 'vimeo_account' )) : ?>
    <a class="socialicon vimeoicon" href="<?php echo esc_url(get_theme_mod( 'vimeo_account')); ?>" target="blank"></a>
    <?php endif ?>
    <?php if (get_theme_mod( 'flickr_account' )) : ?>
    <a class="socialicon flickricon" href="<?php echo esc_url(get_theme_mod( 'flickr_account')); ?>" target="blank"></a>
    <?php endif ?>
    <?php if (get_theme_mod( 'pinterest_account' )) : ?>
    <a class="socialicon pinteresticon" href="<?php echo esc_url(get_theme_mod( 'pinterest_account')); ?>" target="blank"></a>
    <?php endif ?>
    <?php if (get_theme_mod( 'dribble_account' )) : ?>
    <a class="socialicon dribbleicon" href="<?php echo esc_url(get_theme_mod( 'dribble_account')); ?>" target="blank"></a>
    <?php endif ?>
    <?php if (get_theme_mod( 'linkedin_account' )) : ?>
    <a class="socialicon linkedinicon" href="<?php echo esc_url(get_theme_mod( 'linkedin_account')); ?>" target="blank"></a>
    <?php endif ?>
    <?php if (get_theme_mod( 'facebook_account' )) : ?>
    <a class="socialicon facebookicon" href="<?php echo esc_url(get_theme_mod( 'facebook_account')); ?>" target="blank"></a>
    <?php endif ?>
    <?php if (get_theme_mod( 'twitter_account' )) : ?>
    <a class="socialicon twittericon" href="<?php echo esc_url(get_theme_mod( 'twitter_account')); ?>" target="blank"></a>
    <?php endif ?>
  </div>
  <div id="copyinfo"> <a href="<?php echo esc_url( esc_attr__( 'http://wordpress.org/', 'university' ) ); ?>"><?php printf( esc_attr__( 'Powered by %s.', 'university' ), 'WordPress' ); ?></a> <?php printf( esc_attr__( 'Theme: %1$s by %2$s.', 'university' ), 'university', '<a href="http://www.vivathemes.com/" rel="designer">Viva Themes</a>' ); ?></div>
</div>
</div>
</div>
<?php wp_footer(); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Partners</h3>
                        <ul>
                             <img src="https://www.aufccs.com/ccs/wp-content/uploads/2020/10/partnerss-300x99.png"/>
                        </ul>
                    </div>
                        <p class="copyright">Carlitos Bernardino © 2022</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body></html>