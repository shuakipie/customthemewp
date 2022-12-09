<?php get_header();?>



<section class="container-fluid single-product-content padding-top-half padding-bottom">
	<div class="container">
		<div class="row top-xs">
			
			<div class="col-xs-5">
				
				
				<?php 
$images = get_field('single_product_gallery');
if( $images ): ?>
    <div id="slider" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo esc_url($image['sizes']['product-gallery']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                   <?php /* <p><?php echo esc_html($image['caption']); ?></p> */?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div id="carousel" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
				
				
			</div>
			
			<div class="col-xs-7">
				
				<div class="product-holder">
						
						
						<div class="product-title">
						
						<h1 class = "font-bold text-3xl py-2"><?php the_title();?></h1>
						<?php the_excerpt();?>
						
						
						</div>
						
						
						
						<div class="product-enquiry">
						
							<?php  $terms = get_the_terms( $post->ID, 'product_brand' );							
							
							foreach ( $terms as $term ) {
								
							$image = get_field('brand_image', $term);	
					
								
								}
			
			
					$size = 'full'; 
					if( $image ) { ?>
			
			
			
						    <?php echo wp_get_attachment_image( $image, $size ); ?>
				
					
					<?php }	?>
						
						
						<a class="button orange solid" href="<?php bloginfo('url');?>/enquire/">Enquire Now</a>
						
						
						</div>
						
						
						<div class="product-description">	
						
						
						<h3 class = "font-bold text-1xl py-2" >Description</h3>
						
						
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
												<?php the_content();?>

						
						<?php endwhile;  endif; ?>
						
						</div>
						
						
						
						
						
						
						
				
							
							<?php if( have_rows('product_additional_content') ): ?>
								
						<div id="accordion">
												
								<?php while ( have_rows('product_additional_content') ) : the_row(); ?>
												
									<h4><?php the_sub_field('product_additional_content_title'); ?></h4>
									<div class="draw" style="display: none;"><?php the_sub_field('product_additional_content_content'); ?></div>
							 <?php endwhile; ?> 
												   					
						</div> 
						<?php endif; ?>
						
						
						
						
						<a class="button orange solid" href="<?php bloginfo('url');?>/enquire/">Enquire Now</a>
							
					
							
				</div>
		
						
						
						
			</div>
			
			
		</div>
	</div>
</section>						


<?php get_footer();?>