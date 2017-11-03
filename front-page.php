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


			<!-- <h4>In the mean time, let's be friends!</h4> -->

	        <div id="mailchimp">
	        	<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
				<form action="https://twitter.us10.list-manage.com/subscribe/post?u=b8dc9c8a56f52bac1dd19f3e7&amp;id=204dc9189d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					<h2>Be the first to know when we launch!</h2>
					<!-- <p>Subscribe and you will be the first to know!</p>  -->
					<!-- <p>And we promise not to spam :)</p> -->
				<!-- <div class="indicates-required"><span class="asterisk">*</span> indicates required</div> -->
				<div id="mc-form-info-right">
				<div class="mc-field-group">
					<!-- <label for="mce-FNAME">First Name </label> -->
					<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
				</div>
				<div class="mc-field-group">
					<!-- <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span> -->
				</label>
					<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Name@gmail.com">
				</div>

				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b8dc9c8a56f52bac1dd19f3e7_204dc9189d" tabindex="-1" value=""></div>
				    
				    </div>
				</div>
				</form>
				</div>

				<div class="social-links">
	        	<?php 
	        		$youtube_url=get_option('test_youtube_url');
	        		if($youtube_url){
	        			echo "<a href=" . $youtube_url . "><img src='" . get_template_directory_uri() . "/images/yt_icon.svg'/></a>";
	        		}
	        		$facebook_url=get_option('test_fb_url');
	        		if($facebook_url){
	        			echo "<a href=" . $facebook_url . "><img src='" . get_template_directory_uri() . "/images/fb_icon.svg'/></a>";
	        		}
	        		$instagram_url=get_option('test_instagram_url');
	        		if($instagram_url){
	        			echo "<a href=" . $instagram_url . "><img src='" . get_template_directory_uri() . "/images/instagram_icon.svg'/></a>";
	        		}
	        		$twitter_url=get_option('test_twitter_url');
	        		if($twitter_url){
	        			echo "<a href=" . $twitter_url . "><img src='" . get_template_directory_uri() . "/images/twitter_icon.svg'/></a>";
	        		}
	        	?>
	        </div>
	        
				<!--End mc_embed_signup-->
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
