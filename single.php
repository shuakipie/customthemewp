<?php get_header();?>

<?php include('includes/page-header.php');?>


<?php if(get_field('post_intro_content')) { ?>
<section class="container-full main-content padding-top">
	<div class="container">
		
		<div class="row">
			<div class="col-xs-12">
				<?php the_field('post_intro_content');?>
			</div>
		</div>
		
    	<div class="row two-columns middle-xs">
	        <div class="col-sm-7 col-xs-12">
        		<?php the_field('post_intro_1'); ?>
	        </div>
	        <div class="col-sm-5 col-xs-12 quote">
        		<?php the_field('post_intro_2'); ?>
	        </div>
        </div>	  
	</div>
</section>	
<?php } ?>


<section class="container-fluid post-content main-content padding">
	<div class="container">
			<div class="row center-xs">
		<div class="col-sm-12 col-xs-12 start-xs">
			<div <?php post_class();?>>
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
			<?php the_content(); ?>
			
		<?php endwhile; ?> 
		 	

	 	<div class="social">
		 	<span>Share:</span>
		 	<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title();?>&summary=&source="><i class="fab fa-linkedin-in"></i></a>
		 	<a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_permalink();?>"><i class="fab fa-twitter"></i></a>
		 	<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>"><i class="fab fa-facebook-f"></i></a>
	 	</div>
				 	
			
			 	
		
		 	
		 	<?php endif; ?>
		 	
		 	</div>	
		
		</div>
		
	</div>	
	</div>
</section>	


dsadasdasdsadsad this is test single




<section class="container-full navigation padding-bottom">
	<div class="container">
		<div class="row">
			

		<div class="col-xs-12">
		 <?php previous_post_link('%link', 'Previous'); ?> <?php next_post_link('%link', 'Next'); ?>
		</div>
		</div>
	</div>

</section>





	
<?php get_footer();?>