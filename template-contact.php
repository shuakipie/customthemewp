<?php 
	
	/* Template Name: Contact */
	
	
	get_header();?>

<?php include('includes/page-header.php');?>

<?php /* include('includes/flexible-content.php'); */ ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="container-fluid main-content padding">
	<div class="container">
		<div class="row animated fadeIn">
			
			<div class="col-md-6 col-sm-12 col-xs-12">
				
				
				<div class="row contact-details-row">
					
					<div class="col-md-6 col-sm-12 col-xs-12">
						
						<h4><?php the_field('contact_details_address', 18);?></h4>
						
					</div>
					
					<div class="col-md-6 col-sm-12 col-xs-12">
						
						
						<ul class="contact-details">
						
						<li><span>P:</span><?php the_field('contact_details_phone', 18);?></li>
						<li><span>F:</span><?php the_field('contact_details_fax', 18);?></li>
						<li><span>E:</span><?php the_field('contact_details_email', 18);?></li>
					
					</ul>
						
					</div>
					
					
				</div>
				
				
				
				<?php the_content();?>
			</div>
			
			<div class="col-md-6 col-sm-12 col-xs-12 end-xs">
				
				
				<div class="google-map">
				
				<a href="<?php the_field('contact_map_link');?>"><?php 
				$image = get_field('contact_map_image');
				$size = 'large'; 
				if( $image ) {
				    echo wp_get_attachment_image( $image, $size );
				} ?></a>
				
				<p><a href="<?php the_field('contact_map_link');?>">View on Google Maps</a></p>
								
				</div>	
				
				</div>	
			
			
			</div>
				
		</div>
	</div>
</section>
<?php endwhile;  endif; ?>




<?php get_footer();?>