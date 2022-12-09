<?php get_header();?>


<section class="container-fluid main-content padding">
	<div class="container">
		<div class="row middle-xs animated fadeIn">
			
			<div class="col-xs-3">
				
			
				
			</div>
			
			
				<div class="col-xs-9">
					
					<div class="row">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<div class="col-xs-4">
						
					<a class="product-link" href="<?php the_permalink();?>">
						
						<div class="product-image">	
							<?php if ( has_post_thumbnail() ) : ?>
							        <?php the_post_thumbnail('medium'); ?>
							<?php endif; ?>	
						</div>
						<div class="product-content">
							
							<h3><?php the_title();?></h3>
							<?php the_excerpt();?>
							<span class="button orange clear">View Product</span>
							
						</div>
						
					</a>
					
					</div>
				
				<?php endwhile;  endif; ?>
				
					</div>
				
				
				
				
				
			</div>
			
		</div>
	</div>
</section>			
			






<?php get_footer();?>