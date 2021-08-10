<?php
get_header();

?>
<div id="hero">
<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/gallery-1.jpg" alt="banner">
</div>

<div class="wrapper">
<main>
<!-- if we have posts...
show me the post!!!
If not...
we do not have posts! -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post() ; ?>

<article class="posts">
<h1> <?php the_title() ;?></h1>

<div class="meta">
<span><b>Posted By:</b> <?php the_author() ;?></span>
<span><b>Posted On:</b> <?php the_time('F j, Y g:i a') ;?></span>
</div>

<!-- end META div -->

</article>


<?php the_content() ; ?>
<?php endwhile; ?>
<?php else : ?>
    <?php echo
'<h2>Search Results:</h2>
<p>OH NO! Whammy. Nothing Found. Try you luck agian!</p>';
?>
<?php get_search_form(); ?>
<?php endif; ?>
<span class="next-previous">
<?php (previous_post_link()) ? '%link' : ''; ?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : ''; ?>
</span>
<?php comments_template(); ?>
</main>

<?php get_sidebar(); ?>


</div>
<!-- end WRAPPER DIV -->


<?php 
get_footer();

?>