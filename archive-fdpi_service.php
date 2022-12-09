<?php get_header();?>



	
							
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
			<div class="container">
				<div class="grid grid-cols-1 pb-8 text-center">
					<h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Services</h3>

					<p class="text-slate-400 max-w-xl mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div><!--end grid-->

	

<?php $wcatTerms = get_terms('fdpi_cat', array('hide_empty' => 0, 'parent' =>0)); 
foreach($wcatTerms as $wcatTerm) : 
?>
<div class="flex inline-flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
<div class="flex inline-flex items-center justify-center bg-gradient-to-r from-transparent text-indigo-600 text-center  mr-3">

</div>
<div class="flex-1">
<h4 class="mb-0 text-lg font-medium"><a class="text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium" href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php echo $wcatTerm->name; ?></a></h4>
</div>
</div>
<?php 
endforeach; 
?>

</div><!--end grid-->

		
</div>
</div><!--end contanier-->
</section><!--end section-->

<?php get_footer();?>

<?php /*
		$wsubargs = array(
		'hierarchical' => 1,
		'show_option_none' => '',
		'hide_empty' => 0, 
		'parent' => $wcatTerm->term_id,
		'taxonomy' => 'product_cat'
		);
		$wsubcats = get_categories($wsubargs);
		foreach ($wsubcats as $wsc):
		?> 

<!--<p class="text-slate-400 mt-3"><a href="<?php echo get_term_link( $wsc->slug, $wsc->taxonomy );?>"><?php echo $wsc->name;?></a></p>-->


				
			
		
			<?php
		endforeach; 
		?>  

<?php 
endforeach; 
?>

					




			
				
			</div><!--end grid-->

		
			</div>
		</div><!--end contanier-->
	</section><!--end section-->

<?php get_footer();?>
*/










