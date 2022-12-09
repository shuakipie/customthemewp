

<footer class="container-fluid footer padding">
	<div class="container">
		<div class="row">
		
		
		<div class="col-xs-3">
				
				
				
				<?php $defaults = array(
				'theme_location'  => 'footer-menu',
				'menu'            => '',
				'container'       => false,
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'footer-menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => '',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 1,
				'walker'          => ''
				);
				
				wp_nav_menu( $defaults );?>	

				
		</div>	
		
		<div class="col-xs-3 footer-links">
			
			
			<p>15 Rooney’s Road<br>
				Warrnambool 3280</p>

<p>Phone: <a href="tel:1300 559353">1300 559353</a><br>
International Phone: <a href="tel:+61 3 55617110">+61 3 55617110</a><br>
International Fax: <a href="tel:+61 3 55610364">+61 3 55610364</a></p>

<p><a href="#">Email us</a></p>
			
		</div>
		
		
		<div class="col-xs-6 end-xs">
			
			<img src="<?php bloginfo('template_url');?>/images/ico_aus-owned.svg" alt="Australian Owned">
			
			<img src="<?php bloginfo('template_url');?>/images/logo.svg" alt="FDPI">
			
			
		</div>
		
		
		
						
	</div>
</footer>
			
			
</div><!-- end of wrapper -->

<?php wp_footer();?>

</body>

</html>
