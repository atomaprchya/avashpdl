<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package avash
 */

get_header(); ?>

	


	<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<?php get_sidebar('portfolio'); ?>

						<!-- RIGHT -->
						<div class="col-md-9 col-sm-9">

							<div class="row">

								<?php
		if ( have_posts() ) : ?>

			

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
if ( ! empty( $full_image_url[0] ) ) {
	$project_full_image = $full_image_url[0];
}


			 ?>


								<!-- POST ITEM -->
								<div class="blog-post-item portfolio-taxonomy-item col-md-6 col-sm-6">

									<!-- IMAGE -->
									<figure class="margin-bottom-20">
										<img class="img-responsive" src="<?php echo $project_full_image; ?>" alt="">
									</figure>

									<h2><a href="blog-single-default.html"><?php echo get_the_title(); ?></a></h2>

									

									<?php the_excerpt(); ?>

									<a href="<?php echo get_the_permalink(); ?>" class="btn btn-reveal btn-default">
										<i class="fa fa-plus"></i>
										<span>Read More</span>
									</a>

								</div>

								<?php endwhile;

			 ?>
								



							</div>


		<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

							?>

						</div>

					</div>

				</div>
			</section>
			<!-- / -->

<?php
get_footer();
