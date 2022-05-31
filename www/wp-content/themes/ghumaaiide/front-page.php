<?php

get_header();
?>
<section>
    <div class="container">
        <div class="col-lg-12 text-center">
            <h6>About <span>Us</span></h6>
            <h2>Ghumaaiide</h2>
            <div class="content-holder">
                <p>We introduce you a complete tour guide all over Nepal. Be with us and explore Nepal.</p>
                <p>Whereever you go our network will follow you!</p>
                <a class="btn-readmore" href="<?php echo site_url(); ?>/about-us/">Read More</a>
            </div>
            <!--/.title-holder -->
        </div>
        <!--/.block-left -->
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="<?php echo site_url(); ?>/blog/">
                    <h2 class="section-heading">Blogs</h2>
                </a>
            </div>
            <div class="col-lg-12">
                <?php $args = array(
                    'post_type' => 'post',
                );
                $blog = new WP_Query($args);
                while ($blog->have_posts()) {
                    $blog->the_post(); ?>
                    <div class="card">
                        <div class="card-image">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                            </a>
                        </div>

                        <div class="card-description">
                            <a href="<?php the_permalink(); ?>">
                                <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                            </a>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                        </div>
                    </div>
                <?php
                    wp_reset_query();
                } ?>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <a href="<?php echo site_url(); ?>/facts/">
                <h2 class="section-heading">FACTS</h2>
            </a>
        </div>

        <div class="col-lg-12">
            <?php $args = array(
                'post_type' => 'facts',
            );
            $facts = new WP_Query($args);
            while ($facts->have_posts()) {
                $facts->the_post(); ?>
                <div class="card">
                    <div class="card-image">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                        </a>
                    </div>

                    <div class="card-description">
                        <a href="<?php the_permalink(); ?>">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </a>
                        <p>Posted by <?php the_author(); ?></p>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                    </div>
                </div>
            <?php
                wp_reset_query();
            } ?>
        </div>
</section>
<?php
get_footer();
