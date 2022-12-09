



				<?php /* Convert hexdec color string to rgb(a) string */
				function hex2rgba($color, $opacity = false) {
				 
					$default = 'rgba(147,58,56,0.8)';
				 
					//Return default if no color provided
					if(empty($color))
						  return $default; 
				 
					//Sanitize $color if "#" is provided 
						if ($color[0] == '#' ) {
							$color = substr( $color, 1 );
						}
				 
						//Check if color has 6 or 3 characters and get values
						if (strlen($color) == 6) {
								$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
						} elseif ( strlen( $color ) == 3 ) {
								$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
						} else {
								return $default;
						}
				 
						//Convert hexadec to rgb
						$rgb =  array_map('hexdec', $hex);
				 
						//Check if opacity is set(rgba or rgb)
						if($opacity){
							if(abs($opacity) > 1)
								$opacity = 1.0;
							$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
						} else {
							$output = 'rgb('.implode(",",$rgb).')';
						}
				 
						//Return rgb(a) color string
						return $output;
				}

				/* Here's a usage example how to use this function for dynamicaly created CSS */
				$setColor =  get_field('service_colour');
				$color = $setColor;
				$rgb = hex2rgba($color);
				$rgba = hex2rgba($color, 0.8);
				?>
	






<?php if (is_post_type_archive('services')) { ?>

	<section class="container-fluid page-banner" style="background-image:url( <?php echo get_the_post_thumbnail_url(40,'page-banners'); ?>);">
		<div class="container">
			<div class="row bottom-xs">
				<div class="col-xs-12">
					<h1 style="background:<?php echo $rgba ?>;"><?php echo get_the_title(40);?></h1>
				</div>
			</div>
		</div>
	</section>
	
	
<?php } elseif (is_post_type_archive('faqs')) { ?>

	<section class="container-fluid page-banner" style="background-image:url( <?php echo get_the_post_thumbnail_url(49,'page-banners'); ?>);">
		<div class="container">
			<div class="row bottom-xs">
				<div class="col-xs-12">
					<h1 style="background:<?php echo $rgba ?>;"><?php echo get_the_title(49);?></h1>
				</div>
			</div>
		</div>
	</section>	


<?php } elseif (is_singular('team')) { ?>


<?php } else { ?>

	<section class="container-fluid page-banner" style="background-image:url( <?php the_post_thumbnail_url('page-banners'); ?>);">
		<div class="container">
			<div class="row bottom-xs">
				<div class="col-xs-12">
					<h1 style="background:<?php echo $rgba ?>;"><?php the_title();?></h1>
				</div>
			</div>
		</div>
	</section>

<?php } ?>