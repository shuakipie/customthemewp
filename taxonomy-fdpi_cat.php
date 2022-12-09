<?php get_header();?>

<?php get_header();?>



       
<section class="container-fluid main-content padding">
	<div class="container">
		<div class="row top-xs">
			
			<div class="col-xs-3">
				
				<div class="spares-box" id ="spare">
					
					
					
						<?php
							
						$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
						$parent = get_term_by( 'id', $term->parent, get_query_var( 'taxonomy' ) );
						
						$parent_id = get_queried_object_id(); 
					
					
						?>
					    
					   
					
						<?php if ($term->parent == 0) { ?>
						
					<h3 ><i class="far fa-shopping-cart"></i> <?php echo $term->name;  ?></h3>
						
					  <ul>
					    <?php wp_list_categories( array(
					        'orderby'            => 'id',
					        'taxonomy'			=> 'product_cat',
					        'show_count'         => false,
					        'use_desc_for_title' => false,
					        'title_li'				=> '',
							'child_of'           => $parent_id,
					
					    ) ); ?>
					    
					    
					</ul>
									
							<h4><a href="<?php bloginfo('url');?>/product-category/<?php echo $term->slug; ?>/">Full Catalogue</a></h4>

							
						<?php } else {  ?>
						
						<h3><i class="far fa-shopping-cart"></i> <?php echo $parent->name;  ?></h3>
										
					  <ul>
						  
						  
					    <?php wp_list_categories( array(
					        'orderby'            => 'id',
					        'taxonomy'			=> 'product_cat',
					        'show_count'         => false,
					        'use_desc_for_title' => false,
					        'child_of'           => $term->parent,
					        'title_li'			=> '',
					   
					    ) ); ?>
						</ul>
						
							<h4><a href="<?php bloginfo('url');?>/product-category/<?php echo $parent->slug;  ?>/">Full Catalogue</a></h4>
						
					<?php 	} ?>
						
				
				
				
					
				</div>
									
			</div>	
			
			
				<div class="col-xs-9">
					
					<div class="row category-header">
						
						<div class="col-xs-12">
						
						<h1 class = "font-bold text-2xl py-2"><?php single_cat_title();?></h1>
						
						<?php echo category_description();?>
						
						</div>
						
					</div>
					
					
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
							
							<h3 class = "font-bold text-1xl py-2"><?php the_title();?></h3>
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


<?php get_footer();?> 