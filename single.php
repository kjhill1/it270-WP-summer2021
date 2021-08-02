<?php
get_header();

?>
<div id="hero">
    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/golden_gardens-1-e1627842307204.jpg" alt="banner">
</div>

 <!-- this is mine after olga -->



 <div class="wrapper">

<main>
<!-- if we have posts...
show me the post!!!
If not...
we do not have posts! -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post() ; ?>

<article class="posts">

<h1><?php the_title() ;?></h1>

<div class="meta">
    <span><b>Posted By:</b> <?php the_author()  ;?></span>
    <span><b>Posted On:</b> <?php the_time('F j, Y g:i a')  ;?></span>
    </div>
    <!-- end meta div -->
    <?php the_content() ;  ?>
</article> <!-- ???? article or c??? -->

<?php endwhile; ?>


<?php else : ?>


<?php echo wp_autop('Sorry, No Post have been found'); ?>

<?php endif; ?>

<span class="next-previous">
<?php (previous_post_link()) ? '%link' : ''; ?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : ''; ?>
</span>

<?php comments_template(); ?>



</main>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'sidebar-museums' ); ?>
</aside><!-- #secondary -->


</div>
<!-- END WRAPPER div -->

<!-- <span class="block">
<a href="<?php the_permalink();  ?>">Read More about <?php the_title(); ?>
</a>
</span> -->

<?php 
get_footer();

?>