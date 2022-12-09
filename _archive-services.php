<?php get_header();?>

<?php include('includes/page-header.php');?>

<?php /* include('includes/flexible-content.php'); */ ?>

<?php $the_query = new WP_Query( array( 'pagename' => 'services' ) ); ?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							
<section class="container-fluid main-content padding background-alt">
	<div class="container">
		<div class="row middle-xs animated fadeIn">
			<div class="col-md-9 col-sm-12 col-xs-12">
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
</section>
		
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>


<section class="container-fluid services padding">
	<div class="container">
	
			<div class="row middle-xs animated fadeIn service-listing">			
				<?php $the_query = new WP_Query( array('post_type' => 'services','posts_per_page' => -1	) ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>			
						<div class="col-md-3 col-sm-12 col-xs-12">
							<a href="<?php the_permalink();?>" class="service-box" style="border-color:<?php the_field('service_colour');?>;">
							<h4 style="color:<?php the_field('service_colour');?>;"><?php the_title(); ?></h4>
							<span style="background-color:<?php the_field('service_colour');?>;"><i class="far fa-chevron-double-right"></i></span>
							</a>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>	
		</div>
	</div>
</section>


<?php get_footer();?>