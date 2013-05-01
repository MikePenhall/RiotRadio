<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=175259192498159";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="/wp-content/themes/riotradio/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span>
				</<?php echo $heading_tag; ?>>
				<div id="site-description"><?php /*bloginfo( 'description' );*/ ?></div>
				<h1><a href="/"><img src="/wp-content/themes/riotradio/images/rr_header.jpg" width="1024" height="201" alt="Riot Radio Header" border="0" /></a><h1>

			</div><!-- #branding -->

			<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php /*wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); */?>
                
                <div id="navMenu">
                    <ul>
                        <li><img src="/wp-content/themes/riotradio/images/home.jpg" border="0"><a href="/"><span><img src="/wp-content/themes/riotradio/images/homeOVER.jpg" border="none" align="top" /></span></a></li>
                        
                        <li><img src="/wp-content/themes/riotradio/images/reviews.jpg" border="0"><a href="/category/reviews"><span><img src="/wp-content/themes/riotradio/images/reviewsOVER.jpg" border="none" align="top" /></span></a></li>
                        <li><img src="/wp-content/themes/riotradio/images/mp3s.jpg" border="0"><a href="/category/mp3s"><span><img src="/wp-content/themes/riotradio/images/mp3sOVER.jpg" border="none" align="top" /></span></a></li>
                        <li><img src="/wp-content/themes/riotradio/images/features.jpg" border="0"><a href="/features"><span><img src="/wp-content/themes/riotradio/images/featuresOVER.jpg" border="none" align="top" /></span></a></li>
                        <li><img src="/wp-content/themes/riotradio/images/about.jpg" border="0"><a href="/about"><span><img src="/wp-content/themes/riotradio/images/aboutOVER.jpg" border="none" align="top" /></span></a></li>                        
                    </ul>                    
                </div> 
                
                
			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
