<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<div id="posts-cntr" class="archive">

								<?php
								$loop = new WP_Query(
									array(
										'post_type' => 'post',
										'order'     => 'ASC'
									)
								);
								while ( $loop->have_posts() ) : $loop->the_post();
								?>

								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								
								<div class="post">
									<a href="<?php the_permalink(); ?>" class="image-cntr" alt="<?php the_title(); ?>">
										<img class="image" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?> Thumbnail">
									</a>
									<h3><?php the_title(); ?></h3>
									<div class="categories"><?php printf( __( '', 'bonestheme' ).'%1$s', get_the_category_list(', ') ); ?></div>
									<?php the_excerpt(); ?>
									<a class="button inverted small" href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">Read More</a>
								</div>
								
								<?php endwhile;
								wp_reset_postdata();
								?>
							</div>


						</main>

				</div>

			</div>


<?php get_footer(); ?>
