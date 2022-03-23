<?php 
/*
Template Name: search
*/
get_header();

?>
<a href="">
    <h2 class="section-heading">Search Results</h2>
</a>
<section>
<form method="get" action="<?php echo home_url() ?>">
    <input type="search" name="s" placeholder="Search Here..." value="<?php echo
    get_search_query(); ?>">
    <input type="submit" id="search-btn" value="">
</form>
</section>
<?php
get_footer();