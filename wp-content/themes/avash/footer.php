<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avash
 */

?>

<!-- FOOTER -->
			<footer id="footer">
				

				<div class="copyright">
					<div class="container">
					<div class="col-md-6">
					<?php
					if(is_active_sidebar('footer-1')){
						dynamic_sidebar('footer-1');
					}
					?>	
						
					</div>
					<div class="col-md-6">
					<?php
					if(is_active_sidebar('footer-2')){
						dynamic_sidebar('footer-2');
					}
					?>
					</div>
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->
</div><!-- #page -->
<a href="#" id="toTop"></a>
<script type="text/javascript">
var plugin_path = '<?php echo get_template_directory_uri(); ?>/assets/plugins/';
var images_path = '<?php echo get_template_directory_uri(); ?>/assets/images/';

</script>
<?php wp_footer(); ?>

</body>
</html>
