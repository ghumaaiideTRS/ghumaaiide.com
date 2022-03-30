<?php
/*
 Template Name: facts
 */
?>
<?php get_header();

?>
<section>
    <?php $args = array(
        'post_type' => 'facts',
    );
    $facts = new WP_Query($args);
    while ($facts->have_posts()) {
        $facts->the_post(); ?>
        <div class="card">
            <div class="card-image">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID($facts->the_post())); ?>">
                </a>
            </div>

            <div class="card-description">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3></a>
                </a>
                <p>Posted by <?php the_author(); ?></p>
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                <p><?php the_excerpt(); ?></p>
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
