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

		<div class="newsletter-signup-container">
			<section class="newsletter-signup">
				<div class="inner">
					<div class="container">
						<div class="close-button" id="newsletter-close">X</div>
						<h2>JOIN NOW TO RECEIVE YOUR FREE GIFT</h2>
						<h3>WE HELP MOMS WIN!<br />IT TAKES A VILLAGE... JOIN YOURS HERE!</h3>
						<div class="newsletter-huffington-post">
							<p>"Single parents – specifically moms, who head up 83 percent of single parent households – need each other now more than ever. By coming together regularly and capitalizing on each other’s expertise, skill sets, hacks and best practices, we work together to problem solve in areas we most need help in, on extremely tight schedules and, notoriously, little sleep or support. We help moms win on anything from successfully navigating the child support system to repairing credit on the way to home-ownership."</p>
							<p>-The Huffington Post</p>
						</div>

						<div>
							<a class="newsletter-button" href="https://singleparentswhotravel.us16.list-manage.com/subscribe?u=3d361812dd7168358a51d848e&id=bf0a8097fb">JOIN NOW</a>
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
