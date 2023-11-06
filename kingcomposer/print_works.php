<section class="works">
	<div class="row">
		<?php 
		$post_type = $atts['pw_taxonomy'];
		if( $atts['pw_numberposts'] != 0 ) {
			$posts = get_posts(
				[
					'post_type'   => $atts['pw_taxonomy'],
					'numberposts' => $atts['pw_numberposts'],
					'suppress_filters' => false
				]);
				foreach ($posts as $index => $post): ?>
					<?php 
					//default langauge id of the post / category / term WPML
					$default = apply_filters( 'wpml_object_id', $post->ID, 'works', true, 'en' );
					$work_switcher = get_field('work_switcher', $default);
					$feature_img = get_the_post_thumbnail_url( $default, 'post-thumbnail' );
					$before = get_field('img_before',$default)['sizes']['medium_large'];
					$after = get_field('img_after',$default)['sizes']['medium_large'];
					$square = get_field('square_space',$post->ID);
					$localization = get_field('localization',$post->ID);
					if($work_switcher[0] == 'yes') {
						?>
						<div class="col">
							<div class="wrapper">
								<div class="before-after">
									<!-- The before image is first -->
									<img src="<?php echo $before ?>" />
									<!-- The after image is last -->
									<img src="<?php echo $after ?>" />
								</div>
								<div class="text-content">
									<a href="<?php the_permalink($post->ID) ?>">
										<div class="header">
											<h2 class="title"><?php echo $post->post_title ?></h2>
											<div class="info">
												<?php echo $square ?>m<sup>2</sup>
											</div><!-- /info -->
										</div><!-- /header -->
										<p class="description"><?php echo $localization ?></p>
									</a>
								</div><!-- /text-content -->
							</div><!-- /wrapper -->
						</div><!-- /col -->
					<?php } else { ?>
						<div class="col whole-link">
							<div class="wrapper">
								<div class="img-wrapper">
									<img src="<?php echo $feature_img ?>" alt="">
								</div>
								<div class="text-content">
									<a href="<?php the_permalink($post->ID) ?>">
										<div class="header">
											<h2 class="title"><?php echo $post->post_title ?></h2>
											<div class="info">
												<?php echo $square ?>m<sup>2</sup>
											</div><!-- /info -->
										</div><!-- /header -->
										<p class="description"><?php echo $localization ?></p>
									</a>
								</div><!-- /text-content -->
							</div>
						</div>
					<?php }
				endforeach  ;
			} else {
				$btpgid=get_queried_object_id();
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				$args = [
					'posts_per_page' => 6, 
					'paged' => $paged,
					'post_type' => $post_type,
					'suppress_filters' => false
				];
				$postslist = new WP_Query( $args );
				if ( $postslist->have_posts() ) :
					while ( $postslist->have_posts() ) : $postslist->the_post(); 

						global $post;

						$default = apply_filters( 'wpml_object_id', $post->ID, 'works', true, 'en' );
						$work_switcher = get_field('work_switcher', $default);
						$feature_img = get_the_post_thumbnail_url( $default, 'post-thumbnail' );
						$before = get_field('img_before',$default)['sizes']['medium_large'];
						$after = get_field('img_after',$default)['sizes']['medium_large'];
						$square = get_field('square_space',$post->ID);
						$localization = get_field('localization',$post->ID);
						if($work_switcher[0] == 'yes') {
							?>
							<div class="col">
								<div class="wrapper">
									<div class="before-after">
										<!-- The before image is first -->
										<img src="<?php echo $before ?>" />
										<!-- The after image is last -->
										<img src="<?php echo $after ?>" />
									</div>
									<div class="text-content">
										<a href="<?php the_permalink() ?>">
											<div class="header">
												<h2 class="title"><?php the_title() ?></h2>
												<div class="info">
													<?php echo $square ?>m<sup>2</sup>
												</div><!-- /info -->
											</div><!-- /header -->
											<p class="description"><?php echo $localization ?></p>
										</a>
									</div><!-- /text-content -->
								</div><!-- /wrapper -->
							</div><!-- /col -->
						<?php } else { ?>
							<div class="col whole-link">
								<div class="wrapper">
									<div class="img-wrapper">
										<img src="<?php echo $feature_img ?>" alt="">
									</div>
									<div class="text-content">
										<a href="<?php the_permalink() ?>">
											<div class="header">
												<h2 class="title"><?php echo the_title() ?></h2>
												<div class="info">
													<?php echo $square ?>m<sup>2</sup>
												</div><!-- /info -->
											</div><!-- /header -->
											<p class="description"><?php echo $localization ?></p>
										</a>
									</div><!-- /text-content -->
								</div>
							</div>
						<?php }
					endwhile;  
					spero_print_pagination($postslist, $post_type );
				endif; 
			}
			?>
		</div><!-- /row -->
		<?php 
		wp_reset_postdata();
		?>
	</section>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			<?php if(ICL_LANGUAGE_CODE == 'pl') { ?>
				setTimeout(function(){
					$('.twentytwenty-before-label').attr('data-content', 'Przed');
					$('.twentytwenty-after-label').attr('data-content', 'Po');
				}, 1000);
			<?php } ?>
		})
	</script>