<?php
/**
 * Template Name: Actus-page2
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Please browse readme.txt for credits and forking information
 * @package Lighthouse
 */

get_header(); ?>
	<style>
	#actu-container{
		display:flex;
		flex-direction:column;
		align-items:center;
	}
	
	</style>
	<div class="container">
            <div class="row">
                <div id="primary" class="col-md-9 content-area">
						<main id="actu-container" class="site-main" role="main">
					<h2>Actualités</h2>
						<?php

						
							global $more;
							$more = 0;
							query_posts('cat=6');
							if(have_posts()) : while(have_posts()) : the_post();
							?>
							<div class="actus">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php //echo the_content('More ...',true); ?>
							</div>
							<?php
							echo"<p>Posté le : ";
							the_date('m-Y') ;
							echo "</p>";
							?>
							<p><?php
							endwhile;
							endif;
							wp_reset_query();
							?>



						</main><!-- #main -->
				</div><!-- #primary -->

				<?php get_sidebar('sidebar-1'); ?>
			    </div><!--row-->      

		</div><!--.container-->
		<?php get_footer(); ?>