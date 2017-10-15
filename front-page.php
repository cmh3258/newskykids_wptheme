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
		<main id="main" class="site-main">
			<h1>Sunny!</h1>


			<?php $twitter_url=get_option('test_twitter_url');?>
				// Show the twitter URL in footer.
			<?php _e('Twitter URL') ?> -<?php echo $twitter_url ?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
// get_footer();
