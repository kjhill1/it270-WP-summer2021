this is from the side bar page
<?php
/**
 * Sidebar
 *
 * @package kale
 */
?>
<?php 
$kale_sidebar_size = kale_get_option('kale_sidebar_size'); 
$kale_example_content = kale_get_option('kale_example_content'); 
?>
<!-- Sidebar -->
<aside class="sidebar sidebar-column <?php if($kale_sidebar_size == 0) { ?> col-md-4 <?php } else { ?> col-md-3 <?php } ?>" role="complementary" aria-label="<?php _ex( 'Primary sidebar', 'aria label', 'kale' ); ?>"> 
    <?php 

    if(is_active_sidebar('sidebar-default-bordered')) { ?><div class="sidebar-default-borders sidebar-block sidebar-borders"><?php dynamic_sidebar('sidebar-default-bordered'); ?></div><?php } 
    
    if(is_active_sidebar('sidebar-default')) { ?><div class="sidebar-default sidebar-block sidebar-no-borders"><?php dynamic_sidebar('sidebar-default'); ?></div><?php } 
    else if($kale_example_content == 1) { kale_example_sidebar(); } 
    ?>

<?php 

if(is_active_sidebar('sidebar-blog')) { ?><div class="sidebar-project-1"><?php dynamic_sidebar('sidebar-blog'); ?></div><?php } 

if(is_active_sidebar('sidebar-blog')) { ?><div class="sidebar-default sidebar-block sidebar-no-borders"><?php dynamic_sidebar('sidebar-blog'); ?></div><?php } 

?>
<?php 

if(is_active_sidebar('sidebar-about')) { ?><div class="sidebar-about"><?php dynamic_sidebar('sidebar-about'); ?></div><?php } 

if(is_active_sidebar('sidebar-about')) { ?><div class="sidebar-default sidebar-block sidebar-no-borders"><?php dynamic_sidebar('sidebar-about'); ?></div><?php } 



?>

<?php 

if(is_active_sidebar('sidebar-sites')) { ?><div class="sidebar-sites"><?php dynamic_sidebar('sidebar-sites'); ?></div><?php } 

if(is_active_sidebar('sidebar-sites')) { ?><div class="sidebar-default sidebar-block sidebar-no-borders"><?php dynamic_sidebar('sidebar-sites'); ?></div><?php } 

?>

<?php 

if(is_active_sidebar('sidebar-designs')) { ?><div class="sidebar-designs"><?php dynamic_sidebar('sidebar-designs'); ?></div><?php } 

if(is_active_sidebar('sidebar-designs')) { ?><div class="sidebar-default sidebar-block sidebar-no-borders"><?php dynamic_sidebar('sidebar-designs'); ?></div><?php } 

?>

<?php 

if(is_active_sidebar('sidebar-reach-me')) { ?><div class="sidebar-reach-me"><?php dynamic_sidebar('sidebar-reach-me'); ?></div><?php } 

if(is_active_sidebar('sidebar-reach-me')) { ?><div class="sidebar-default sidebar-block sidebar-no-borders"><?php dynamic_sidebar('sidebar-reach-me'); ?></div><?php } 

?>

<?php 

if(is_active_sidebar('sidebar-project-1')) { ?><div class="sidebar-project-1"><?php dynamic_sidebar('sidebar-project-1'); ?></div><?php } 

if(is_active_sidebar('sidebar-project-1')) { ?><div class="sidebar-default sidebar-block sidebar-no-borders"><?php dynamic_sidebar('sidebar-project-1'); ?></div><?php } 

?>
<?php 

if(is_active_sidebar('sidebar-project-2')) { ?><div class="sidebar-project-1"><?php dynamic_sidebar('sidebar-project-2'); ?></div><?php } 

if(is_active_sidebar('sidebar-project-2')) { ?><div class="sidebar-default sidebar-block sidebar-no-borders"><?php dynamic_sidebar('sidebar-project-2'); ?></div><?php } 

?>


<?php 

if(is_active_sidebar('sidebar-project-3')) { ?><div class="sidebar-project-1"><?php dynamic_sidebar('sidebar-project-3'); ?></div><?php } 

if(is_active_sidebar('sidebar-project-3')) { ?><div class="sidebar-default sidebar-block sidebar-no-borders"><?php dynamic_sidebar('sidebar-project-3'); ?></div><?php } 

?>

</aside>