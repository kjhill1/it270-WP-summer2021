<?php
get_header();
?>

<div id="hero">
    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/golden_gardens-1-e1628011964739.jpg" alt="banner">
</div>
<!-- end hero div -->

<div class="wrapper">
<main>
<!-- If we have posts...
show me the post!!!
If not...
we do not have posts! -->

<h1 class="page-title">
<?php _e( 'Search results for this catagory', 'siteSummer1' );

$categories = get_the_category();
if (! empty( $categories)){
    echo esc_html($categories[0] ->name);
// Show Category name
}
?>

</h1>

<?php while(have_posts()) : the_post() ; ?>
<article class="posts">
<h1> <a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h1>
<div class="meta">
<span><b>Posted By:</b> <?php the_author() ;?></span>
<span><b>Posted On:</b> <?php the_time('F j, Y g:i a') ;?></span>
</div>
<!-- end META div -->
<div class="thumbnail">
<?php if(has_post_thumbnail()) : ?>
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail(); ?></a>
<?php endif; ?>
</div>
<!-- end THUMBNAIL -->
<?php the_excerpt() ; ?>
<span class="block">
<a href="<?php the_permalink(); ?>">Read More about <?php the_title(); ?></a></span>
</article>
<?php endwhile; ?>

</main>

<?php get_sidebar(); ?>

</div>
<!-- end wrapper -->
<?php
get_footer();

?>