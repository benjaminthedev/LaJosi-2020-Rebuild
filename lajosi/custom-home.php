<?php
/**
 * Template Name: Custom Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LaJosi_Golfing
 */

get_header();
?>

	<main id="primary" class="site-main home__page">

	<div class="main__wrapper">
		<div class="main__background" style="background-image: url(<?php the_field('main_background_image'); ?>)";>
			<div class="main__blackBox">
					<h3 class="main__firstHeader"><?php the_field('first_text'); ?></h3>
					<h3 class="main__secondHeader"><?php the_field('second_text'); ?></h3>

					<div class="main__underlineWrap">
						<img src="https://wordpress-293167-1596502.cloudwaysapps.com/wp-content/uploads/2020/11/underline.png" alt="Lajosi Golfing" class="main__underline">
					</div>

					<a href="<?php the_field('url'); ?>" class="main__anchor"><?php the_field('button_text'); ?></a>
					
			</div>
		</div>
	</div>


	
	
	<div class="three__boxes">
		<div class="box__one">
			<a href="<?php the_field('link_one_url'); ?>" class="box__a"><?php the_field('link_one_text'); ?></a>
		</div>

		<div class="box__two">
			<a href="<?php the_field('link_two_url'); ?>" class="box__a"><?php the_field('link_two_text'); ?></a>
		</div>

		<div class="box__three">
			<a href="<?php the_field('link_three_url'); ?>" class="box__a"><?php the_field('link_three_text'); ?></a>
		</div>
	</div>


	<div class="quote__wrapper">
		<div class="quote__content">
			<?php the_field('quote'); ?>
		</div>
	</div>


	<div class="image__bannerWrapper">
		<div class="image__background" style="background-image: url(<?php the_field('second_slider_background'); ?>)";>
			<div class="backBackground__wrap">
				<div class="main__blackBoxSecond">
						<div class="icon__countryWrap">
							<img src="<?php the_field('icon') ?>" alt="Lajosi Golfing">
						</div>

						<div class="image__bannerContentWrap">

							<h3 class="image__firstHeader"><?php the_field('second_slider_first_text'); ?></h3>
							<h3 class="image__secondHeader"><?php the_field('second_slider_second_text'); ?></h3>

							<div class="main__underlineWrap">
								<img src="https://wordpress-293167-1596502.cloudwaysapps.com/wp-content/uploads/2020/11/underline.png" alt="Lajosi Golfing" class="main__underline">
							</div>

						</div>
				</div>
			</div>

				<div class="button__wrapper">
					<a href="<?php the_field('second_slider_btn_url'); ?>" class="main__anchor"><?php the_field('second_slider_btn_text'); ?></a>
				</div>
		</div>
	</div>


	<div class="instagram__wrapper">

		<?php the_field('ig_section'); ?>

	</div>




	</main><!-- #main -->

<?php
get_footer();
