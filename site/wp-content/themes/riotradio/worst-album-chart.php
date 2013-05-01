<?php
/**
 * The template for displaying Worst Album Chart page.
 * Template Name: Worst Album Chart
 * 
 */

get_header(); ?>

		<div id="container" style="width:1100px;padding-left:75px;">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title" style="margin-top:-25px;margin-left:-2px;"><img src="/wp-content/themes/riotradio/images/worst-albums-chart-heading.jpg" alt="Worst Albums Of All Time Chart" /></h1>
					<div id="entry-content">
						<?php the_content(2); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'riotradio' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'riotradio' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
