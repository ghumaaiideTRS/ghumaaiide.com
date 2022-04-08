<?php
/* Template Name: Contact */

get_header();

$ts_content = acf_field('contact_heading_&_description');


$form_title = acf_field('ss_form_title');
$form_shortcode = acf_field('ss_form_shortcode');

$repeater = acf_repeater('contact_and_address_repeater');

$map = acf_field('ss_contact_map');
?>
<section class="contact container py-2 py-lg-4 pt-xxl-6 pb-xxl-7">
	<div class="row no-gutters">
		<div class="col-lg-5 block-left">
			<?php if (!empty($ts_content)) { ?>
				<div class="contact-top">
					<?php echo wpautop($ts_content); ?>
				</div>
			<?php } ?>
			<!--/.contact-top -->

			<?php if ($repeater) {
			?>
				<div class="contact-bottom">

					<?php foreach ($repeater as $c) {
						$icon = acf_subfield($c, 'ss_icon');
						$link = acf_subfield($c, 'ss_link');
						if ($link) {
							$link_url = $link['url'];
							$link_title = $link['title'];
						}
						$des = acf_subfield($c, 'ss_description');
					?>

						<div class="contact-item">
							<div class="icon-holder">
								<i class="icon icon-<?php echo $icon; ?>"></i>
							</div>
							<!--/.icon-holder -->
							<?php if (!empty($link || $des)) { ?>
								<div class="detail-holder">
									<?php if (!empty($link)) { ?>
										<h6><a href="<?php echo $link_url; ?>"><?php echo $link_title; ?></a></h6>
									<?php } ?>
									<?php if (!empty($des)) { ?>
										<?php echo wpautop($des); ?>
									<?php } ?>
								</div>
							<?php } ?>
							<!--/.detail-holder -->
						</div>
						<!--/.contact-item -->
					<?php } ?>

				</div>
				<!--/.contact-bottom -->
			<?php } ?>
		</div>
		<!--/.block-left -->

		<div class="col-lg-7 block-right">
			<div class="form-holder">
				<?php if (!empty($form_title)) { ?>
					<header class="block-heading has-bg-text">
						<h2><?php echo $form_title; ?></h2>
					</header>
				<?php } ?>
				<?php if (!empty($form_shortcode)) { ?>
					<?php echo do_shortcode($form_shortcode); ?>
				<?php } ?>
			</div>
			<!--/.form-holder -->
		</div>
		<!--/.block-right -->
	</div>
</section>
<!--/.contact -->
<?php if ($map) { ?>
	<section class="contact-map">
		<?php echo wp_get_attachment_image($map, array(1440, 486), false); ?>
	</section>
<?php } ?>
<!--/.contact-map -->
<?php
get_footer();

