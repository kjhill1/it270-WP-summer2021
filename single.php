<?php
get_header();

?>
 <!-- this is mine after olga -->

<!-- THIS IS OLGO's page. It is known as "news" in WP. Mine blog page was broken and we could not fix it. This has future code from videos. Watch videos to ensure that style and nav is right -->

<div id="wrapper">
<main>
<!-- if we have posts...
show me the post!!!
If not...
we do not have posts! -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post() ; ?>

<article class="posts">

<h2><a href="<?php the_permalink() ;?>"><?php the_title()  ;?></a></h2>

<div class="meta">
    <span><b>Posted By:</b> <?php the_author()  ;?></span>
    <span><b>Posted On:</b> <?php the_time('F j, Y g:i a')  ;?></span>
    </div>
    </article> <!-- ???? article or c??? -->
<!-- end meta div -->

<?php the_content() ;  ?>

<?php endwhile; ?>


<?php else : ?>


<?php echo wp_autop('Sorry, No Post have been found'); ?>

<?php endif; ?>
</main>

<aside>

</aside>
</div>
<!-- END WRAPPER div -->

<!-- <span class="block">
<a href="<?php the_permalink();  ?>">Read More about <?php the_title(); ?>
</a>
</span> -->

<?php 
get_footer();

?>