<?php
/**

 * Template Name: Default
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please browse readme.txt for credits and forking information
 * @package Lighthouse
 */

get_header();?>

<?php the_post(); ?>
<div class="container">
	<div id="primary" class="col-md-10 col-md-offset-1 content-area">

		<main id="main" class="site-main" role="main">
			<h2><?php the_title(); ?></h2>
			<hr>
			<p class="paragrapheaccueil">
				<?php the_content(); ?>
			</p>
		</main>
	</div><!--primary-->
</div><!--container-->

<?php get_footer(); ?>
