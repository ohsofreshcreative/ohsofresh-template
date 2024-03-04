<?php
/**
 * Template Post Type: post
 */

get_header();  
?>

<div id="content" class="site-content con-main container py-5 mt-4 -pb-0">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <!-- Breadcrumb -->
	<div class="bread blurIn">
		<?php the_breadcrumb(); ?>
	</div>

	<div class="row">
		<div class="">

			<main id="main" class="site-main">

			<header class="entry-header -mt-12">
				<div class="text-center w-50 m-auto w-90-xl w-100-l">
					<div class="blurIn"><?php the_post(); ?></div>
					<div class="blurIn"><?php bootscore_category_badge(); ?></div>
					<h1 class="blurIn -mt-2"><?php the_title(); ?></h1>
				</div>
				<div class="blurIn -mt-6"><?php bootscore_post_thumbnail(); ?></div>
			</header>

			<div class="entry-content w-60 m-auto blurIn w-100-l">
				<?php the_content(); ?>
			</div>

			<footer class="entry-footer clear-both">
				<div class="mb-4">
				<?php bootscore_tags(); ?>
				</div>
			</footer>

			<section class="related__news -pt-8 -mt-10 -mb-13">
			<div class="container">
				<h3 class="blurIn -pb-3">Zobacz więcej</h3>
			</div>

			<div class="related__block grid-3 -gap-2 grid-1-l">
				<?php
			if ( get_query_var('paged') ) {
				$paged = get_query_var('paged');
			} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
				$paged = get_query_var('page');
			} else {
				$paged = 1;
			}
			
			$custom_query_args = array(
				'post_type' => 'post', 
				'posts_per_page' => '3',
				'paged' => $paged,
				'post_status' => 'publish',
				'ignore_sticky_posts' => true,
				
				'order' => 'DESC', // 'ASC'
				'orderby' => 'date' // modified | title | name | ID | rand
			);
			$custom_query = new WP_Query( $custom_query_args );
			
			if ( $custom_query->have_posts() ) :
				$i = 0;
				while( $custom_query->have_posts() ) : $custom_query->the_post(); 
				
					$categories = get_the_category();

					if ( ! empty( $categories ) ) {
						$category_name = $categories[0]->name;
					}
				?>
			<?php $i++; // increment i by one ?>
				<div class="blog__card blurIn">
					<a class="" href="<?php the_permalink() ?>">
					<article class=" news__article position-relative">
						<div class="news__image">
							<?php the_post_thumbnail( ); ?>
						</div>
						<div class="card__body news__content">
							<?php bootscore_category_badge(); ?>
							<h5 class="post-title font-bold -fs-20"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						</div>
					</article>
					</a>
				</div>
				<?php
				endwhile;
				?>
			
				<?php
					wp_reset_postdata(); // reset the query 
				else:
					echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
				endif;
				?>

			</div>
			</section>

        </main>

      </div>
    </div>

  </div>
</div>

<?php
get_footer();