<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Motivated_Mamas
 */

?>

	</div><!-- #content -->

	<?php 
			$args = array(
				'post_type' => 'refund_policy'
			);
		
			$the_query = new WP_Query( $args );
		?>
		<div class="refund-policy-container">
			<section class="refund-policy">
				<div class="inner">
					<div class="container">
						<div class="close-button" id="refund-close">X</div>
						<div class="flexbox-container">
							<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<div>
									<?php the_field('col_1'); ?>
								</div>

								<div>
									<?php the_field('col_2'); ?>
								</div>
							<?php endwhile; wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</section>
		</div>

	<footer id="colophon" class="site-footer">
		<div class="site-info inner">
			<div class="refund-policy-button">
				<p id="refund-open">REFUND POLICY</p>
			</div>

			<div>
				<p>MOTIVATED MAMAS 2017, INFO@MOTIVATEDMAMAS.ORG</p>
				<a href="http://taradowdellgroup.com/">Designed by Tara Dowdell Group</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
