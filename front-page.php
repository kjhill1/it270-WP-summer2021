<?php
/**
* The Front Page template file.
* 
* @package kale
*/
?>
<?php get_header(); ?>
<?php 
echo do_shortcode('[smartslider3 slider="2"]');
?> 
<?php dynamic_sidebar('smartslider_area_1'); ?>
<div class="blog-feed">
<!-- Two Columns -->
<div class="row two-columns">
    <!-- <?php get_template_part('parts/feed'); ?> -->
    <?php get_sidebar(); ?>
</div>
<!-- /Two Columns -->
<hr />
</div>

    <?php get_sidebar(); ?>
<!-- </div> -->


<?php get_footer(); ?>