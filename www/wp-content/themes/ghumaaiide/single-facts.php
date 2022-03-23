<?php get_header();?>
<section>
    <div class="card">
        <div class="card-image">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
            </a>
        </div>

        <div class="card-description">
            <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
            <p>Posted by <?php the_author(); ?></p>
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
            <?php the_content(); ?>
        </div>
    </div>
    </div>
</section>
<?php get_footer();?>