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

<!-- Two Columns -->
<div class="row two-columns">
    
</div>
<!-- /Two Columns -->

</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>