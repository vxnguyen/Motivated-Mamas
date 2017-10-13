<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Motivated_Mamas
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="landing">
				<div class="landing-opacity-layer">
					<?php 
						$args = array(
							'post_type' => 'landing'
						);
					
						$the_query = new WP_Query( $args );
					?>
					
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<div class="inner">
							<div>
								<h1><?php the_field('site_title'); ?></h1>
								<p class="big-display"><?php the_field('tagline'); ?></p>
							</div>
						</div>
					
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'mama_identity'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="mama-identity">
				<div class="inner">
					<div>
						<div class="theres-the">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/TheresTheWreath.png">
						</div>

						<div>
							<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<?php the_field('identity'); ?>
							<?php endwhile; wp_reset_query(); ?>
						</div>
					</div>	
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'group_for_you'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="group-for-you">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="header">
							<h2><?php the_field('title'); ?></h2>
						</div>

						<div class="flex-container">
							<div class="image">
								<?php echo wp_get_attachment_image( get_field('image'), 'full'); ?>
							</div>

							<div class="bullets">
								<?php the_field('bullets'); ?>
							</div>
						</div>

					<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'testimonial_1'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="testimonial testimonial-1">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="flexbox-container">
							<div class="image">
								<?php echo wp_get_attachment_image( get_field('headshot'), 'full'); ?>
							</div>

							<div class="content">
								<?php the_field('testimonial'); ?>

								<p class="name"><?php the_field('name'); ?></p>
							</div>
						</div>
						<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'how_and_why'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="how-and-why">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<h2><?php the_field('title'); ?></h2>

						<div class="flexbox-container">
							<div class="bullets">
								<?php the_field('bullets'); ?>
							</div>

							<div class="image">
								<?php echo wp_get_attachment_image( get_field('image'), 'full'); ?>
							</div>
						</div>

					<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<section class="enroll-button-section">
				<div class="inner">
					<div class="enroll-button-container">
						<a href="#payment">YES I WANT TO GET STARTED</a>
					</div>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'not_for_everybody'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="not-for-everybody">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<h2><?php the_field('title'); ?></h2>

						<div class="flexbox-container">
							<div>
								<div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/BoxFlourish1.png"></div>
								<?php the_field('for_you'); ?>
							</div>

							<div>
								<div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/BoxFlourish1.png"></div>
								<?php the_field('not_for_you'); ?>
							</div>
						</div>

					<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'testimonial_2'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="testimonial testimonial-2">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="flexbox-container">
							<div class="image">
								<?php echo wp_get_attachment_image( get_field('headshot'), 'full'); ?>
							</div>

							<div class="content">
								<?php the_field('testimonial'); ?>

								<p class="name"><?php the_field('name'); ?></p>
							</div>
						</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'wheres_your_village'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="wheres-your-village">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="flexbox-container">
							<div class="image">
								<?php echo wp_get_attachment_image( get_field('image'), 'full'); ?>
							</div>

							<div class="bullets">
								<h2><?php the_field('title'); ?></h2>

								<?php the_field('bullets'); ?>
							</div>
						</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'ask_yourself'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="ask-yourself">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<h2><?php the_field('title'); ?></h2>
						<p class="sub-title"><?php the_field('sub-title'); ?></p>

						<div>
							<p>GOT QUESTIONS? SEE OUR</p>
							<div class="faqs-button-container">
								<a href="<?php echo get_page_link(6); ?>">FAQs</a>
							</div>
						</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => '5_steps'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="steps-5">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="header">
						<h2><?php the_field('header'); ?></h2>
						<p><?php the_field('header_text'); ?></p>
					</div>

						<div class="step5flourish"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/5StepFlourish.png"></div>

						<div class="step">
							<div class="step-box">STEP 1</div>
							<?php the_field('step_1'); ?>
						</div>

						<div class="step">
							<div class="step-box">STEP 2</div>
							<?php the_field('step_2'); ?>
						</div>

						<div class="step">
							<div class="step-box">STEP 3</div>
							<?php the_field('step_3'); ?>
						</div>

						<div class="step">
							<div class="step-box">STEP 4</div>
							<?php the_field('step_4'); ?>
						</div>

						<div class="step">
							<div class="step-box">STEP 5</div>
							<?php the_field('step_5'); ?>
						</div>

						<div class="step5flourish"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/5StepFlourish.png"></div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'testimonial_3'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="testimonial testimonial-3">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="flexbox-container">
							<div class="image">
								<?php echo wp_get_attachment_image( get_field('headshot'), 'full'); ?>
							</div>

							<div class="content">
								<?php the_field('testimonial'); ?>

								<p class="name"><?php the_field('name'); ?></p>
							</div>
						</div>
						<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<section class="enroll-button-section">
				<div class="inner">
					<div class="enroll-button-container">
						<a href="#payment">YES I WANT TO GET STARTED</a>
					</div>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'how_we_became'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="how-we-became">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<h2><?php the_field('title'); ?></h2>

						<div class="bg-container">
							<div class="flexbox-container">
								<div class="bullets">
									<?php the_field('column_1'); ?>
								</div>

								<div class="bullets">
									<?php the_field('column_2'); ?>
								</div>
							</div>
						</div>

					<?php endwhile; wp_reset_query(); ?>

					<div class="learn-more-about-us">
						<a href="">LEARN MORE ABOUT TOMIKA AND STEFANIE</a>
					</div>
				</div>
			</section>

			<section class="enroll-button-section enroll-image">
				<div class="opacity-layer">
					<div class="inner">
						<div class="enroll-button-container">
							<a href="#payment">YES I WANT TO GET STARTED</a>
						</div>
					</div>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'money_back_guarantee'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="money-back-guarantee">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="header">
						<h2><?php the_field('header'); ?></h2>
						<p><?php the_field('sub_header'); ?></p>
					</div>

						<div class="flexbox-container">
							<div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/MoneyBackFlourish.png">
								<?php the_field('content_1'); ?>
							</div>

							<div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/MoneyBackFlourish.png">
								<?php the_field('content_2'); ?>
							</div>
						</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'testimonial_4'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="testimonial testimonial-4">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="flexbox-container">
							<div class="image">
								<?php echo wp_get_attachment_image( get_field('headshot'), 'full'); ?>
							</div>

							<div class="content">
								<?php the_field('testimonial'); ?>

								<p class="name"><?php the_field('name'); ?></p>
							</div>
						</div>
						<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'about_us'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="about-us">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="flexbox-container">
						<div>
							<h3><?php the_field('header_1'); ?></h3>
							<?php echo wp_get_attachment_image( get_field('image_1'), 'full'); ?>
							<p><?php the_field('content_1'); ?></p>
							<div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/AboutUsFlourish.png">
							</div>
						</div>

						<div>
							<h3><?php the_field('header_2'); ?></h3>
							<?php echo wp_get_attachment_image( get_field('image_2'), 'full'); ?>
							<p><?php the_field('content_2'); ?></p>
							<div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/AboutUsFlourish.png">
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<section class="triangle-banner im-ready">
				<div class="inner">
					<div class="header-container">
						<h2>I'M READY TO BE A MOTIVATED MAMA!</h2>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/ImReadyFlourish.png">
					</div>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'payment'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="payment">
				<a name="payment"></a> 
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="content">
							<p><?php the_field('content'); ?></p>
						</div>

						<div class="flexbox-container">
							<div>
								<h3>MONTHLY PAYMENTS</h3>
								<?php the_field('monthly'); ?>
							</div>

							<div>
								<h3>PAID IN FULL</h3>
								<?php the_field('full'); ?>
							</div>
						</div>

						<?php endwhile; wp_reset_query(); ?>

						<div>
							<p>Got questions? Check out our <a href="<?php echo get_page_link(6); ?>">FAQs</a> or email us at <a href="mailto:info@motivatedmamas.org">info@motivatedmamas.org.</a></p>
						</div>
				</div>
			</section>

			<?php 
				$args = array(
					'post_type' => 'bonus'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class=>
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<div class="bonus-header">
						<div class="inner">
							<h2><?php the_field('header'); ?></h2>
						</div>
					</div>

					<div class="bonus">
						<div class="inner">
							<div class="bonus-subheader">
								<h2><?php the_field('subheader'); ?></h2>
							</div>

							<div class="flexbox-container">
								<div>
									<div>
										<img class="box-number" src="<?php bloginfo('stylesheet_directory'); ?>/images/BonusBox1.png">
									</div>
									<div class="bonus-box">
										<?php the_field('bonus_1_content'); ?>
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/BonusFlourish.png">
									</div>
								</div>

								<div>
									<div>
										<img class="box-number" src="<?php bloginfo('stylesheet_directory'); ?>/images/BonusBox2.png">
									</div>
									<div class="bonus-box">
										<?php the_field('bonus_2_content'); ?>
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/BonusFlourish.png">
									</div>
								</div>

								<div>
									<div>
										<img class="box-number" src="<?php bloginfo('stylesheet_directory'); ?>/images/BonusBox3.png">
									</div>
									<div class="bonus-box">
										<?php the_field('bonus_3_content'); ?>
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/BonusFlourish.png">
									</div>
								</div>
							</div>
						</div>
					</div>

				<?php endwhile; wp_reset_query(); ?>
			</section>

			<?php 
				$args = array(
					'post_type' => 'still_got_questions'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class="still-got-questions">
				<div class="inner">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<h2><?php the_field('header'); ?></h2>
						<div class="content"><?php the_field('content'); ?></div>

						<div class="faqs-button-container">
							<a href="<?php echo get_page_link(6); ?>">FAQs</a>
						</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

			<section class="enroll-button-section enroll-image2">
				<div class="opacity-layer">
					<div class="inner">
						<div class="enroll-button-container">
							<a href="#payment">YES I WANT TO GET STARTED</a>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
