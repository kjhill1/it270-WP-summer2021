<!DOCTYPE html>
<html <?php language_attributes() ;?> >
<head>
<meta charset="<?php bloginfo( 'charset' ) ;?>">
<title><?php bloginfo( 'name' ); ?></title>
<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css">
<?php wp_head();  ?>
</head>

<body>
    <header>
    </header>

    <div id="wrapper">
        <!-- IF WE HAVE POSTS....SHOW ME THE POST.... 
    IF NOT......
WWE DONT NOT SHOW POSTS!-->

<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post() ; ?>

<h2> <?php the_title() ;?></h2>

<?php  the_content() ; ?> 

<?php endwhile;  ?>

<?php else : ?>

<?php echo wp_autop('Sorry, no posts were found!'); ?>

<?php endif; ?>



</div>
<!-- END DIV/WRAPPER -->

<footer>
</footer>

    </body>
</html>