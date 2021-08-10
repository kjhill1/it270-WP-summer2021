<?php 
get_header();

// Template Name: About Page will display home page

/* (by defining templ name this will display home page on index will refer to blog.)*/

?>

<divid="about">
    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/about_me.JPG" alt="banner">
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
    <?php dynamic_sidebar( 'sidebar-about' ); ?>
</aside><!-- #secondary -->

    </div>
    <!-- END DIV/WRAPPER -->

<? get_footer(); 
?>