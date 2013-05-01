<?php
/**
 * The template for displaying Steven Sourman articles.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */


get_header(); ?>

		<div id="container">
			<div id="content" role="main">
				<h2><img src="/wp-content/themes/riotradio/images/steven-sourman-heading.jpg" alt="Steven Sourman" /></h2>
				<p><img src="/wp-content/uploads/2011/03/Sourman.jpg" width="370"class="right" alt="Steven Sourman" />Steven Sourman is Riot Radio's conservative contributor. In an effort to balance out us "new-music-loving, jazz-hating, internet-comprehending hipsters", Steven will be keeping us all in line with his old fashioned ideas on music, trends and how nothing good has been released since 1989.</p>
                <p><em>Any resemblance to any <del>bullying, self important, and out of touch</del> well respected New Zealand music journalists is purely coincidental.</em></p>
				
				<?php define('WP_USE_THEMES', false); get_header(); ?>
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
                <?php if ( in_category('Steven Sourman') ) { ?>
                           <div class="post-cat-three">
                <?php } else { ?>
                           <div class="post">
                <?php } ?>
						
                      <h2 class="categoriesHeading"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                     <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                     <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                    
                     <!-- Display the Post's Content in a div box. -->
                     <div class="entry">
                       <?php the_content(); ?>
                     </div>
                    
                     <!-- Display a comma separated list of the Post's Categories. -->
                     <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
                     <hr />
                     </div> <!-- closes the first div box -->

                        
                
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>

				
				
				<!--Don't Use
				<?php 
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				 the_content('loop', 'category');
				//get_template_part( 'loop', 'category' );
				?>-->
                

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


?>