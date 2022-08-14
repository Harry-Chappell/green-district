	<!-- Set Homepage ID -->
	<?php $home_id = get_option('page_on_front'); ?>

			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div class="inner-footer wrap">
					<div class="logo-social">
						<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

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

					<div class="footer-contact">
						<p>Green District General Office</p>

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
				</div>

				<div class="sub-footer wrap cf">

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					
					<p>Company no. 0123456789</p>

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
