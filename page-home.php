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
						<?php the_title(); ?>
					</div>
					
					<?php endwhile;
					wp_reset_postdata();
					?>


					<!-- Next and previous buttons -->
					<a class="prev" onclick="plusSlides(-1)">left</a>
					<a class="next" onclick="plusSlides(1)">right</a>

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

					<script>
						let slideIndex = 1;
						showSlides(slideIndex);

						// Next/previous controls
						function plusSlides(n) {
						showSlides(slideIndex += n);
						}

						// Thumbnail image controls
						function currentSlide(n) {
						showSlides(slideIndex = n);
						}

						function showSlides(n) {
						let i;
						let slides = document.getElementsByClassName("hero-slide");
						let dots = document.getElementsByClassName("dot");
						if (n > slides.length) {slideIndex = 1}
						if (n < 1) {slideIndex = slides.length}
						for (i = 0; i < slides.length; i++) {
							slides[i].style.display = "none";
						}
						for (i = 0; i < dots.length; i++) {
							dots[i].className = dots[i].className.replace(" active", "");
						}
						slides[slideIndex-1].style.display = "block";
						dots[slideIndex-1].className += " active";

						}
					</script>

					



				</section>

			</main>

		</div>

	</div>


<?php get_footer(); ?>
