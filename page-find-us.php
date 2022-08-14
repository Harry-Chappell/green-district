<?php
/*
 Template Name: Find Us
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
<!-- Set Homepage ID -->
<?php $home_id = get_option('page_on_front'); ?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<h1 class="page-title"><?php the_title(); ?></h1>

							<div class="contact">
								<div class="contact-details">
									<?php if( get_field('phone_number', $home_id) ): ?>
										<a class="footer-contact--phone" href="tel:<?php echo str_replace(' ', '', get_field('phone_number', $home_id)); ?>"><?php echo str_replace(' ', '&nbsp;', get_field('phone_number', $home_id)); ?></a>
									<?php endif; ?>
									<?php if( get_field('email_address', $home_id) ): ?>
										<a class="footer-contact--email" href="mailto:<?php the_field('email_address', $home_id); ?>" title="Email Address"><?php the_field('email_address', $home_id); ?></a>
									<?php endif; ?>
									<?php if( get_field('address', $home_id) ): ?>
										<p class="footer-contact--address"><?php the_field('address', $home_id); ?></p>
									<?php endif; ?>
								</div>

								<div class="social">

									<?php if( get_field('tiktok', $home_id) ): ?>
										<a href="<?php the_field('tiktok', $home_id); ?>" title="Tiktok"><i class="fa-brands fa-tiktok"></i></a>
									<?php endif; ?>

									<?php if( get_field('instagram', $home_id) ): ?>
										<a href="<?php the_field('instagram', $home_id); ?>" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
									<?php endif; ?>

									<?php if( get_field('facebook', $home_id) ): ?>
										<a href="<?php the_field('facebook', $home_id); ?>" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
									<?php endif; ?>

									<?php if( get_field('twitter', $home_id) ): ?>
										<a href="<?php the_field('twitter', $home_id); ?>" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
									<?php endif; ?>

									<?php if( get_field('youtube', $home_id) ): ?>
										<a href="<?php the_field('youtube', $home_id); ?>" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
									<?php endif; ?>

									<?php if( get_field('linkedin', $home_id) ): ?>
										<a href="<?php the_field('linkedin', $home_id); ?>" title="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
									<?php endif; ?>

								</div>
							</div>

							<div class="map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48663.14141814384!2d-1.6028025158489236!3d53.804824873375075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48795eb565578bb1%3A0xc1c9ebda90c9d719!2s44%20Park%20View%20Ave%2C%20Burley%2C%20Leeds%20LS4%202LH!5e0!3m2!1sen!2suk!4v1660512258484!5m2!1sen!2suk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
