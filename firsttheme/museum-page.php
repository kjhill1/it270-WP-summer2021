<?php 
get_header();

// Template Name: Museum Page will display home page

/* (by defining templ name this will display home page on index will refer to blog.)*/

?>

<div id="hero">

<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/golden_gardens-1-e1628011964739.jpg" alt="banner">

    </div>
<div id="hero">

<img src="https://kellywithwordpress.design/wp-content/uploads/gallery-1.jpg" alt="banner">

</div>

<!-- end div hero -->

<div class="wrapper">

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
</aside>

    </div>
    <!-- END DIV/WRAPPER -->

<div class="buy-now">
<?php 
dynamic_sidebar('sidebar-buy'); ?>

</div>
<!-- end buy-now div -->

<?php get_footer(); 

?>