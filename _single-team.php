<?php get_header();?>

<?php include('includes/page-header.php');?>

<?php /* include('includes/flexible-content.php'); */ ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<section class="container-fluid team-header">
	<div class="container">
		<div class="row animated fadeIn">
			
			
			<div class="col-xs-12">
				
				<div class="team-holder">
					
					
					<div class="team-image">
					<?php if ( has_post_thumbnail() ) : ?>
					        <?php the_post_thumbnail(); ?>
					<?php endif; ?>
					</div>
					
					<div class="team-content">
						
						<h1><?php the_title();?></h1>
						
						<p><?php if(get_field('team_title')) { ?><?php the_field('team_title');?><?php } ?> <?php if(get_field('team_role')) { ?><strong><?php the_field('team_role');?></strong><?php } ?></p>
						
							<hr>
						
						<div class="team-details">
						
						<?php if(get_field('team_phone')) { ?><p><strong>T: <?php the_field('team_phone');?></strong></p><?php } ?> 
						<?php if(get_field('team_fax')) { ?><p>F: <?php the_field('team_fax');?></p><?php } ?> 
						<?php if(get_field('team_email')) { ?><p><?php the_field('team_email');?></p><?php } ?> 
						<?php if(get_field('team_web_address')) { ?><p><?php the_field('team_web_address');?></p><?php } ?> 
						<?php if(get_field('team_address')) { ?><p><?php the_field('team_address');?></p><?php } ?> 
						</div>
					
						
					</div>
					
					
				</div>
				
				
			</div>
			
		</div>
		
	</div>
</section>









<section class="container-fluid main-content padding">
	<div class="container">
		
					
		<div class="row animated fadeIn">
			
			<div class="col-md-5 col-sm-12 col-xs-12 team-qualifications">
				
				<h4>Qualifications</h4>
				
				<?php the_field('team_qualifications');?>
				
			</div>
			
			<div class="col-md-7 col-sm-12 col-xs-12">
					
					<h4>Industry experience</h4>
					
					<?php the_content();?>		
					
					
					<?php if(get_field('team_email')) { ?><p><br><a class="button" href="mailto:<?php the_field('team_email');?>">Contact <?php the_title();?></a></p><?php } ?>
					
				</div>	
			
			
			</div>
				
		</div>
	</div>
</section>
<?php endwhile;  endif; ?>






<?php get_footer();?>