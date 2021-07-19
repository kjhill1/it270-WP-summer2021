<?php
get_header();

?>


<!-- THIS IS OLGO's page. It is known as "news" in WP. Mine blog page was broken and we could not fix it. This has future code from videos. Watch videos to ensure that style and nav is right -->
<!-- <div id="hero">
     <img src="<?php echo get_template_directory_uri();?>/../../uploads/yellowstone-inner.jpg" alt="banner">
    </div> -->
    <!-- commented out end hero -->
<div class="wrapper">

<div class="thumbnail">

<?php if(has_post_thumbnail()) : ?>
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail(); ?></a>
<?php endif;  ?>
</div>
<!-- end thumbnail -->
<main>
<!-- if we have posts...
show me the post!!!
If not...
we do not have posts! -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post() ; ?>


<article class="posts">
<h1> <a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h1>

<div class="meta">

<span><b>Posted By:</b> <?php the_author()  ;?></span>
<span><b>Posted On:</b> <?php the_time('F j, Y g:i a')  ;?></span>
</div>
<!-- end meta div -->


<?php the_excerpt() ;  ?>

<span class="block"><a href="<?php the_permalink();  ?>">Read More about <?php the_title(); ?>
</a></span>

</article>
<?php endwhile; ?>

<!-- below is code that had not done yet, this came from Olga's code -->
<?php 
echo '<h2>Search Results:</h2>
<p>Sorry, but nothing matched your search terms.  <br>
Would you like to search again with different keywords?</p>';
?>
<?php get_search_form(); ?>
<?php endif; ?>
<!-- PLEASE REMEMBER, the search results originally is working off the index.php page -->
</main>

<?php get_sidebar(); ?>

</div>
<!-- end wrapper -->
<?php 
get_footer();

?>