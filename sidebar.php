<?php
/**
 *
 * Theme padrão desenvolvimento duo-studio WebPack
 *
 * @link https://duo-studio.com.br/
 *
 * @package duo-studio_theme
 *
 */
?>

<div class="sidebar">
	<h3>Featured Content</h3>

	<div class="content-post-featured">
		<?php 
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 3,
				'orderby' => 'date', // Ordenar por data
				'order' => 'DESC', // Ordem decrescente para obter os últimos posts
				'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
			);

			$last_post_query = new WP_Query($args);

			if ($last_post_query->have_posts()) {
				while ($last_post_query->have_posts()) {
						$last_post_query->the_post();
						$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
						// Exibir a categoria do post
						$categories = get_the_category();

						?>

					<div class="row">
						<a href="<?php echo get_permalink(); ?>">
							<div class="col-12">
								<div class="data-categoria">
									<div>
										<i class="far fa-calendar-alt"></i>
										<?php echo get_the_date(); ?>
									</div>
									<div>
										<i class="fas fa-tag"></i>
										<?php echo esc_html($categories[0]->name); ?>
									</div>
								</div>

								<h2><?php the_title(); ?></h2>

								<p><?php echo get_excerpt(81, get_the_content()); ?></p>
							</div>
						</a>
					</div>
				<?php }
				wp_reset_postdata();
			}
		?>
	</div>
</div>