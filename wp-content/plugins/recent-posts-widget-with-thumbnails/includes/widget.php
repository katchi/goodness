<?php echo $args[ 'before_widget' ]; ?>
<div id="rpwwt-<?php echo $args[ 'widget_id' ];?>" class="row">
	<?php if ( $title ) echo $args[ 'before_title' ] . $title . $args[ 'after_title' ]; ?>
</div>
	<div class="entry-content">
		<?php while ( $r->have_posts() ) : $r->the_post(); 
				$classes = array();
				if ( is_sticky() ) { 
					$classes[] = 'rpwwt-sticky';
				}
				if ( $print_post_categories ) {
					$cats = get_the_category();
					if ( is_array( $cats ) and $cats ) {
						foreach ( $cats as $cat ) {
							$classes[] = $cat->slug;
						}
					}
				}
				if ( $classes ) {
					echo ' class="', join( ' ', $classes ), '"';
				}
				?>
				<div class="col-sm-4 col-md-3">
					<div class="thumbnail">
					<?php 
					if ( $show_thumb ) : 
						$is_thumb = false;
						// if only first image
						if ( $only_1st_img ) :
							// try to find and to display the first post image and to return success
							$is_thumb = $this->the_first_post_image();
						else :
							// look for featured image
							if ( has_post_thumbnail() ) : 
								// if there is featured image then show it
								the_post_thumbnail( $this->current_thumb_dimensions );
								$is_thumb = true;
							else :
								// if user wishes first image trial
								if ( $try_1st_img ) :
									// try to find and to display the first post image and to return success
									$is_thumb = $this->the_first_post_image();
								endif; // try_1st_img 
							endif; // has_post_thumbnail
						endif; // only_1st_img
						// if there is no image 
						if ( ! $is_thumb ) :
							// if user allows default image then
							if ( $use_default ) :
								print $default_img;
							endif; // use_default
						endif; // not is_thumb
						// (else do nothing)
					endif; // show_thumb
					// show title if wished
					?> 
						<div class="caption"> <?php
							if ( ! $hide_title ) {
								?><h3><?php if ( $post_title = $this->get_the_trimmed_post_title( $post_title_length ) ) { echo $post_title; } else { the_ID(); } ?></h3><?php
							}
							?></a><?php 
							if ( $show_author ) : 
								?><div class="rpwwt-post-author"><?php echo $this->get_the_author(); ?></div><?php 
							endif;
							if ( $show_categories ) : 
								?><div class="rpwwt-post-categories"><?php echo $this->get_the_categories( $r->post->ID ); ?></div><?php 
							endif;
							if ( $show_date ) : 
								?><div class="rpwwt-post-date"><?php echo get_the_date(); ?></div><?php 
							endif;
							if ( $show_excerpt ) : 
								?><p><?php echo $this->get_the_trimmed_excerpt( $excerpt_length, $excerpt_more, $ignore_excerpt ); ?></p><?php 
							endif;
							if ( $show_comments_number ) : 
								?><div class="rpwwt-post-comments-number"><?php echo get_comments_number_text(); ?></div><?php 
							endif; 
						?>
							<p><a href="<?php the_permalink(); ?>"<?php echo $link_target; ?>" class="btn btn-primary" role="button">READ MORE</a> </p>
						</div>
					</div>
					</div>

					<?php endwhile; ?>	
		</div>					
	
<!-- .rpwwt-widget -->
<?php echo $args[ 'after_widget' ]; ?>
