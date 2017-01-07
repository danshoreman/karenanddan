<?php get_header(); 
	
	/* Template Name: Generic */
	
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="row">
		<div class="small-12 medium-8 medium-offset-2 columns">
			<div class="main-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
