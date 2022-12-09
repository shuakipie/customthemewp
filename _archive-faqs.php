<?php get_header();?>

<?php include('includes/page-header.php');?>

		
		
<?php $custom_terms = get_terms('faqs_tax');

foreach($custom_terms as $custom_term) {
    
    wp_reset_query();
    
    $args = array('post_type' => 'faqs',
        'tax_query' => array(
            array(
                'taxonomy' => 'faqs_tax',
                'field' => 'slug',
                'terms' => $custom_term->slug,
            ),
        ),
     );

     $loop = new WP_Query($args);
     
     if($loop->have_posts()) { ?>
     
     
<section class="container-fluid main-content padding faqs-archive">
	<div class="container">
		<div class="row middle-xs animated fadeIn">
			<div class="col-md-12 col-sm-12 col-xs-12">
     
     
     <article <?php post_class('faq');?>>
	     
	    
	     
        <h2><?php echo $custom_term->name; ?></h2>

        
	        
	        
	        <div id="accordion">
			
        
        <?php while($loop->have_posts()) : $loop->the_post(); ?>
        
        	<div class="draw-outer">
        
	        	<h4><?php the_title();?></h4>
	        
				<div class="draw" style="display: none;">
				
				<?php the_content();?>
			
				</div>
        	
        	</div>
            
        <?php endwhile; ?><?php wp_reset_query(); ?> 
        
        </div>
        

        
        
     </article>
     
     
     		
			</div>
				
	</div>	
	
</section>	
        
        
    <?php } } ?>
		
		





<?php get_footer();?>