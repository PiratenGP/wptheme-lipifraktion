<?php get_header(); ?>
			<div class="cleft">			
				<?php // The Query ?>
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args=array(
				'posts_per_page'=>10,
				'caller_get_posts'=>1,
				'paged'=>$paged,
				);
				//query_posts($args);?>
	 
				<?php // The Loop ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="part">
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
								<div class="post-datum">
				<?php
				$infostring = translate("Vom")." ".get_the_time('j. F Y').", ".get_the_time('H:i')." ".translate("Uhr");
				echo $infostring;
				?>
		</div>	
						<div class="entry">
							<?php the_content("Weiterlesen... " . the_title('', '', false)); ?>
						</div>
					</div>
				<?php endwhile; ?>
					<?php next_posts_link('« Ältere Einträge') ?> | <?php previous_posts_link('Neuere Einträge »') ?>
				<?php endif; ?>
			
			
</div>
<?php get_sidebar('side'); ?>

<?php get_footer(); ?>