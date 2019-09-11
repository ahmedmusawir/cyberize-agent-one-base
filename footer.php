<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework_2
 */

?>

	</div><!-- #content -->


	<footer id="footer-melissa" class="site-footer">


		<div class="container widgets_wrapper">
		   <div class="d-flex justify-content-center">
		      <div class="">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
						
						echo "Please Insert A Widget";
					}
				?>

					<aside id="footer-widget-1" class="widget-area  mx-auto">
						<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
					</aside><!-- #secondary -->

		        
		      </div>
		      
		   </div> <!-- END ROW -->
		   
		</div> <!-- END WIDGET WRAPPER -->
		<section class="site-info container-fluid">

			<div class="">
				<div class="copyright  d-flex align-items-center">
					<div class="text-center mx-auto">

						<?php the_field('theme_footer_text', 'option') ?> <?php echo date(Y); ?>

					</div>	
						
				</div>						
			</div>
			
		</section>

				<!--==============================================================================
				=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
				===============================================================================-->
				
				<!-- <div style="color: red"><strong>Current template:</strong>  -->
					<?php // echo get_current_template( true ); ?>
				<!-- </div> -->
				
				<!-- ====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ==== -->
						
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
