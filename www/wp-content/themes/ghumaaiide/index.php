<?php get_header();

?>
<section>
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
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </a>
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