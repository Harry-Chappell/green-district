<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main  id="posts-cntr" class="archive" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

							<article class="post post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

									<a href="<?php the_permalink(); ?>" class="image-cntr" alt="<?php the_title(); ?>">
										<img class="image" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?> Thumbnail">
									</a>
									<h3><?php the_title(); ?></h3>
									<div class="categories"><?php printf( __( '', 'bonestheme' ).'%1$s', get_the_category_list(', ') ); ?></div>

									<?php the_excerpt(); ?>
									<a class="button inverted small" href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">Read More</a>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
