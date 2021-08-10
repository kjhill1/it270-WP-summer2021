<?php
get_header();
?>

<!-- <div id="search-error">
    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/Screen-Shot-2021-08-06-at-3.43.54-PM.png" alt="still searching" > 
    </div> -->
<div class="wrapper">
<main>
<?php if(have_posts()) : ?>
    <div id="search-error">
    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/Screen-Shot-2021-08-06-at-3.31.54-PM.png" alt="found" > 
</div>
    <h1 class="page-title">
<?php _e( 'Found for: ', 'siteSummer1' ); ?>
<span class="page-description"><?php echo get_search_query(); ?></span>
</h1>

<h2 class="pagetitle">Found: 
    <?php /* Search Count */ 
    $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles/pages'); wp_reset_query(); ?></h2>

<?php while(have_posts()) : the_post() ; ?>
<article class="posts">
<h1> <a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h1>
<div class="meta">
<span><b>Posted By:</b> <?php the_author() ;?></span>
<span><b>Posted On:</b> <?php the_time('F j, Y g:i a') ;?></span>
</div>
<!-- end meta div -->
<div class="thumbnail">
<?php if(has_post_thumbnail()) : ?>
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail(); ?>
</a>
<?php endif; ?>
</div>
<!-- end thumbnail div -->
<?php the_excerpt() ; ?>
<span class="block">
<a href="<?php the_permalink(); ?>">Read More about <?php the_title(); ?>
</a></span>
</article>
<?php endwhile; ?>

<?php else : ?>
    <div id="search-error">
    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/Screen-Shot-2021-08-06-at-3.43.54-PM.png" alt="still searching" > 
    </div>
<h1 class="page-title">
<?php _e( 'No content for: ', 'siteSummer1' ); ?>
<span class="page-description"><?php echo get_search_query(); ?>
</span>
</h1>

<p>Oh No! Wammy! Nothing Here. <br>
Would you like to search again with different keywords?</p>

<?php get_search_form(); ?>
<?php endif; ?>

<!-- search results originally work off index -->
</main>

</div>
<!-- end wrapper -->
<?php
get_footer();

?>