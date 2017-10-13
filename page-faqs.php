<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Motivated_Mamas
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="triangle-banner faqs-banner">
				<div class="inner">
					<div class="header-container">
						<h2>FAQs</h2>						
					</div>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'faqs_post',
					'order' => 'ASC'
				);
			
				$the_query = new WP_Query( $args );
			?>
			
			<section class="faqs">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="container">
							<div class="question"><h3><?php the_field('question'); ?></h3><div class="faqs-arrow"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/FAQsArrow.png"></div></div>
							<div class="answer"><p><?php the_field('answer'); ?></p></div>
						</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
