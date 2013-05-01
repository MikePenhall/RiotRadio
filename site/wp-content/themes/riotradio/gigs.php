<?php
/**
 * The template for displaying Gigs page.
 * Template Name: Gigs
 * 
 *Doesn't use get_header function because it was throwing some weird errors - printing out the entire table in the header.
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="/wp-content/themes/riotradio/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

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
				<a href="/"><img src="/wp-content/themes/riotradio/images/rr_header.jpg" width="1024" height="201" alt="Riot Radio Header" border="0" /></a>
				<!--<?php
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else : ?>
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
					<?php endif; ?>-->
			</div><!-- #branding -->

			<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php /*wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); */?>
                
                <div id="navMenu">
                    <ul>
                        <li><img src="/wp-content/themes/riotradio/images/home.jpg" border="0"><a href="/"><span><img src="/wp-content/themes/riotradio/images/homeOVER.jpg" border="none" align="top" /></span></a></li>
                        <li><img src="/wp-content/themes/riotradio/images/mp3s.jpg" border="0"><a href="/category/mp3s"><span><img src="/wp-content/themes/riotradio/images/mp3sOVER.jpg" border="none" align="top" /></span></a></li>
                        <li><img src="/wp-content/themes/riotradio/images/reviews.jpg" border="0"><a href="/category/reviews"><span><img src="/wp-content/themes/riotradio/images/reviewsOVER.jpg" border="none" align="top" /></span></a></li>
                        <li><img src="/wp-content/themes/riotradio/images/gigs.jpg" border="0"><a href="/gigs"><span><img src="/wp-content/themes/riotradio/images/gigsOVER.jpg" border="none" align="top" /></span></a></li>
                        <li><img src="/wp-content/themes/riotradio/images/about.jpg" border="0"><a href="/about"><span><img src="/wp-content/themes/riotradio/images/aboutOVER.jpg" border="none" align="top" /></span></a></li>                        
                    </ul>
                </div> 
                
                
			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">

		<div id="container" style="width:1100px;padding-left:90px;">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title" style="margin-top:-25px;"><img src="/wp-content/themes/riotradio/images/gigs-heading.jpg" alt="Gigs" /></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
