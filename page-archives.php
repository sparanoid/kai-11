<?php
/* This is just a copy with minor edits from original Twenty Eleven template page. */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php // get_template_part( 'content', 'page' ); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">

						<p id="tag-cloud"><?php wp_tag_cloud('smallest=9&largest=30&unit=px&order=ASC&number=0'); ?></p>

						<h2><?php _e( 'Archives', 'twentyeleven' ); ?></h2>
						<ul>
						<?php query_posts('showposts=-1');
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; else: ?>
							<li><?php _e( 'Nothing Found!', 'twentyeleven' ); ?></li>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
						</ul>

						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyeleven' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>