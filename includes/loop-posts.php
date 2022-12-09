<div <?php post_class();?>>
	
	<div class="post-holder-inner">
											
	<div class="image-holder">
	
	<?php if ( has_post_thumbnail() ) : ?>
	        <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
	<?php endif; ?>
	</div>
	<div class="content-holder">
		
		<h3><?php the_title(); ?></h3>
		
		<?php /* <?php 
			$categories = get_the_category();
				if ( ! empty( $categories ) ) {
				    echo '<a class="cat-link" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
				}
			?> */?>
	
		
		<a href="<?php the_permalink();?>">Read more</a>
		
	</div>
	
	</div>
	
</div>
