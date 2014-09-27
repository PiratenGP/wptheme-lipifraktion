<?php get_header(); ?>
<div class="cleft">
<?php while ( have_posts() ) : the_post(); ?>
<div class="post single">	
		
		<h1 class="post-title"><span><?php the_title(); ?></span></h1>

		<div class="post-datum">
				<?php
				$infostring = translate("Vom")." ".get_the_time('j. F Y').", ".get_the_time('H:i')." ".translate("Uhr");
				echo $infostring;
				?>
		</div>	
		<?php 
		if ( has_post_thumbnail() ) { 
		  ?>
		  <div class="post-image"><?php the_post_thumbnail(); ?></div>
		  <?php
		} 
		?>

		<div class="post-content">

<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>
        </div>
		<div class="post-meta">
		Veröffentlicht am <?=get_the_time('j. F Y');?> umd <?=get_the_time('H:i');?> Uhr unter <?php the_category(', '); ?><?php the_tags(" und tagged ", ', ', ""); ?>.
		</div>
		
</div>
<hr>
<?php comments_template(); ?>
</div>
<?php get_sidebar('side'); ?>
<?php get_footer(); ?>