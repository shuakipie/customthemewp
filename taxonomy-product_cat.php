<?php get_header();?>
<!--
<section class="relative table w-full " id="home">
           
		   <div class="grid lg:grid-cols-12 md:grid-cols-2  items-center ">
		   <div class="place-items-center h-screens  bg-center lg:col-span-6    bg-[url('../../fdpi/images/services1.jpg')]">
 
			
 		  <div class="grid place-items-center h-screens bg-red-900/50 ">
		   <div class="grid place-items-center hover:text-yellow-300 cursor-pointer opacity-100 hover:opacity-80">
		   <a class="logo" href="http://localhost/newdesign/service"> <img  class="h-60" src="http://localhost/newdesign/wp-content/themes/fdpi/images/logo.svg" alt="FDPI"></a>
		  
		   <h4 class="font-bold text-3xl ttext-white  text-white py-3 ">SERVICE</h4>
          </div> </div> 
		
	
 </div>
			   

			   
			   <div class=" place-items-center  bg-center lg:col-span-6  bg-[url('../../fdpi/images/services2.jpg')]">
 
			
				   <div class="grid place-items-center h-screens bg-blue-900/50">
 					<a href ="#spare"> <h4 class="font-bold text-3xl text-white hover:text-orange-700 cursor-pointer opacity-100 hover:opacity-80" >Browse OEM and Generic spare parts</h4></a> 
					</div>
						  
				
				
			    
		   
	   </div>
   </section>
  
--> 

       
<section class="container-fluid main-content padding">
	<div class="container">
		<div class="row top-xs pt-10">
			
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
			
			
				<div class="col-xs-9 ">
					
					<div class="row category-header">
						
						<div class="col-xs-12">
						
						<h1 class = "font-bold text-3xl py-2 "><?php single_cat_title();?></h1>
						
					
						
						</div> 
						
					</div>
					
					
					<div class="row ">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<div class="col-xs-4">
						
					<a class="product-link" href="<?php the_permalink();?>">
						
						
						<div class="product-content flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
							
							<h4 class = "font-bold text-1xl py-2   hover:text-red-600"><?php the_title();?></h4>
							
							
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

