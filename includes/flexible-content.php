<?php if( have_rows('content_layout') ): ?>
	<div class="advanced-layout main-content">

	<?php while ( have_rows('content_layout') ) : the_row(); ?>

		<?php if( get_row_layout() == '1_column' ): ?>
		  <section class="container-fluid padding"> 
			  <div class="container">
				<div class="row">
					<div class="col-xs-12">
		        		<?php the_sub_field('1_columns_intro'); ?>
					</div>
		         </div> 
			  </div>
		</section>     
		   	
		<?php elseif( get_row_layout() == '3_columns' ): ?>
		<section class="container-fluid padding">
			<div class="container">
				<?php if (get_sub_field('3_columns_intro')) { ?>
				<div class="row padding-bottom">
					<div class="col-xs-12">
						<?php the_sub_field('3_columns_intro');?>
					</div>
				</div>
				<?php } ?>
				
		    	<div class="row top-xs">
			        <div class="col-sm-4 col-xs-12">
		        		<?php the_sub_field('column_1'); ?>
			        </div>
			        <div class="col-sm-4 col-xs-12">
		        		<?php the_sub_field('column_2'); ?>
			        </div>
			        
			          <div class="col-sm-4 col-xs-12">
		        		<?php the_sub_field('column_3'); ?>
			        </div>
		        </div>	  
			</div>
		</section>	
		
		
		<?php elseif( get_row_layout() == '2_columns' ): ?>
		<section class="container-fluid padding">
			<div class="container">
			
		    	<div class="row middle-xs top-xs">
			        <div class="col-sm-6 col-xs-12">
		        		<?php the_sub_field('column_1'); ?>
			        </div>
			        <div class="col-sm-6 col-xs-12">
		        		<?php the_sub_field('column_2'); ?>
			        </div>
			      
		        </div>	  
			</div>
		</section>
		
		
		<?php elseif( get_row_layout() == '5_columns' ): ?>
		<section class="container-fluid padding">
			<div class="container">
				<?php if (get_sub_field('5_columns_intro')) { ?>
				<div class="row">
					<div class="col-xs-12">
						<?php the_sub_field('5_columns_intro');?>
					</div>
				</div>
				<?php } ?>
				
		    	<div class="row top-xs">
			        <div class="col-xs">
		        		<?php the_sub_field('column_1'); ?>
			        </div>
			        <div class="col-xs">
		        		<?php the_sub_field('column_2'); ?>
			        </div>
			        
			          <div class="col-xs">
		        		<?php the_sub_field('column_3'); ?>
			        </div>
			        
			          <div class="col-xs">
		        		<?php the_sub_field('column_4'); ?>
			        </div>
			        
			          <div class="col-xs">
		        		<?php the_sub_field('column_5'); ?>
			        </div>
		        </div>	  
			</div>
		</section>	
		        
		
		<?php endif; ?>
	
	<?php endwhile; ?>
	</div>
<?php endif; ?>