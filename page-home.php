<?php
/*
 Template Name: Homepage
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="">

			<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<section class="hero">
					
					<?php
					$loop = new WP_Query(
						array(
							'post_type' => 'hero-slides',
							'order'     => 'ASC'
						)
					);
					while ( $loop->have_posts() ) : $loop->the_post();
					?>

					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					
					<div class="hero-slide" style="background-image: url('<?php echo $image[0]; ?>')">
						<div class="overlay <?php the_field('overlay_position'); ?> has-stripes--green">
							<h2><?php the_title(); ?></h2>

							<?php if( get_field('subtitle') ): ?>
								<h3><?php the_field('subtitle'); ?></h3>
							<?php endif; ?>

							<?php if( get_field('link') ): ?>
								<a href="<?php the_field('link'); ?>" class="button" title="<?php the_field('link_text'); ?>"><?php the_field('link_text'); ?></a>
							<?php endif; ?>
						</div>
					</div>
					
					<?php endwhile;
					wp_reset_postdata();
					?>


					<!-- Next and previous buttons -->
					<a class="prev" onclick="plusSlides(-1)"></a>
					<a class="next" onclick="plusSlides(1)"></a>

					<!-- The dots/circles -->
					<?php $slide_count = wp_count_posts( 'hero-slides' )->publish; ?>

					<?php echo '<div class="dots">';
					for ($i = 1; $i <= $slide_count; $i++) {
						echo '<span class="dot" onclick="currentSlide(';
						echo $i;
						echo ')"></span>';
						}
					echo '</div>';
					?>

				</section>

				<section class="stores wrap">

					<h2>Our Stores</h2>
					<h4>Select to find open hours and store details.</h4>

					<div class="stores-cntr">

					<?php
						$loop = new WP_Query(
							array(
								'post_type' => 'stores',
								'order'     => 'RAND'
							)
						);
						while ( $loop->have_posts() ) : $loop->the_post();
						?>

						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						
						<a href="<?php the_permalink(); ?>" class="store" alt="<?php the_title(); ?>">
							<div class="logo-cntr">
								<img class="image" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?> Thumbnail">
								<img class="logo" src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?> Logo">
							</div>

							<h3><?php the_title(); ?></h3>
						</a>
						
						<?php endwhile;
						wp_reset_postdata();
					?>
					</div>
					
					<a href="/stores" class="button">View All</a>

				</section>

				<section class="find-us wrap">
					<div class="green-background"></div>
					<img src="http://localhost:10008/wp-content/uploads/pexels-andrea-piacquadio-3775592-min-scaled.jpg" alt="people-looking-at-map">

					<div class="cntr">
						<h2>Find Us...</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						<a href="/find-us" class="button inverted medium">Find Us</a>
					</div>
				</section>

				<section class="coming-up wrap">

					<h2>What's Coming Up</h2>
					<h4>Lorem ipsum dolar sit amet.</h4>

					<div id="posts-cntr">

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
						
						<div class="post-cntr">
							<div class="post">
								<a href="<?php the_permalink(); ?>" class="image-cntr" alt="<?php the_title(); ?>">
									<img class="image" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?> Thumbnail">
								</a>
								<h3><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>
								<a class="button inverted small" href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">Read More</a>
							</div>
						</div>
						
						<?php endwhile;
						wp_reset_postdata();
						?>
					</div>

					<a id="btn-prev" class="prev"></a>
					<a id="btn-next" class="next"></a>

					<a href="/whats-on" class="button">View All</a>

					

					<script>
					</script>

				</section>

				<section class="signup">

				<div class="form">
					<h3>Be the first to know what's happening.</h3>

				<!-- Begin Mailchimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="https://hcdigital.us18.list-manage.com/subscribe/post?u=d157bada962c7fd9f0e2e0477&amp;id=26f2e95c12&amp;f_id=00611ce7f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
						
					<!-- <div class="indicates-required"><span class="asterisk">*</span> indicates required</div> -->
					<div class="mc-field-group">
						<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
					</label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
						<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
					</div>
					<div class="mc-field-group">
						<label for="mce-FNAME">First Name </label>
						<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
						<span id="mce-FNAME-HELPERTEXT" class="helper_text"></span>
					</div>
						<div id="mce-responses" class="clear foot">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d157bada962c7fd9f0e2e0477_26f2e95c12" tabindex="-1" value=""></div>
							<div class="optionalParent">
								<div class="clear foot">
									<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button medium">
									<!-- <p class="brandingLogo"><a href="http://eepurl.com/h8Lw2z" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p> -->
								</div>
							</div>
						</div>
					</form>
					</div>

					<!--End mc_embed_signup-->

					</div>

					<img src="/wp-content/uploads/pexels-hong-son-5071056-min-scaled.jpg" alt="">
				</section>

			</main>

		</div>

	</div>


<?php get_footer(); ?>
