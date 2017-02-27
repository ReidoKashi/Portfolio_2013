<div id="container" class="hfeed">
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

	<div id="primary">
			<header>
			<div class="header_spacer">
			
			</div>
			<div class="logo_bar">
				<div class="logo">
				
				<a href="http://www.reidodesign.com/"></a>
				
				</div>
			</div>

		<nav id="navagation">
			<div class="nav_title_projects">
				<a href="http://reidodesign.com/blog"><img src="../../../../../css/img/blog/nav/nav_blog.png" /></a>
			</div>
			
			<div class="nav_holder_projects">
			<img src="../../../../../css/img/blog/nav/nav_4.jpg">
				<ul class="ui_nav">			
					<li class="ui_nav_proj"><a href="http://www.reidodesign.com/projects.html">projects</a></li>
					<li class="ui_nav_about"><a href="http://www.reidodesign.com/about.html">about</a></li>
					<li class="ui_nav_blog"><a href="http://www.reidodesign.com/blog/">blog</a></li>	
					<li class="ui_nav_shop"><a href="http://society6.com/reido">shop</a></li>
				</ul>
				
			</div>
		
		</nav>
	</div>


	
		
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				
			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
</div>