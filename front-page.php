<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package newsky
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-holder">
			<h1>A whole new Adventure, Coming Soon!</h1>


			<h4>In the mean time, let's be friends!</h4>

			<div class="social-links">
	        	<?php 
	        		$twitter_url=get_option('test_twitter_url');
	        		if($twitter_url){
	        			echo "<a href=" . $twitter_url . "><img src='" . get_template_directory_uri() . "/images/twitter_icon.svg'/></a>";
	        		}
	        		$facebook_url=get_option('test_fb_url');
	        		if($facebook_url){
	        			echo "<a href=" . $facebook_url . "><img src='" . get_template_directory_uri() . "/images/fb_icon.svg'/></a>";
	        		}
	        		$youtube_url=get_option('test_youtube_url');
	        		if($youtube_url){
	        			echo "<a href=" . $youtube_url . "><img src='" . get_template_directory_uri() . "/images/yt_icon.svg'/></a>";
	        		}
	        	?>
	        </div>






<!-- 
			fb_icon
			twitter_icon
			youtube_icon -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
// get_footer();
