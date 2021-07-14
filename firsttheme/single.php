<?php 
get_header();
?>
<!-- BLOG PAGE -->
<main>


    <div id="wrapper">
        <!-- IF WE HAVE POSTS....SHOW ME THE POST.... 
    IF NOT......
WWE DONT NOT SHOW POSTS!-->

<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post() ; ?>
<artical class="post">

<h2><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h2>

<div class="meta">
    <span><b>Posted By:</b> <?php the_author() ;?></span>
    <span><b>Posted On:</b> <?php the_time('F j, Y g:i a'); ?></span>

</div>
<!-- closes meta div -->

<?php  the_content() ; ?> 

<?php endwhile;  ?>
</div>
<!-- closes aticle  -->

<?php else : ?>


<?php echo wp_autop('Sorry, no posts were found!'); ?>

<?php endif; ?>
</main>

<aside>
</aside>
</div>
<!-- END DIV/WRAPPER -->

<? get_footer(); 
?>