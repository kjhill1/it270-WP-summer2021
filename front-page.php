<?php 
get_header();

// Template Name: Front Page will display home page

/* (by defining templ name this will display home page on index will refer to blog.)*/

?>

    <div id="wrapper">
        <!-- IF WE HAVE POSTS....SHOW ME THE POST.... 
    IF NOT......
WWE DONT NOT SHOW POSTS!-->

<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post() ; ?>

<h2> <?php the_title() ;?></h2>

<?php  the_content() ; ?> 

<?php endwhile;  ?>

<?php else : ?>

<?php echo wp_autop('Sorry, no posts were found!'); ?>

<?php endif; ?>



</div>
<!-- END DIV/WRAPPER -->

<? get_footer(); 
?>