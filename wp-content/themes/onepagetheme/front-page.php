<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package One Page Theme
 */

get_header();
?>
<div class="home-header">
	<div class="center-wr">
		<div class=" innerdiv-home-heder clearfix">
			<div class="home-header-left">
				<h1><?php echo get_theme_mod('home_welcome_msg', __( 'Welcome to The Divyansh' ))?></h1>
				<h2><?php echo get_theme_mod('onepagetheme_tagline', __( 'We Make Digital Ideas & SEO Marketing' ) )?></h2>
				<p><?php echo get_theme_mod('onepagetheme_description', __( 'The Divyansh is a professional looking HTML template using a Bootstrap 5 (beta 2). This CSS template is free for you provided by TemplateMo.' ) )?></p>

				<form id="search" action="#" method="GET">
				  <fieldset>
				    <input type="address" name="address" class="email" placeholder="Your website URL..." autocomplete="on" required>
				  </fieldset>
				  <fieldset>
				    <button type="submit" class="analyze-site-button">Analyze Site</button>
				  </fieldset>
				</form>

			</div> <!-- End of Home Header Left -->
			<div class="home-header-right">
				<img src="<?php the_field('home_image'); ?>" />
			</div> <!-- End of Home Header Right -->
		</div> <!-- End of Inner div home header -->
	</div> <!-- End of Center-wr -->
</div> <!-- End of home Header -->
<div class="about-us">
	<div class="center-wr">
		<div class="clearfix inner-div-about-us">
			<div class="about-us-left">
				<img src="<?php echo CFS()->get( 'about_us_side_image' );?>" alt="About Us Side Image" >
			</div> <!-- End of About us left -->
			<div class="about-us-right clearfix">
				<?php 
					$aboutus = CFS()->get( 'about_us_section' );
					foreach ( $aboutus as $aboutus ) {
						?>
						<div class="about-us-right-small-sections">
							<img src="<?php echo $aboutus['about_us_image']; ?>">
							<h4> <?php echo $aboutus['about_us_heading']; ?></h4>
							<p> <?php  echo $aboutus['about_us_description'];?></p>
						</div> <!-- About us right small sections -->
				<?php 	    
					}
				?>
			</div> <!-- End of About us right -->
		</div> <!-- End of Inner Div About Us -->
	</div> <!-- End of Center Wr -->
</div> <!-- End of About us -->
<div class="services">
	<div class="center-wr">
		<div class="clearfix inner-div-services">
			<div class="services-left">
				<img src="<?php 
					 	echo CFS()->get( 'services_image' ); 	
					?>" alt="Services Image">
			</div> <!-- End of Services left -->
			<div class="services-right">
				<h2>
					<?php 
					 	echo CFS()->get( 'service_heading' ); 	
					?>
				</h2>
				<p>
					<?php 
						echo CFS()->get( 'service_description' ); 
					?>
				</p>
				<?php 
				$servicerange = CFS()->get( 'range_section' );
				foreach ( $servicerange as $servicerange ) { ?>
				<div class="service-range-single-box">
					<h4>
						<?php echo $servicerange['service_name']; ?>
					</h4>
					<span style=" left: <?php echo $servicerange['service_range']; ?>%;">
						<?php echo $servicerange['service_range']; ?>
					</span>	
					<div class="filled-bar" style=" width:<?php echo $servicerange['service_range']; ?>%;"></div>
					<div class="full-bar"></div>
				</div>	<!-- End of Service range single box -->
				<?php
				 }
				?>
			</div> <!-- End of service right -->
		</div> <!-- End of Inner Div Services -->
	</div> <!-- End of Center wr -->
</div> <!-- End of Services -->

<div class="portfolio">
	<div class="center-wr">
		<div class="clearfix inner-div-portfolio">
			<h2>
				<?php echo CFS()->get( 'portfolio_heading' ); ?>
			</h2>
			<div class="portfolio-list">
				<?php $portfoliolist = CFS()->get( 'portfolio_list' ); 
					foreach ( $portfoliolist as $portfoliolist ) {
					?>
				<div class="hide-show-container">
					<div class="hidden-content">
						<h4>
							<?php echo $portfoliolist['portfolio_project_heading']; ?>	
						</h4>
						<p>
							<?php echo $portfoliolist['portfolio_project_description']; ?>
						</p>
					</div> <!-- End of Hidden content -->
					<div class="showed-content">
						<img src="<?php echo $portfoliolist['portfolio_project_image']; ?>" alt = "Portfolio Image">
					</div> <!-- End of Showed Content -->
				</div> <!-- End of Hide Show Container -->
				<?php 
					}
				?>
			</div> <!-- End of Portfolio List -->
		</div> <!-- End of Inner div Portfolio --> 
	</div> <!-- End of Center- wr -->
</div> <!-- End of Portfolio -->
<div class="message-us">
	<div class="center-wr">
		 <div class="clearfix inner-div-message-us">
		 	<div class="phone-number-section">
		 		<h2>
		 			<?php the_field('message_us_heading'); ?>
		 		</h2>
		 		<p>
		 			<?php the_field('message_us_description'); ?>
		 		</p>
		 			<?php 
		 				$phonenumber = get_field( "phone_number" );
		 				if ($phonenumber) { ?>
		 					<h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> 
		 						<a href="#"> <?php 
		 							the_field("phone_number"); ?>
		 						</a></span>
		 					</h4>	
		 			<?php 
		 				}
		 			?>
		 	</div> <!-- End of Phone Number Section -->
		 	<div class="contact-form">
		 		<?php 
		 		   echo do_shortcode('[wpforms id="37" title="false"]');
		 		?>
		 	</div> <!-- End of contact form -->
		 </div> <!-- End of Inner div message us -->
	</div> <!-- End of center-wr -->
</div> <!-- End of Message Us -->
<?php 
get_footer();
?>