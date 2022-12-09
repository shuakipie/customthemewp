<?php get_header();?>

<?php include('includes/page-header.php');?>

<?php /* include('includes/flexible-content.php'); */ ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
	</div>
</section>
<?php endwhile;  endif; ?>



<?php if(get_field('team_content')) { ?>


<section class="container-fluid main-content padding ">
	<div class="container">
		<div class="row middle-xs animated fadeIn">
			
			<div class="col-md-9 col-sm-12 col-xs-12">
				
				<?php the_field('team_content');?>
				
			</div>
		</div>
		
		
		<div class="row padding-top-half middle-xs animated fadeIn">
			
			
			<?php $the_query = new WP_Query( array(
								'post_type' => 'team',
								'posts_per_page' => -1	
									) ); ?>
								
								<?php if ( $the_query->have_posts() ) : ?>
								
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<div class="col-md-4 col-sm-12 col-xs-12">
									
										<div class="team-holder">
										<a href="<?php the_permalink();?>">
										<?php if ( has_post_thumbnail() ) : ?>
										        <?php the_post_thumbnail('medium'); ?>
										<?php endif; ?>
									
										<h2><?php the_title(); ?></h2>
										</a>
										</div>
										
										
									</div>
									
									<?php endwhile; ?>
								
									<?php wp_reset_postdata(); ?>
								
								<?php endif; ?>
			
		</div>
		
		
	</div>
</section>



<?php } ?>



<?php get_footer();?>