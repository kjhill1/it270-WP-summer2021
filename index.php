<?php
/**
* The main template file.
* 
* @package kale
*/
?>
<?php get_header(); ?>

This is a test from the index page. Blog is working off index

Testing sidebars deault and bordered default. 
<div class="blog-feed">
<!-- Two Columns -->
<div class="row two-columns">
    <?php get_template_part('parts/feed'); ?>
    <?php get_sidebar('blog'); ?>
</div>
<!-- /Two Columns -->
<hr />
</div>

<?php get_footer(); ?>