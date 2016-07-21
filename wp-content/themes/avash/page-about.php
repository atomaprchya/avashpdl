<?php /* Template Name: About Me */ ?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package avash
 */

get_header(); ?>
<?php $avash_theme_options_options = get_option( 'avash_theme_options_option_name' );
$author_name_0 = $avash_theme_options_options['author_name_0'];
$author_profile_image = $avash_theme_options_options['profileimage'];
$designation_1 = $avash_theme_options_options['designation_1'];
$who_am_i_2 = $avash_theme_options_options['who_am_i_2'];
$interests = $avash_theme_options_options['interests'];
$terms = get_terms( array(
    'taxonomy' => 'project-technology',
    'hide_empty' => false,
) );
?>
<?php while ( have_posts() ) : the_post(); ?>
			
			<!-- /PAGE HEADER -->
			<section>
				<div class="container">

					<div class="col-lg-3 col-md-3 col-sm-4  aboutme-sidebar">
					
						<div class="thumbnail text-center">
							<img src="<?php echo $author_profile_image; ?>" alt="" />
							<h2 class="size-18 margin-top-10 margin-bottom-0"><?php echo $author_name_0; ?></h2>
							<h3 class="size-11 margin-top-0 margin-bottom-10 text-muted"><?php echo $designation_1; ?></h3>
						</div>

						

						


						<h3 class=" size-16 margin-bottom-20">SKILLS</h3>
						<div class=" margin-bottom-20">

								
								<?php
								if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
								
								foreach ( $terms as $term ) {
								?>
								<a class="tag" href="#">
									<span class="txt"><?php echo $term->name; ?></span>
									<span class="num"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
								</a>
								<?php
								}
								
								}
								?>
							</div>
						<!-- /SIDE NAV -->

						

						<a href="<?php echo add_query_arg( 'from', 'quick-message', get_permalink( get_page_by_path( 'contact-me' ) ) ); ?>" class="btn btn-3d btn-xlg btn-reveal btn-brown">
						<i class="et-envelope"></i>
						<span>Send Message to me</span>
						</a>


						

					</div>
				

					<!-- RIGHT -->
					<div class="col-lg-9 col-md-9 col-sm-8 margin-bottom-30 aboutme_content_section">

						


						<div class=""><!-- .box-light OR .box-dark -->


							

							<div class="">


							<div class="about-me-summary">
					<p class="font-lato weight-300 size-18 nomargin-bottom about-me-summary"><?php echo $who_am_i_2; ?></p>
				</div>

				<div class="masonry-gallery columns-3 clearfix lightbox" data-img-big="2" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>

	<a class="image-hover" href="<?php echo get_template_directory_uri(); ?>/assets//images/demo/1200x800/4-min.jpg">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-me/600x400/1.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php echo get_template_directory_uri(); ?>/assets//images/demo/1200x800/5-min.jpg">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-me/1200x800/2.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php echo get_template_directory_uri(); ?>/assets//images/demo/1200x800/6-min.jpg">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-me/600x400/3.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php echo get_template_directory_uri(); ?>/assets//images/demo/1200x800/7-min.jpg">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-me/600x400/5.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php echo get_template_directory_uri(); ?>/assets//images/demo/1200x800/8-min.jpg">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-me/600x400/2.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php echo get_template_directory_uri(); ?>/assets//images/demo/1200x800/9-min.jpg">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-me/600x400/4.jpg" alt="...">
	</a>

</div>
							
								

							</div>

							<div class=" aboutme-sections-tab">
								<ul class="nav nav-tabs nav-button-tabs">
	<li class="active"><a href="#home" data-toggle="tab">Experience</a></li>
	<li><a href="#profile" data-toggle="tab">Education</a></li>
	<li><a href="#interests" data-toggle="tab">Interests</a></li>
	<li><a href="#volunteer" data-toggle="tab">Volunteer</a></li>
	
</ul>

<div class="tab-content">
	<div class="tab-pane fade in active" id="home">
		<!-- H4 -->
		<div class="heading-title heading-border">
			<h4>Project Manager <span>Sroth Code</span></h4>
			<p class="font-lato size-16">Sroth Code is newly started IT venture by group of youths in Kathmandu. After a year in Codepixelz Media, I was called in for management of newly hired employees in wordpress theme and plugins development, Magento plugins and theme development, Game development in Unity and Monthly Speaking Seminars (Code Mela).
I make a set of actions for a week, monitor progress, assist developers in Wordpress and Magento, communicate with client frequently and report to board of directors.</p>
<div class="experience-date-locale field-text"><time>January 2016</time> – Present (5 months) <span class="locality"><span dir="ltr">Anamnagar, Kathmandu, Nepal</span></span></div>
		</div>
		<!-- H4 -->
		<div class="heading-title heading-border">
			<h4>Sr. Wordpress developer <span>Codepixelz Media</span></h4>
			<p class="font-lato size-16">-Gathering Requirement and 
-Drafting functional specifications as per client requirements.
-Supporting and interacting with clients in a fast-paced environment during project life cycle.
-Leading to develop wordpress powered website with team of developers.
-Manage milestones and deadlines through BaseCamp.
-Prioritizing amendments after development.</p>
<div class="experience-date-locale field-text"><time>January 2015</time> – <time>January 2016</time> (1 year 1 month)<span class="locality"><span dir="ltr">Ekantakuna, Lalitpur, Nepal</span></span></div>
		</div>

		<!-- H4 -->
		<div class="heading-title heading-border">
			<h4>Sr. Magento Developer <span>E-commerce-hongkong</span></h4>
			<p class="font-lato size-16">- Architect and propose Magento solutions as per client requirements.
- Review business requirements working with other team members.
- Perform a technical analysis of requirements.
- Produce a solid, detailed technical design.
- Work with the QA and Customer Support teams to triage and fix bugs with rapid turnaround.
- Contribute ideas for making the application better and easier to use
- Train the subordinate team of developers.
- Create reusable components, which can be configured for different projects
- Create test plans and perform thorough quality analysis on the code before go live.
- Research on new integration and plug-in capabilities.
- Be actively involved in the pre-sales activities by demonstrating technical capabilities through POCs.</p>
<div class="experience-date-locale field-text"><time>February 2013</time> – <time>December 2014</time> (1 year 11 months)</div>
		</div>
		<!-- H4 -->
		<div class="heading-title heading-border">
			<h4>PHP Developer <span>Cloud Tech Web</span></h4>
			<p class="font-lato size-16">-Recieve tasks through email and prioritize them for further actions.
-Develop websites using Wordpress, Joomla, Drupal according to client's requirements, time and budget.
-Review with clients time and again, sometimes independently, more often collaborating with business analysts.
-Development of scalable in-house projects.
-Research about extending previous or upcoming projects.</p>
<div class="experience-date-locale field-text"><time>February 2010</time> – <time>December 2012</time> (2 years 11 months)<span class="locality"><span dir="ltr">anamnagar, kathmandu, Nepal</span></span></div>
		</div>
	</div>
	<div class="tab-pane fade" id="profile">
		<!-- H4 -->
		<div class="heading-title heading-border">
			<h4>London Metropolitan University</h4>
			<p class="font-lato size-16">Bachelor of Science, Computing, Upper Second Class Honours</p>
<span class="field-text"><time>2012</time><time> – 2013</time></span>
		</div>
		<div class="heading-title heading-border">
			<h4>Informatics College, Nepal</h4>
			<p class="font-lato size-16">International Advanced Diploma in Business System Development, Computing, Distinction</p>
<span class="field-text"><time>2010</time><time> – 2011</time></span>
		</div>
		<div class="heading-title heading-border">
			<h4>Informatics College, Nepal</h4>
			<p class="font-lato size-16">International Diploma in Information Technology & Comrnunication, Computing, Distinction</p>
<span class="field-text"><time>2009</time><time> – 2010</time></span>
		</div>
		<div class="heading-title heading-border">
			<h4>National School of Sciences</h4>
			<p class="font-lato size-16">Intermediate, Science, Distinction</p>
<span class="field-text"><time>2005</time><time> – 2006</time></span>
		</div>
		<div class="heading-title heading-border">
			<h4>Himalaya Vidya Mandir</h4>
			<p class="font-lato size-16">SLC, General Studies, Distinction</p>
<span class="field-text"><time>1994</time><time> – 2004</time></span>
		</div>
	</div>
	
	<div class="tab-pane fade" id="interests">
		<div class=" margin-bottom-60">

		<?php 
			$interests_array = explode(',', $interests);
			foreach ($interests_array as $key => $value) {
				?>
					<a class="tag">
									<span class="txt"><?php echo $value; ?></span>
									
								</a>
				<?php
			}
		?>



								
								
							</div>
						<!-- /SIDE NAV -->
	</div>
	<div class="tab-pane fade" id="volunteer">
		<!-- H4 -->
		<div class="heading-title heading-border">
			<h4>Webmaster, <span>Rotaract Club of Pashupati-Ktm</span></h4>
			<p class="font-lato size-16">I was involved in creation, maintainence and upgrade of Rotaract Club of Pashupati-Ktm's official website. I had to manage weekly minutes of the meeting, manage event galleries and maintain Rotaracters informations time and again. Information sharing through web media was sole purpose of myself being webmaster in Rotaract club of Pashupati-Ktm, Nepal.</p>
<span class="field-text"><time>July 2012</time> – <time>June 2013</time> (1 year)<span class="locality"> Social Services</span></span>
		</div>
		
	</div>

	
</div>
							</div>

						</div>



						

					</div>

					
					<!-- LEFT -->
					
					
				</div>
			</section>
			<!-- / -->	

<?php endwhile; ?>	

<?php
get_footer();
