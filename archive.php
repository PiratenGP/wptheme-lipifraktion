<?php get_header(); ?>
			<div class="cleft">		
			
 <?php /* If this is a category archive */ if (is_category()) { ?>

<h1 class="post-title">Kategorie <em><?php single_cat_title( '', true ); ?></em></h1>

<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

<h1 class="post-title">Tag <em><?php single_tag_title( '', true ); ?></em></h1>

<?php /* If this is a daily archive */ } elseif (is_day()) { ?>

<h1 class="post-title">Archiv <em><?php the_time('d. F Y'); ?></em></h1>

<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

<h1 class="post-title">Archiv <em><?php the_time('F Y'); ?></em></h1>

<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

<h1 class="post-title">Archiv <em><?php the_time('Y'); ?></em></h1>

<?php /* If this is an author archive */ } elseif (is_author()) { ?>

<h1 class="post-title">Autor Archiv</h1>

<?php } ?>
				<?php global $wp_query;
$resultc = $wp_query->found_posts;
if ($resultc > 0) {
?><div><?php
 echo $resultc; ?> <?php echo _n("Eintrag", "Einträge", $resultc); ?> gefunden</div>
				<div class="post-content">
				<?php // The Query ?>
	 
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
							<?php the_excerpt(); ?>
						</div>
					</div>
				<?php endwhile; ?>
					<?php next_posts_link('« Ältere Einträge') ?> | <?php previous_posts_link('Neuere Einträge »') ?>
				<?php endif; ?>
			
			</div>
<?php } else { ?>
<div class="post-content">Keine Einträge gefunden.</div>
<?php
}
?>
</div>
<?php get_sidebar('side'); ?>

<?php get_footer(); ?>