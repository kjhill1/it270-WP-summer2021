<?php
get_header();
/* Template Name: Front Page */
?>

<div id="hero">
<img src="https://kellywithwordpress.design/wp-content/uploads/DIscovery-Park-Dusk-e1627761529692.jpg" alt="banner">
</div>
<!-- end div hero -->

<div id="wrapper">
<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail() ; ?>
<?php endif; ?>
<!-- if we have posts...
show me the post!!!
If not...
we do not have posts! -->

<?php while(have_posts()) : the_post() ; ?>

<?php the_content() ; ?>

<?php endwhile; ?>

</div>
<!-- end div wrapper -->

<? get_footer(); 
?>