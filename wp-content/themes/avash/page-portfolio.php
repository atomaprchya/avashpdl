<?php /* Template Name: Portfolio */ ?>
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


			

			<section class="page-header page-header-xs portfolio_holder">
				<div class="container">

					

					<!-- page tabs -->
					<ul class="page-header-tabs list-inline mix-filter ">
						<li data-filter="all" class="filter active"><a href="#">All</a></li>
						<?php $terms = get_terms( 'project-category', array(
							'orderby'    => 'count',
							'hide_empty' => 0,
							'order' => 'DESC'
							) );
							
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
								foreach ( $terms as $term ) {
							?>
	    			
							<li data-filter="<?php echo $term->slug; ?>" class="filter"><a href="#"><?php echo $term->name; ?></a></li>
						<?php } } ?>
						
					</ul><!-- /page tabs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->
			

			<!-- -->
			<section>
				<div class="container">

					<div id="portfolio" class="portfolio-gutter portfolio-title-over">

						

						<div class="row mix-grid">

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


$falls_under = get_the_terms($post, 'project-category');

$falls_under_links = array();
if ( $falls_under && ! is_wp_error( $falls_under ) ) :
	foreach ( $falls_under as $term ) {
									$falls_under_links[] = $term->slug;
									}
$falls_under_links_txt = join( " ", $falls_under_links );

/*echo '<pre>';
print_r($falls_under_links_txt);
echo '</pre>';*/
endif;


			?>
							<div class="col-md-4 col-sm-4 mix <?php echo $falls_under_links_txt; ?>"><!-- item -->

								<div class="item-box">
									<figure>
										<div class="item-hover">
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

											<!-- overlay title -->
											<div class="item-box-overlay-title">
												<h3><?php echo get_the_title(); ?></h3>
												<ul class="list-inline categories nomargin">
												<?php foreach ( $falls_under as $term ) { ?>
													<li><a href="<?php the_permalink(); ?>"><?php echo $term->name; ?></a></li>
													<?php } ?>
													
												</ul>
											</div><!-- /overlay title -->

										</div>

										<img class="img-responsive" src="<?php echo $project_medium_image; ?>" width="600" height="399" alt="">

									</figure>
									
								</div>

							</div><!-- /item -->

							<?php endforeach; 
			wp_reset_postdata(); ?>
							


						


							

						</div>

					</div>
					
				</div>
			</section>
			<!-- / -->




			

				

<?php
get_footer();
