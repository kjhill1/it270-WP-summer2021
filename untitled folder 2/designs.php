<?php
/**
 * The template for Designs Page
 *
 * @package kale
 */
?>

<?php get_header(); ?>



<?php while ( have_posts() ) : the_post(); ?>

<?php
if($kale_pages_featured_image_show == 'Banner' && has_post_thumbnail() && $kale_pages_show_thumbnail) {
    ?>


    <!-- Featured Image (Banner) -->
    <div class="internal-banner">
        <?php
        $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'kale-slider' ) ;
		if ($src)$featured_image = $src[0]
        ?>
        <img src="<?php echo esc_url($featured_image) ?>" alt="<?php the_title_attribute(); ?>" />

      
    </div>
    <!-- /Featured Image (Banner) -->
<?php } ?>

<!-- Two Columns -->
<div class="row two-columns">

    <!-- Main Column -->
    <?php if($kale_pages_sidebar == 1) { ?>
    <div class="main-column <?php if($kale_sidebar_size == 0) { ?> col-md-8 <?php } else { ?> col-md-9 <?php } ?>" role="main">
    <?php } else { ?>
    <div class="main-column col-md-12" role="main">
    <?php } ?>

    
        <!-- Page Content -->
        <div id="page-<?php the_ID(); ?>" <?php post_class('entry entry-page'); ?>>

            <?php if($kale_pages_featured_image_show == 'Default' && has_post_thumbnail() && $kale_pages_show_thumbnail) { ?>
                <div class="entry-thumb"><?php the_post_thumbnail( 'full', array( 'alt' => get_the_title(), 'class'=>'img-responsive' ) ); ?></div>
            <?php } ?>


            <div class="page-content"><?php the_content(); ?></div>

            <div class="row two-columns">
        
    </div>

        </div>
        <!-- ENDPage Content -->
        <?php dynamic_sidebar( 'sidebar-designs' ); ?>


            </div>
        <!-- end two-columns -->


    

<?php endwhile; ?>
<hr />

<?php get_footer(); ?>

