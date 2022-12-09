<?php get_header();?>

<?php include('includes/page-header.php');?>

<?php /* include('includes/flexible-content.php'); */ ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="container-fluid main-content padding background-alt">
	<div class="container">
		<div class="row animated fadeIn">
			
			<div class="col-md-9 col-sm-12 col-xs-12" style="color:<?php the_field('service_colour');?>;">
				<?php the_content();?>
			</div>
			
			<div class="col-md-3 col-sm-12 col-xs-12 end-xs">
					<?php $posts = get_field('page_link'); if( $posts ): ?>
				    <?php foreach( $posts as $post): ?>
				        <?php setup_postdata($post); ?>
				        
				        <a class="button" href="<?php the_permalink();?>"><?php the_title();?></a>
				    <?php endforeach; ?>
				  
				    <?php wp_reset_postdata(); ?>
				<?php endif; ?>	
				</div>	
			
			
			</div>
				
		</div>
	</div>
</section>
<?php endwhile;  endif; ?>



<?php if(get_field('select_faqs')) { ?>


<section class="container-fluid main-content padding ">
	<div class="container">

		
		
		<div class="row animated fadeIn">
			
					
			<div class="col-md-12 col-sm-12 col-xs-12">
			
			     <article class="faq">
				     
				     <h2><?php the_title('');?> FAQs</h2>
				    
			        <div id="accordion">
			
					
			
			<?php $posts = get_field('select_faqs'); if( $posts ): ?>
			  
			    <?php foreach( $posts as $post): ?>
			        <?php setup_postdata($post); ?>
			        
		
		        
			        	<div class="draw-outer">
			        
				        	<h4><?php the_title();?></h4>
				        
							<div class="draw" style="display: none;">
							
							<?php the_content();?>
						
							</div>
			        	
			        	</div>
			            
     
	    <?php endforeach; ?>
			    
			    
			  
			    <?php wp_reset_postdata(); ?>
			<?php endif; ?>	
			
			        </div>
			        
			     </article>
					
		</div>
		
		</div>
		
		
	</div>
</section>



<?php } ?>



<?php get_footer();?>