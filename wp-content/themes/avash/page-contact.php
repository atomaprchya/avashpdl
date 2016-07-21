<?php /* Template Name: Contact Page */ ?>
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
$email_3 = $avash_theme_options_options['email_3']; 
$address = $avash_theme_options_options['address']; ?>
<!-- -->
			<section>
				<div class="container">
					
					<div class="row">

						<!-- FORM -->
						<div class="col-md-9 col-sm-9">

						<!-- Useful Elements -->
						<div class="panel panel-default">
							<div class="panel-heading panel-heading-transparent">
								<h2 class="panel-title">You are just a few seconds away from reaching me.</h2>
							</div>

							<div class="panel-body">

								<form id="avashContactForm" action="" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right">
									<fieldset>
								

										<div class="row">
											<div class="form-group">
												<div class="col-md-6 col-sm-6">
													<label>First Name *</label>
													<input type="text" name="first_name" id="first_name" value="" class="form-control required">
												</div>
												<div class="col-md-6 col-sm-6">
													<label>Last Name *</label>
													<input type="text" name="last_name" id="last_name" value="" class="form-control required">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-6 col-sm-6">
													<label>Email *</label>
													<input type="email" name="email" id="email" value="" class="form-control required">
												</div>
												<div class="col-md-6 col-sm-6">
													<label>Phone *</label>
													<input type="text" name="phone" id="phone" value="" class="form-control required">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>Purpose *</label>
													<select name="purpose" id="purpose" class="form-control pointer required">
														<option value="">--- Select ---</option>
														<option value="friend">You are my friend.</option>
														<option value="developer">You want to work with me.</option>
														
													</select>
												</div>
											</div>
										</div>

										

										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>What do you like to say? *</label>
													<textarea name="message" id="message" rows="4" class="form-control required"></textarea>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>
														Website
														<small class="text-muted">- optional</small>
													</label>
													<input type="text" name="website" id="website" placeholder="http://" class="form-control">
												</div>
											</div>
										</div>

										

									</fieldset>

									<div class="row">
										<div class="col-md-12">
											<button type="submit" class="btn btn-3d btn-teal btn-xlg btn-block margin-top-30" name="contact_send_btn">
												SEND APPLICATION
												<span class="block font-lato">We'll get back to you within 48 hours</span>
											</button>
										</div>
									</div>

								</form>


							</div>

							<div class="panel-footer">
							

							</div>
						</div>
						<!-- /Useful Elements -->

						</div>
						<!-- /FORM -->


						<!-- INFO -->
						<div class="col-md-3 col-sm-3">

							

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong><?php echo $address; ?></span>
								<!-- <span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:1800-555-1234">1800-555-1234</a></span> -->
								<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="<?php echo $email_3;?>"><?php echo $email_3;?></a></span>
							</p>

							<hr />

							<p>
								<?php
					if(is_active_sidebar('contact-sidebar')){
						dynamic_sidebar('contact-sidebar');
					}
					?>
							</p>

							

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- / -->
					

<?php
get_footer();
