<?php get_header(); ?>
<div class="cleft">
<?php while ( have_posts() ) : the_post(); ?>
<div class="page">	
		
		<h1 class="post-title"><span><?php the_title(); ?></span></h1>
		<div class="post-content">

<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>
        </div>
</div>
</div>
<?php get_sidebar('side'); ?>
<?php get_footer(); ?>