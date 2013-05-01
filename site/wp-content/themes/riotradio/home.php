<?php
/**
 * The Homepage template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
        	
			<div id="content" role="main">
				<h2><a href="/"><img src="/wp-content/themes/riotradio/images/latest.jpg" alt="latest" border="0" /></a></h2>
			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 
			 add_image_size('homepage-image', 250, 250); 
			 
			 $arguments = array(
					'posts_per_page' => 10, 'order' => 'DESC'
			 );		
			 
			while( have_posts() ) : the_post();?>
			
			
			<div class="homepage-story">
			<h2 class="entry-title"><strong><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></strong></h2>
			
            <small class="author-info"><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small><br />
			<?php //$meta_values = get_post_meta( $post->ID, ""); 

			                                               
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  the_post_thumbnail('homepage-image',array('class'=>'left'));
				} /*else {?>
					<img src="/wp-content/themes/riotradio/images/record250.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="left" />	<?php	
				}*/?>
				
				<?php the_excerpt(); ?>
                <?php comments_popup_link('', '1 <img src="/wp-content/themes/riotradio/images/speech-bubble.png" alt="Comment" title="1 Comment">', '% <img src="/wp-content/themes/riotradio/images/speech-bubble.png" alt="Comments" title="% Comments">'); ?><br />
                <small>Posted in <?php the_category(', '); ?></small><br />
                <small><?php the_tags( "Tagged with: ", ', ', ''); ?></small><br /><br />
                
                <!--<div class="homepage-share-buttons">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php /*?><?php the_permalink()?><?php */?>">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs)		;}}(document,"script","twitter-wjs");</script>
                    <div class="fb-like" data-href="<?php /*?><?php the_permalink()?><?php */?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>                    
                </div>-->
                
                
                <hr />
				</div><!-- End of class="homepage-story"-->
				
                <?php
				endwhile;
				
				wp_reset_postdata();
			 ?>
             <br />
             <big><?php posts_nav_link() ?></big>
            
             
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
