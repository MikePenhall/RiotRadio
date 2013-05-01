<?php
/**
 * The template for displaying Regular Features Page page.
 * Template Name: Features
 * 
 */

get_header(); ?>

		<div id="container" style="width:1100px;">
			<div id="content" role="main" style="width:1100px;">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>  style="width:1100px;">
					<h1 class="entry-title" style="margin-top:-25px;"><img src="/wp-content/themes/riotradio/images/regular-features-heading.jpg" alt="Regular Features" /></h1>
					<p>Some of our regular blogging topics...</p>
				</div><!-- #post-## -->

				

<?php endwhile; ?>
		
        <!--first category-->
		<div class="features-page" style="margin-top:-30px;border-right:1px solid black;padding-right:30px;"> 
             <?php 
			 	add_image_size('features-image', 200, 200); 
				$arguments = array(
					'category_name' => 'Worst Albums', 'posts_per_page' => 1, 'order' => 'DESC'
				);				
				$first_query = new WP_Query($arguments);
				while( $first_query->have_posts() ) : $first_query->the_post();?>
				
                <h2><strong><span class="features-header"><a href="/category/worst-albums/">The Worst Albums Of All Time</a></span></strong></h2>
                <p><em>We review some of the worst albums of all time for your entertainment. <a href="/worst-albums-of-all-time-chart/">Check out the chart!</a></em></p>
                <h3><a href="<?php the_permalink() ?>"><?php if(strlen(the_title()) < 50){
					echo "<br />";
				}; ?></a></h3>
	
                <?php  
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  the_post_thumbnail('features-image',array('class'=>'left'));
				} 
				the_excerpt();

				endwhile;
				
				wp_reset_postdata();
			 ?>
		</div>	
		
        
        <!--second category-->
        <div class="features-page" style="margin-top:-30px;padding-left:30px;"> 
             <?php 
				$arguments = array(
					'category_name' => 'Best New Music', 'posts_per_page' => 1, 'order' => 'DESC'
				);				
				$second_query = new WP_Query($arguments);
				while( $second_query->have_posts() ) : $second_query->the_post();?>
				
                <h2><strong><span class="features-header"><a href="/category/best-new-music/">Best New Music</a></span></strong></h2>
                <p><em>We're not just haters! Here's some songs, albums and artists that we really like and think you should listen to.</em></p>
                <h3><a href="<?php the_permalink() ?>"><?php if(strlen(the_title()) < 50){
					echo "<br /><br />";
				}; ?></a></h3>
	
                <?php  
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  the_post_thumbnail('features-image',array('class'=>'left'));
				} 
				the_excerpt();
				
				endwhile;
				
				wp_reset_postdata();
			 ?>
		</div>	
        
        
        <!--third category-->
        <div class="features-page" style="border-right:1px solid black;border-top:1px solid black;padding-right:30px;margin-top:-48px;">
             <?php 
				$arguments = array(
					'category_name' => 'Steven Sourman', 'posts_per_page' => 1, 'order' => 'DESC'
				);				
				$third_query = new WP_Query($arguments);
				while( $third_query->have_posts() ) : $third_query->the_post();?>
			
            	<h2 style="padding-top:20px;"><strong><span class="features-header"><a href="/category/steven-sourman/">Steven Sourman: Conservative Correspondent</a></span></strong></h2>
                <p><em>Riot Radio's conservative correspondent tells it like it <del>was</del> is.</em></p>
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
	
                <?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  the_post_thumbnail('features-image',array('class'=>'left'));
				} 
				the_excerpt();

				endwhile;
				
				wp_reset_postdata();
			 ?>
		</div>	
        
        
        <!--fourth category-->
        <div class="features-page" style="margin-left:-14px;border-top:1px solid black;padding-left:40px;margin-top:-48px;">
             <?php 
				$arguments = array(
					'category_name' => 'Best Lyrics', 'posts_per_page' => 1, 'order' => 'DESC'
				);				
				$fourth_query = new WP_Query($arguments);
				while( $fourth_query->have_posts() ) : $fourth_query->the_post();?>
				
                <h2 style="padding-top:20px;"><strong><span class="features-header"><a href="/category/best-lyrics/">Best Lyrics</a></span></strong></h2>
                <p><em>Top lyrics from some great songs that you may not have thought of.</em></p>
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
	
                <?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  the_post_thumbnail('features-image',array('class'=>'left'));
				} 
				the_excerpt();

				endwhile;
				
				wp_reset_postdata();
			 ?>
		</div>	

	





			</div><!-- #content -->
		</div><!-- #container -->
<?php get_footer(); ?>
