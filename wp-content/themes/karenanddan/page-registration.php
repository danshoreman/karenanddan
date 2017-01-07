<?php get_header(); 
	
	/* Template Name: Registration */
	
?>
<div class="block-wrap">
	<div class="col-wrap">
		<div class="row">
			<div class="small-12 medium-8 medium-offset-2 large-6 large-offset-3 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<div class="central-col">
					
					<img src="http://karenanddan.co.uk/wp-content/themes/karenanddan/library/images/general/were-getting-married_bl.png" alt="Karen &amp; Dan are getting married" class="we-are">

				<?php the_content(); ?>
				
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
				
				</div>
		
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
