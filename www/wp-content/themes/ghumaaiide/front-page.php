<?php

get_header();
?>
<section>
    
    
		<div class="welcome">
			<p class="big-text">GHUMAAIIDE</p>
			
		</div>

		<div class="search">
			<form method="get" action="#">
							<div class="input-group">
								<input type="text" class="form-control" name="record"
									placeholder="Which palce are you looking for?" required>
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</div>
								<div class="input-group-btn">
									<button class="btn btn-default" type="reset">
										<i class="glyphicon glyphicon-reset"></i> <i
											class="material-icons">Reset</i>
									</button>
								</div>
							</div>
						</form>
		</div>

		<div class="tourguide">
			<h2>A complete tour guide all over Nepal</h2>
		</div>

		<div class="container">
			<a href="" class="btn btn-first">Go To Home</a>
		</div>
</section>

<a href="<?php echo site_url(); ?>/blog/">
    <h2 class="section-heading">Blogs</h2>
</a>
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


<a href="<?php echo site_url(); ?>/facts/">
    <h2 class="section-heading">FACTS</h2>
</a>
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
