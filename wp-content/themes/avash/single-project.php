<?php
/**
 * The template for displaying all single projects.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package avash
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


<?php
$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
if ( ! empty( $full_image_url[0] ) ) {
	$project_full_image = $full_image_url[0];
}
?>
<section class="no-transition height-550 parallax parallax-4" style="background-image:url('<?php echo $project_full_image; ?>');">
<div class="overlay dark-0"><!-- dark overlay [1 to 9 opacity] --></div>
</section>
			<!-- /PARALLAX IMAGE -->

<section class="page-header dark page-header-xs">
				<div class="container">

					<h1><?php echo get_the_title(); ?></h1>

					<ul class="page-options list-inline">
						<li><a href="#" class="glyphicon glyphicon-menu-left"></a></li>
						<li><a href="#" class="glyphicon glyphicon-th-large"></a></li>
						<li><a href="#" class="glyphicon glyphicon-menu-right"></a></li>
					</ul>


				</div>
			</section>

			<section id="portfolio" class="nopadding-bottom">
				<div class="container">
					
					<div class="row">
						
						<div class="col-md-8 col-sm-8">

							<!-- Subtitle -->
							<div class="heading-title heading-border">
								<h2><?php echo get_the_title(); ?> <span>Details</span></h2>

								<ul class="list-inline categories nomargin">
								<?php $terms = get_the_terms($post, 'project-category'); ?>
								<?php if ( $terms && ! is_wp_error( $terms ) ) :
								$draught_links = array();
								foreach ( $terms as $term ) { ?>
								<li><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></li>
								
								<?php } ?>
									
									
								<?php endif; ?>
								</ul>

							</div>
							<!-- /Subtitle -->

							<?php the_content(); ?>
							<div>
								<!-- 
	controlls-over		= navigation buttons over the image 
	buttons-autohide 	= navigation buttons visible on mouse hover only
	
	data-plugin-options:
		"singleItem": true
		"autoPlay": true (or ms. eg: 4000)
		"navigation": true
		"pagination": true
		"items": "4"

	owl-carousel item paddings
		.owl-padding-0
		.owl-padding-3
		.owl-padding-6
		.owl-padding-10
		.owl-padding-15
		.owl-padding-20
-->
<!-- H4 -->
<div class="heading-title heading-line-double">
	<h4>Some <span>Screenshots</span></h4>
</div>
<div class="masonry-gallery columns-3 clearfix lightbox" data-img-big="2" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>

<?php 

$gallery_data = get_post_meta($post->ID, 'gallery_data');
/*echo '<pre>';
print_r($gallery_data[0]['image_url']);
echo '</pre>';*/


$gallery_data_images = $gallery_data[0]['image_url'];
if(sizeof($gallery_data_images)>0):
	foreach ($gallery_data_images as $key => $image) {
		# code...
	
?>
	

	<a class="image-hover" href="<?php echo $image; ?>">
		<img src="<?php echo $image; ?>" alt="...">
	</a>

<?php } endif; ?>
	
	
</div>
							</div>

						</div>

						<div class="col-md-4 col-sm-4">
						
							<div class="panel panel-default">
								<div class="panel-body">
									
									<p class="font-lato size-18"><?php the_excerpt(); ?></p>

									<ul class="portfolio-detail-list list-unstyled nomargin">
										<li><span><i class="fa fa-user"></i>Author:</span> <?php if(get_field( "project_author" )){
											echo get_field('project_author');
											} ?></li>
										<li><span><i class="fa fa-calendar"></i>Released:</span> <?php if(get_field( "released_year" )){
											echo get_field('released_year');
											} ?></li>
										<li><span><i class="fa fa-lightbulb-o"></i>Technologies:</span>
										<?php $terms = get_the_terms($post, 'project-technology'); ?>
								<?php if ( $terms && ! is_wp_error( $terms ) ) :
									$draught_links = array();
									foreach ( $terms as $term ) {
									$draught_links[] = $term->name;
									}
									$on_draught = join( "/ ", $draught_links );
								 ?>

								<?php endif; ?>
								<?php printf( esc_html__( '%s', 'avash' ), esc_html( $on_draught ) ); ?></li>
										<li><span><i class="fa fa-link"></i>Website:</span> <?php if(get_field( "website" )){ ?>
										<a href="<?php echo get_field('website'); ?>" target="_blank"><?php echo get_field('website'); } ?></a>
											</li>
									</ul>

								</div>
								
								<div class="panel-footer">

									<!-- Social Icons -->
									<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">

										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>

									<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>

									<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus" data-toggle="tooltip" data-placement="top" title="Google plus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>

									<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

									<a href="#" class="social-icon social-icon-sm social-icon-transparent social-pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
									<!-- /Social Icons -->

								</div>

							</div>

						</div>

					</div>


					<!-- RELATED -->
					<div class="heading-title heading-dotted text-center margin-top-50 margin-bottom-80">
						<h2>RELATED PROJECTS</h2>
					</div>

				</div>





				<!-- 
					RELATED CAROUSEL 

					controlls-over		= navigation buttons over the image 
					buttons-autohide 	= navigation buttons visible on mouse hover only

					owl-carousel item paddings
						.owl-padding-0
						.owl-padding-1
						.owl-padding-2
						.owl-padding-3
						.owl-padding-6
						.owl-padding-10
						.owl-padding-15
						.owl-padding-20
				-->
				<div class="text-center portfolio-nogutter">
					<div class="owl-carousel owl-padding-1 nomargin buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items": "5", "autoPlay": 3500, "navigation": true, "pagination": false}'>
<?php
			$args = array(
				'posts_per_page' => 10,
				'post_type'=> 'project',
				'order'    => 'DESC',
				
			);
			$the_query = new WP_Query( $args );
			$jsonpost_all = array();
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post );

			$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
$thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
			if ( ! empty( $full_image_url[0] ) ) {
	$project_full_image = $full_image_url[0];
}
if ( ! empty( $thumbnail_image_url[0] ) ) {
	$project_medium_image = $thumbnail_image_url[0];
}


			?>
						
						<!-- item -->
						<div class="item-box">
							<figure>
								<span class="item-hover">
									<span class="overlay dark-5"></span>
									<span class="inner">

										<!-- lightbox -->
										<a class="ico-rounded lightbox" href="<?php echo $project_full_image; ?>" data-plugin-options='{"type":"image"}'>
											<span class="fa fa-plus size-20"></span>
										</a>

										<!-- details -->
										<a class="ico-rounded" href="<?php the_permalink(); ?>">
											<span class="glyphicon glyphicon-option-horizontal size-20"></span>
										</a>

									</span>
								</span>

								<img class="img-responsive" src="<?php echo $project_medium_image; ?>" width="600" height="399" alt="">
							</figure>
						</div>
						<!-- /item -->
					<?php endforeach; ?>


						

					</div>
				</div>


			</section>	
<?php endwhile; ?>
<?php

get_footer();
