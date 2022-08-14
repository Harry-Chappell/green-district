<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<header class="article-header">

									<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>

									<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
										<img class="featured-image" style="width: 100%;" src="<?php echo $url ?>" />
 
									</header>

								<section class="entry-content cf">
									<?php the_content();?>
								</section> <!-- end article section -->

								
							</article>
							
							<?php endwhile; ?>
							
							<?php else : ?>
								
								<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

							<?php endif; ?>

						</main>
						
						<aside class="sidebar m-all t-1of3 d-2of7">

							<?php if( get_field('logo') ): ?>
								<img class="store--logo" src="<?php the_field('logo'); ?>" title="<?php the_title(); ?> Logo">
							<?php endif; ?>

							<table class="open-hours day-<?php echo date('w'); ?>">
								<tr class="monday">
									<td>Monday</td>
									<td>
										<?php if( get_field('oh_mon_open') ): ?>
											<?php the_field('oh_mon_open_time'); ?> - <?php the_field('oh_mon_close_time'); ?>
										<?php else: ?>
											Closed
										<?php endif; ?>
									</td>
								</tr>
								<tr class="tuesday">
									<td>Tuesday</td>
									<td>
										<?php if( get_field('oh_tue_open') ): ?>
											<?php the_field('oh_tue_open_time'); ?> - <?php the_field('oh_tue_close_time'); ?>
										<?php else: ?>
											Closed
										<?php endif; ?>
									</td>
								</tr>
								<tr class="wednesday">
									<td>Wednesday</td>
									<td>
										<?php if( get_field('oh_wed_open') ): ?>
											<?php the_field('oh_wed_open_time'); ?> - <?php the_field('oh_wed_close_time'); ?>
										<?php else: ?>
											Closed
										<?php endif; ?>
									</td>
								</tr>
								<tr class="thursday">
									<td>Thursday</td>
									<td>
										<?php if( get_field('oh_thu_open') ): ?>
											<?php the_field('oh_thu_open_time'); ?> - <?php the_field('oh_thu_close_time'); ?>
										<?php else: ?>
											Closed
										<?php endif; ?>
									</td>
								</tr>
								<tr class="friday">
									<td>Friday</td>
									<td>
										<?php if( get_field('oh_fri_open') ): ?>
											<?php the_field('oh_fri_open_time'); ?> - <?php the_field('oh_fri_close_time'); ?>
										<?php else: ?>
											Closed
										<?php endif; ?>
									</td>
								</tr>
								<tr class="satday">
									<td>Saturday</td>
									<td>
										<?php if( get_field('oh_sat_open') ): ?>
											<?php the_field('oh_sat_open_time'); ?> - <?php the_field('oh_sat_close_time'); ?>
										<?php else: ?>
											Closed
										<?php endif; ?>
									</td>
								</tr>
								<tr class="sunday">
									<td>Sunday</td>
									<td>
										<?php if( get_field('oh_sun_open') ): ?>
											<?php the_field('oh_sun_open_time'); ?> - <?php the_field('oh_sun_close_time'); ?>
										<?php else: ?>
											Closed
										<?php endif; ?>
									</td>
								</tr>
							</table>

							<div class="contact-details">

								<?php if( get_field('phone_number') ): ?>
									<a class="store--phone" href="tel:<?php echo str_replace(' ', '', get_field('phone_number')); ?>"><?php echo str_replace(' ', '&nbsp;', get_field('phone_number')); ?></a>
								<?php endif; ?>
								<?php if( get_field('email_address') ): ?>
									<a class="store--email" href="mailto:<?php the_field('email_address'); ?>" title="Email Address"><?php the_field('email_address'); ?></a>
								<?php endif; ?>
								<?php if( get_field('website') ): ?>
									<a class="store--website" href="<?php the_field('website'); ?>"><?php the_field('website'); ?></a>
								<?php endif; ?>

							</div>

							<div class="social">

								<?php if( get_field('tiktok') ): ?>
									<a href="<?php the_field('tiktok'); ?>" title="Tiktok"><i class="fa-brands fa-tiktok"></i></a>
								<?php endif; ?>

								<?php if( get_field('instagram') ): ?>
									<a href="<?php the_field('instagram'); ?>" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
								<?php endif; ?>

								<?php if( get_field('facebook') ): ?>
									<a href="<?php the_field('facebook'); ?>" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
								<?php endif; ?>

								<?php if( get_field('twitter') ): ?>
									<a href="<?php the_field('twitter'); ?>" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
								<?php endif; ?>

								<?php if( get_field('youtube') ): ?>
									<a href="<?php the_field('youtube'); ?>" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
								<?php endif; ?>

								<?php if( get_field('linkedin') ): ?>
									<a href="<?php the_field('linkedin'); ?>" title="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
								<?php endif; ?>

							</div>

						</aside>

				</div>

			</div>

<?php get_footer(); ?>
