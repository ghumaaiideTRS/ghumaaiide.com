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
        <copyright>Copywrite Ⓒ GHUMAAIIDE 2021 | Designed by Bibek Timalsina</copyright>
    </div>
</footer>

</main>

<?php wp_footer(); ?>
</body>

</html>