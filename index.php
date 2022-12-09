<?php get_header();?>

<?php include('includes/page-header.php');?>

<section class="container-fluid padding news-feed">
	<div class="container">
		
	<div class="row center-xs padding-bottom">
				
				<form id="myForm" name="myForm" action="<?php bloginfo('url');?>/news/" method="get">

					
					<div class="category-filter-cat">
						
				    <?php wp_dropdown_categories( array(
					    'show_option_all'    => '',
						'show_option_none'   => 'Sort by Category',
						'option_none_value'  => '',
						'taxonomy' 			 => 'category',
				        'class'              => 'category js-query',
				        'name'               => 'category',
				        'selected'           => get_query_var( 'post_cat' ),
				        'value_field'	     => 'slug',
				        'orderby' 			 => 'id',				        
						'title_li' 			 => '',
						'hide_empty' 		 => 0,
				    ) ); ?> 
				    
					</div>
										
					
					<input style="display: none;" type="submit" id="searchsubmit" class="button" value="Search" />

					
			</form>
				
			</div>
	
		
		
		<div class="post-holder row">
			
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
					<?php include('includes/loop-posts.php');?>

				
			<?php endwhile; ?>
			
			</div>
			
				
			<div class="pagination padding-top">
			 	<div class="nav nav-previous alignleft"><?php previous_posts_link( '<i class="far fa-arrow-from-right"></i>' ); ?></div>
			 	
			 	<div class="page-count"><?php current_paged(); ?> </div>
			 	
			 	<div class="nav nav-next alignright"><?php next_posts_link( '<i class="far fa-arrow-from-left"></i>' ); ?></div> 
		 	 </div>
			
			 <?php endif; ?>
						
						
	
		
	</div>
		
</section>


<?php get_footer();?>