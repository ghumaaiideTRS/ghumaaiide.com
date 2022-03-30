</main>
<footer>
    <div id="left-footer">
        <h3>Quick Links</h3>
        <p>
            <?php wp_nav_menu(

                array(
                    'menu' => 'Footer',
                    'container' => '',
                    'theme_location' => 'footer',
                    'item_wrap' => ''
                )
            ); ?>
        </p>
        <?php echo do_shortcode('[contact-form-7 id="311" title="Footer Form"]');?>
    </div>

    <div id="right-footer">
        <h3>Follow us on</h3>
        <div id="social-media-footer">
            <ul>
                <li>
                    <a href="https://www.facebook.com/Ghumaaiide/">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
        <?php
        $copyright_text = get_field('copyright_text', 'option'); ?>
        <?php if (!empty($copyright_text)) { ?>
            <p><?php echo $copyright_text; ?></p><?php } ?>

    </div>

</footer>

</main>

<?php wp_footer(); ?>
</body>

</html>