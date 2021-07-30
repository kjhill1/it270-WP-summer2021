<?php 
get_header();

// Template Name: Museum Page will display home page

/* (by defining templ name this will display home page on index will refer to blog.)*/

?>

<div id="wrapper">

<main>


    <?php if(has_post_thumbnail()) : ?>
    
    <?php the_post_thumbnail(); ?>

    <?php endif;  ?>


<?php while(have_posts()) : the_post() ; ?>

<h2> <?php the_title() ;?></h2>

<?php  the_content() ; ?> 

<?php endwhile;  ?>

</main>

<aside>
</aside>
    </div>
    <!-- END DIV/WRAPPER -->

<? get_footer(); 
?>