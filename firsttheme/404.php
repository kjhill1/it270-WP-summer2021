<?php
get_header();

?>

<div id="wrapper">
<main>
<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'site' ); ?></h2>
    <p><?php _e( 'It looks like nothing was found at this location. Maybe try another search?', 'site1' ); ?></p>
<?php get_search_form(); ?>
</main>

<aside>
Someone is Slacking. Here is my 404 page!
</aside>
</div>
<!-- END WRAPPER -->

<?php 
get_footer();

?>