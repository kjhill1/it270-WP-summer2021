<?php 
get_header();

// Template Name: Front Page will display home page

/* (by defining templ name this will display home page on index will refer to blog.)*/

?>

    <div id="wrapper">
  

<!-- <div class="thumbnail"> -->

<?php if(has_post_thumbnail()) : ?>
<!-- <a href="<?php the_permalink(); ?>"> -->
<?php the_post_thumbnail(); ?>
<!-- </a> -->
<?php endif;  ?>
<!-- </div> -->
<!-- end thumbnail -->

<!-- <?php if(have_posts()) : ?> -->

<?php while(have_posts()) : the_post() ; ?>

<h2> <?php the_title() ;?></h2>

<?php  the_content() ; ?> 

<?php endwhile;  ?>


</div>
<!-- END DIV/WRAPPER -->

<? get_footer(); 
?>