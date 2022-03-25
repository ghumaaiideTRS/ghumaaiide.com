<?php
/* Template Name: contact
*/

get_header();
?>
<section class="row">
    <div class="col-lg-12">
        <H2>Contact Ghumaaiide</H2>
        <p>While we are good with exploring places, there are simpler ways for us to get in touch and answer your questions.</p>
        <div class="form">
            <?php echo do_shortcode('[contact-form-7 id="301" title="Contact form 1"]'); ?>
        </div>
    </div>
</section>
<?php
get_footer();
