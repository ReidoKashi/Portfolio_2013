<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section id="primary">
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



	
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php
						printf( __(  '%s_', 'twentyeleven' ), '<span>' . single_cat_title( '', false ) . '</span>' );
					?></h1>

					<?php
						$category_description = category_description();
						if ( ! empty( $category_description ) )
							echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
					?>
				</header>

				

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

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
		</section>
<?php get_footer(); ?>