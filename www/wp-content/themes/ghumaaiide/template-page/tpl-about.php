<?php
/*
Template Name: about-us
*/

get_header();
?>

?>
<section class="block-about container py-2 py-lg-4 pt-xxl-6 pb-xxl-8">
	<div class="detail-block" data-aos="fade-down">
		<div class="row">
			<div class="col-lg-4 col-xxl-3 block-left">
				<div class="title-holder">
					<h6>About <span>Us</span></h6>
					<h2>Ghumaaiide Crew Members</h2>
				</div>
				<!--/.title-holder -->
			</div>
			<!--/.block-left -->

			<div class="col-lg-8 col-xxl-9 block-right">
				<div class="content-holder">
					<p>
					“Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.”
					</p>

					<p>
						“Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.”
					</p>
				</div>
				<!--/.content-holder -->
			</div>
			<!--/.block-right -->
		</div>

		<picture>
			<source srcset="<?php echo site_url(); ?>/media/about.webp" type="image/webp">
			<source srcset="<?php echo site_url(); ?>/media/about.jpg" type="image/jpg">
			<img width="1284" height="433" loading="lazy" src="<?php echo site_url(); ?>/media/about.jpg" alt="Blog Image">
		</picture>
	</div>
</section>
<!--/.block-about -->

<article class="info-block">
	<div class="row m-0 no-gutters">
		<div class="col-lg-5 block-left bg-cover" data-aos="fade-right">
			<img src="<?php echo home_url('/media/co-founders.jpg') ?>" alt="Co-founders">
		</div>
		<!--/.info-block -->

		<div class="col-lg-7 block-right" data-aos="fade-left">
			<div class="content-holder">
				<div class="border-title">
					<h2>About our co-founders</h2>
				</div>
				<!--/.border-title -->

				<p>
					It's difficult to find examples of lorem ipsum in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across the lorem ipsum passage in a book of old metal type samples. So far he hasn't relocated where he once saw the passage, but the popularity of Cicero in the 15th century supports the theory that the filler text has been used for centuries.	</p>

				<p>
					It's difficult to find examples of lorem ipsum in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across the lorem ipsum passage in a book of old metal type samples. So far he hasn't relocated where he once saw the passage, but the popularity of Cicero in the 15th century supports the theory that the filler text has been used for centuries.</p>
			</div>
			<!--/.content-holder -->
		</div>
		<!--/.block-right -->
	</div>
</article>
<!--/.info-block -->

<section class="about-form container py-2 py-lg-4 pt-xxl-6 pb-xxl-7">
	<div class="form-primary form-primary--lg" data-aos="fade-down">
		<header class="form-primary__heading text-center">
			<h2>Sell Your House Now<small>Fill out the quick form to get an offer on your house TODAY!</small></h2>
		</header>
		<?php echo do_shortcode('[gravityform id=2 title=false description=false ajax=true tabindex=999]') ?>
	</div><!-- /.form-primary -->
</section>

<?php
get_footer();
