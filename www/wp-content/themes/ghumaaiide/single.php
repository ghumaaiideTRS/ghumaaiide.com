<?php get_header(); ?>
<div align="center">
    <H2> <?php echo get_the_title();?></H2>
    <?php the_content();?>
    
</div>
<div class="card-description">
    <php the_content();?>
</div>
</div>

<div id="comments-section">
    <?php comment_form();
    $comments_number = get_comments_number();
    if ($comments_number != 0) { ?>

        <div class="comments">
            <h3>What others say</h3>
            <ol class="all-comments">
                <?php
                $comments = get_comments(array(
                    'post_id' => $post->ID,
                    'status' => 'approve'
                ));
                wp_list_comments(array(
                    'per_page' => 15
                ), $comments);
                ?>
            </ol>
        </div>
    <?php } ?>
</div><?php
        get_footer();
