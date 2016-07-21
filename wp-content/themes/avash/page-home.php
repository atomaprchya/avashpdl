<?php /* Template Name: Homepage */ ?>
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

<!-- SLIDER -->
			<section id="slider" class="fullheight" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/demo/particles_bg2.jpg')">
				<span class="overlay dark-2"><!-- dark overlay [0 to 9 opacity] --></span>

				<canvas id="canvas-particle" data-rgb="156,217,249"><!-- CANVAS PARTICLES --></canvas>

				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						
						<div class="container text-center">
							
							<h1 class="nomargin wow fadeInUp" data-wow-delay="0.4s">
								I am 
								<!--
									TEXT ROTATOR
									data-animation="fade|flip|flipCube|flipUp|spin"
								-->
								<span class="rotate " data-animation="fade" data-speed="1500">
									Avash Poudel, a web developer, a traveller
								</span>
							</h1>

							<p class="lead font-lato size-30 wow fadeInUp" data-wow-delay="0.7s">
								It's been <span class="countTo" data-speed="4000">6</span> years, I've been loving web.
							</p>
							
							<a class="btn btn-default btn-lg" href="<?php echo add_query_arg( 'from', 'homepage', get_permalink( get_page_by_path( 'about-me' ) ) ); ?>">KNOW ABOUT ME</a>

						</div>

					</div>
				</div>

			</section>
			<!-- /SLIDER -->

			<!-- Welcome -->
			<section class="what_i_do_section">
				<div class="container">



					<div class="text-center canvasholder">
						
				

<div class="heading-title heading-dotted text-center clearfix">
	<h3>Who On <i class="fa fa-globe"></i> <span>Earth Am I?</span></h3>

</div>


<div class="who_am_i_holder clearfix">
	<div class="col-md-4 col-sm-4">
		<img class="pull-left wow fadeInRight animation-visible animated" src="<?php echo get_template_directory_uri(); ?>/assets/images/custom/me/avash_poudel_homepage.jpg" width="300" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
	</div>
	<div class="col-md-8 col-sm-8">
		<p class="lead font-lato">I am Avash Poudel. (<span>@atomaprchya</span>)<br> I am post graduate student studying MIT. I have been working on web development for six years using Magento, Wordpress, Codeigniter and Laravel. I also do AngularJs.
		</p>
		<ul class="social-icons list-unstyled list-inline">
			<li>
				<a target="_blank" href="https://www.facebook.com/atomaprchya">
					<i class="fa fa-facebook"></i>
					<h4>Facebook</h4>
					<span>Be My Friend</span>
				</a>
			</li>
			<li>
				<a target="_blank" href="https://twitter.com/atomaprchya">
					<i class="fa fa-twitter"></i>
					<h4>Twitter</h4>
					<span>Follow Me</span>
				</a>
			</li>
			
			<li>
				<a target="_blank" href="https://www.instagram.com/atomaprchya/">
					<i class="fa fa-instagram"></i>
					<h4>Instagram</h4>
					<span>See My Images</span>
				</a>
			</li>
			<li>
				<a target="_blank" href="https://au.linkedin.com/in/atomaprchya">
					<i class="fa fa-linkedin"></i>
					<h4>Linkedin</h4>
					<span>Check My Identity</span>
				</a>
			</li>
			
		</ul>
	</div>
</div>


						<!-- H2 -->


					</div>
					
					<div class="row pricetable-container hire_me_holder">


					<div class="heading-title heading-dotted text-center">
	<h2>I am <i class="fa fa-check-square-o"></i> <span>good at</span></h2>
</div>

	<div class="col-md-4 col-sm-4 price-table">
		<h3>Wordpress</h3>
		

		<ul>
			<li>Development</li>
			<li>Themes and Plugins</li>
			<li>Fixing</li>
			<li>Support</li>
		</ul>
		<a href="<?php echo add_query_arg( 'from', 'hire-me', get_permalink( get_page_by_path( 'contact-me' ) ) ); ?>" class="btn btn-3d btn-xlg btn-reveal btn-teal" >
									<i class="fa fa-briefcase"></i>
									<span>HIRE ME</span>
								</a>

								
	</div>

	<div class="col-md-4 col-sm-4 price-table popular">

		<h3>Magento</h3>
		
		<ul>
			<li>Development</li>
			<li>Themes and Plugins</li>
			<li>Fixing</li>
			<li>Support</li>
		</ul>
		<a href="<?php echo add_query_arg( 'from', 'hire-me', get_permalink( get_page_by_path( 'contact-me' ) ) ); ?>" class="btn btn-3d btn-xlg btn-reveal btn-teal">
									<i class="fa fa-briefcase"></i>
									<span>HIRE ME</span>
								</a>
	</div>

	<div class="col-md-4 col-sm-4 price-table">
		<h3>Codeigniter</h3>
		
		<ul>
			<li>Development</li>
			<li>Themes and Plugins</li>
			<li>Fixing</li>
			<li>Support</li>
		</ul>
		<a href="<?php echo add_query_arg( 'from', 'hire-me', get_permalink( get_page_by_path( 'contact-me' ) ) ); ?>" class="btn btn-3d btn-xlg btn-reveal btn-teal">
									<i class="fa fa-briefcase"></i>
									<span>HIRE ME</span>
								</a>
	</div>

</div>

				</div>
			</section>
			<!-- Welcome -->


			



			<!-- CALLOUT -->
			<section class="callout-dark heading-title heading-arrow-bottom">
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">Besides, I love to <i class="fa fa-pencil"> </i>sketch, <i class="fa fa-smile-o"></i> help people and <i class="fa fa-binoculars"></i> explore.</h3>
						<p>We can't solve problems by using the same kind of thinking we used when we created them.</p>
					</div>

				</div>
			</section>
			<!-- /CALLOUT -->




			<!--
				.box-pink
				.box-blue
				.box-orange
				.box-yellow
				.box-purple
				.box-red
				.box-brown
				.box-green
				.box-black
				.box-gray
				.box-teal
			-->
			<div class="row box-gradient box-teal">
				<div class="col-xs-6 col-sm-3">
					<i class="fa fa-child fa-4x"></i>
					
					<h2><span class="countTo font-raleway" data-speed="3000">100</span>+</h2>
					<h4>Happy customers</h4>
				</div>

				<div class="col-xs-6 col-sm-3">
					<i class="fa fa-plane fa-4x"></i>
					
					<h2><span class="countTo font-raleway" data-speed="3000">100</span>+</h2>
					<h4>New places</h4>
				</div>

				<div class="col-xs-6 col-sm-3">
					<i class="fa fa-coffee fa-4x"></i>
					
					<h2><span class="countTo font-raleway" data-speed="3000">5000</span>+</h2>
					<h4>Cups of coffees</h4>
				</div>

				<div class="col-xs-6 col-sm-3">
					<i class="fa fa-heartbeat fa-4x"></i>
					<h2><span class="countTo font-raleway" data-speed="3000">20</span>+</h2>
					<h4>Blood donations</h4>
				</div>
			</div>



<!-- -->
			<section class="alternate">
				<div class="container">
					
					<div class="text-center">
						<h2 class="wow fadeInUp nomargin" data-wow-delay="0.3s">IF YOU NEED A FULL STACK WEB DEVELOPER</h2>

						<p class="lead font-lato size-30 wow fadeInUp margin-bottom-60" data-wow-delay="0.5s">Or Hanging Out for Ideas and Innovations.</p>
						
						<div class="margin-top-30 hire_beer">
							<a href="<?php echo add_query_arg( 'from', 'hire-me', get_permalink( get_page_by_path( 'contact-me' ) ) ); ?>" class="btn btn-3d btn-xlg  btn-teal">
									<i class="fa fa-briefcase fa-2x"></i>
									<span>HIRE ME</span>
								</a>
							<span class="size-17 hidden-xs wow fadeInUp" data-wow-delay="1s">&nbsp; OR &nbsp;</span>
							<a href="<?php echo add_query_arg( 'from', 'beer-me', get_permalink( get_page_by_path( 'contact-me' ) ) ); ?>" class="btn btn-3d btn-xlg  btn-brown">
									<i class="fa fa-beer fa-2x"></i>
									<span>BEER ME</span>
								</a>
						</div>
					</div>

				</div>
			</section>
			<!-- / -->
			


<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="myModalLabel">Modal title</h4>
								</div>

								<!-- Modal Body -->
								<div class="modal-body">
									<h4>Text in a modal</h4>
									<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

									<h4>Popover in a modal</h4>
									<p>This <a href="#" data-toggle="popover" class="btn btn-default" title="" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">button</a> should trigger a popover on click.</p>

									<h4>Tooltips in a modal</h4>
									<p><a href="#" data-toggle="tooltip" title="" data-original-title="Tooltip">This link</a> and <a href="#" data-toggle="tooltip" title="" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>

									<hr>

									<h4>Overflowing text to show scroll behavior</h4>
									<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
									<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
									<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
									<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
									<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
									<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
								</div>

								<!-- Modal Footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>

							</div>
						</div>
					</div>
			

<?php
get_footer();
