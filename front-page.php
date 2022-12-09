<?php get_header();?>

<section class="container-fluid banners padding-bottom">
	<div class="container">
		<div class="row">
			<div class="col-xs-9" style="position: relative;">
				
				<img style="max-width: 70%;" src="<?php bloginfo('template_url');?>/images/homepage-banner.jpg">
				
				<div class="title-holder">
					
					<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h1>
					<p>FDPI is an emerging, Australian-owned independent resource for preventive maintenance programs, spare parts, and full-service customer care for all liquid processing needs. Our professional team locates the parts you need and offers precise installation, maintenance, repair, and 24/7 accessibility to the beverage, food, dairy, and chemical processing industries.</p>
					<p><a href="#">Learn more</a></p> 

					
				</div>
				
			</div>
			<div class="col-xs-3">
				<div class="spares-box">
					
					<h3><i class="far fa-cog"></i> Spare Parts</h3>
					
					<ul>
						<li><a href="#">Homogeniser Spares </a></li>
						<li><a href="#">Heat Exchangers </a></li>
						<li><a href="#"><a href="#">Pumps </a></li>
						<li><a href="#">Valves </a></li>
						<li><a href="#">Butter makers </a></li>
					</ul>
					
					<h4><a href="">Full Catalogue</a></h4>
						
				</div>
			</div>
		</div>
	</div>
</section>	



<section class="container-fluid brands padding">
	<div class="container">
			
			<div class="row middle-xs animated fadeIn">
				<div class="col-xs-12">
					<h3>Brands</h3>
				</div>
			</div>
		
			<div class="row animated fadeIn">
	
					<?php  $term_query = new WP_Term_Query( array( 
						
						'taxonomy' => 'product_brand',
						'hide_empty' => false 
						
						
						
						) );
				
						if ( ! empty( $term_query->terms ) ) {
					foreach ( $term_query->terms as $term ) {
				
					$image = get_field('brand_image', $term);	
					$size = 'full'; 
					if( $image ) { ?>
					
					
					    <div class="col-xs-2">
						    
						    <div class="brand-bolder">
						    
						    <?php echo wp_get_attachment_image( $image, $size ); ?>
						    
						    </div>
						    
						   </div>
						
					
					<?php }	 }} ?>
			
			</div>

		
		
	</div>
</section>






<section class="container-fluid intro padding background-alt">
	<div class="container">
		<div class="row middle-xs animated fadeIn">
				<div class="col-xs-5">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content();?>
				<?php endwhile;  endif; ?>				
				</div>
				
				<div class="col-xs-3 col-xs-offset-1">
					
					<div class="spares-box">
					
					<h3><i class="far fa-cogs"></i> View Services</h3>
					
					<ul>
						<li><a href="#">Homogeniser Spares </a></li>
						<li><a href="#">Heat Exchangers </a></li>
						<li><a href="#">Pumps </a></li>
						<li><a href="#">Valves </a></li>
						<li><a href="#">Butter makers </a></li>
					</ul>
					
						
				</div>
					
				</div>
				
				<div class="col-xs-3">
					
					<div class="spares-box">
					
					<h3><i class="far fa-wrench"></i> Used Equipment</h3>
					
					<ul>
						<li><a href="#">Category 1 </a></li>
						<li><a href="#">Category 2 </a></li>
						<li><a href="#">Category 3 </a></li>
						<li><a href="#">Category 4 </a></li>
					</ul>
					
					<h4><a href="">Full Used Catalogue</a></h4>
						
				</div>
					
				</div>
				
				
			</div>
		</div>
</section>





<section class="container-fluid clients padding">
	<div class="container">
		<div class="row middle-xs animated fadeIn">
			
			<div class="col-xs-12">
				<h3>Our Clients</h3>
			</div>
			
		</div>
	</div>
</section>









<?php get_footer();?>