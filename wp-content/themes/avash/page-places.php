<?php /* Template Name: Places */ ?>
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


			
			
			<!-- /PAGE HEADER -->
			<div id="page-menu" class="page-menu-dark noborder">
				<div class="container">

					<nav class="pull-right"><!-- page menu -->
						<button id="page-menu-mobile" class="fa fa-bars"></button>
						<!-- 
							.menu-scrollTo - for scrollto page menu / no external links 
						-->
						<ul class="list-inline viewoptions">
							<li class="active"><a id="nepal">See Nepal View</a></li>
							<li><a id="global">See Global View</a></li>
							<li><a id="australia">See Australia View</a></li>
							
						</ul>
					</nav><!-- /page menu -->

				</div>
			</div>


			<section id="map">
				
				<?php wp_reset_postdata();
			wp_reset_query(); ?>
			<?php
			$args = array(
				'posts_per_page' => -1,
				'post_type'=> 'place',
				'order'    => 'DESC',
				
			);
			$the_query = new WP_Query( $args );
			$jsonpost_all = array();
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post );
				$jsonpost["id"] = get_the_ID();
				$jsonpost["title"] = get_the_title();
				$jsonpost["url"] = apply_filters('the_permalink', get_permalink());
				$jsonpost["content"] = apply_filters('the_content', get_the_content());
				$location = get_field('google_map_points');
				$jsonpost["lat"] = $location['lat'];
				$jsonpost["lng"] = $location['lng'];
			
				?>
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
					<h4><?php echo get_the_title(); ?></h4>
					
					<p><?php echo apply_filters('the_content', get_the_content()); ?></p>
				</div>
				<?php
				
				//array_push($jsonpost_all, $jsonpost);

			
			endforeach; 
			wp_reset_postdata();
			

			//echo json_encode($jsonpost_all);

			?>
					
					
				
			</section>
			
		
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
			
			<style type="text/css">
				#map{
				height: 700px;
				}
			</style>

	

<?php
get_footer();
