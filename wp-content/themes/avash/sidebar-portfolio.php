<!-- LEFT -->
						<div class="col-md-3 col-sm-3">

							

							

							<!-- side navigation -->
							<div class="side-nav margin-bottom-60">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>Project Categories</h4>
								</div>
								<ul class="list-group list-group-bordered list-group-noicon uppercase">
									<?php $terms = get_terms( 'project-category', array(
									'orderby'    => 'count',
									'hide_empty' => 0,
									'order' => 'DESC'
									) );

									if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
									foreach ( $terms as $term ) {
									?>
									<li class="list-group-item"><a href="<?php echo get_term_link( $term ); ?>"><span class="size-11 text-muted pull-right">(<?php echo $term->count; ?>)</span> <?php echo $term->name; ?></a></li>
									<?php } } ?>
									
									
								

								</ul>
								<!-- /side navigation -->

							
							</div>


							


							<!-- TAGS -->
							<h3 class="hidden-xs size-16 margin-bottom-20">Project Technologies</h3>
							<div class="hidden-xs margin-bottom-60">
							<?php $terms = get_terms( 'project-technology', array(
							'orderby'    => 'count',
							'hide_empty' => 0,
							'order' => 'DESC'
							) );
							
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
								foreach ( $terms as $term ) {
							?>
								<a class="tag" href="<?php echo get_term_link( $term ); ?>">
									<span class="txt"><?php echo $term->name; ?></span>
									<span class="num"><?php echo $term->count; ?></span>
								</a>

							<?php } } ?>
								
							</div>


							




							<hr />


							<!-- SOCIAL ICONS -->
							<div class="hidden-xs margin-top-30 margin-bottom-60">
								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
							</div>

						</div>