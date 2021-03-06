<?php
/**
 * The template for FRONT PAGE 
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
    
        <!-- Page Content -->
        <div id="page-<?php the_ID(); ?>" <?php post_class('entry entry-page'); ?>>

            <?php if($kale_pages_featured_image_show == 'Default' && has_post_thumbnail() && $kale_pages_show_thumbnail) { ?>
                <div class="entry-thumb"><?php the_post_thumbnail( 'full', array( 'alt' => get_the_title(), 'class'=>'img-responsive' ) ); ?></div>
            <?php } ?>


            <div class="page-content"><?php the_content(); ?></div>
            
        
    </div>
        <!-- END Page Content -->


            </div>
        <!-- end two-columns -->


    

<?php endwhile; ?>
<hr />

<?php get_footer(); ?>
