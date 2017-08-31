<?php
/**

 * Template Name: Accueil
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
		<div class="row lien-ext">
			<div id="" class="col-md-4">
				<div class="important-link">
					<a href="#">
						<div class="logo"></div>
							<h3 class="nom-lien">Pronote</h3>
							<p class="description-lien">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</a>
				</div>
			</div>
			<div id="" class="col-md-4">
				<div class="important-link">
					<a href="#">
						<div class="logo"></div>
							<h3 class="nom-lien">laclasse.com</h3>
							<p class="description-lien">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</a>
				</div>
			</div>
			<div id="" class="col-md-4">
				<div class="important-link">
					<a href="#">
						<div class="logo"></div>
							<h3 class="nom-lien">educ.gouv</h3>
							<p class="description-lien">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</a>
				</div>
			</div>
		</div><!--row-->
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
