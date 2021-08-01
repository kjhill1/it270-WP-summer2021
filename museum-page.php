<?php 
get_header();

// Template Name: Museum Page will display home page

/* (by defining templ name this will display home page on index will refer to blog.)*/

?>

<div id="hero"><img src="https://kellywithwordpress.design/wp-content/uploads/white_sands-e1627832885829.jpg" alt="banner">
</div>
<!-- end div hero -->

<div id="wrapper">

<main>


    <?php if(has_post_thumbnail()) : ?>
    
    <?php the_post_thumbnail(); ?>

    <?php endif;  ?>


<?php while(have_posts()) : the_post() ; ?>

<?php  the_content() ; ?> 

<?php endwhile;  ?>

</main>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'sidebar-museums' ); ?>
</aside><!-- #secondary -->

    </div>
    <!-- END DIV/WRAPPER -->

<? get_footer(); 
?>