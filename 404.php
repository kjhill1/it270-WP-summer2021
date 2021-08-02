<?php
get_header();

?>
<div id="search-error">
    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/404-1.jpg" alt="404">
</div>

<div class="wrapper">
<main>
<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'site' ); ?></h2>
    <p><?php _e( 'It looks like nothing was found at this location. Maybe try another search?', 'site1' ); ?></p>
<?php get_search_form(); ?>
    <h3>Please feel free to browse...</h3>
<?php wp_list_pages(); ?>

</main>

<aside>
Someone is Slacking. Here is my 404 page!
</aside>
</div>
<!-- END WRAPPER -->

<?php 
get_footer();

?>