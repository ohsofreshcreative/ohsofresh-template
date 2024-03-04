<?php

// Anchor
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Class
$class_name = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
$align = '';
if ( ! empty( $block['align'] ) ) {
    $align .= ' align' . $block['align'];
}

?>

<!--- carousel-wrap --->

<section class="">
	<div <?php echo $anchor; ?> class="carouselWrap c-main -smt <?php echo esc_attr( $class_name ); ?>">
	<?php
	$carouselWrap = get_field('carouselWrap');
		
	if( have_rows('carouselWrap') ): while ( have_rows('carouselWrap') ) : the_row();  ?>
		<div class="__wrapper">
			<div class="__content w-50 w-100-m">
				<h2 class="blur-1"><?php echo ( $carouselWrap['header'] ); ?></h2>
				<div class="blur-2"><?php echo ( $carouselWrap['txt'] ); ?></div>
			</div> 

			<div class="carousel blur-3" data-flickity='{ "pageDots": false, "cellAlign": "left", "draggable": false }'>
			
				<?php if( have_rows('cells') ): while ( have_rows('cells') ) : the_row(); ?>

				<?php
				$image_url = get_sub_field('img');
				$resized_image_url = aq_resize($image_url, 270, 150, true);
				?>

				<div class="carousel__cell">
					<img src="<?php echo $resized_image_url; ?>" />
					<p class=""><?php echo get_sub_field('header'); ?></p>
					<div class=""><?php echo get_sub_field('txt'); ?></div>
				</div>
				
				<?php endwhile; endif; ?>
			</div>
			<div class="inline-buttons -mt-4">
				<?php if( $carouselWrap['btn1'] ): ?> 
				<div class="main-btn left-btn blur-4">
					<a href="<?php echo esc_url( $carouselWrap['btn1']['url'] ); ?>"><?php echo esc_html( $carouselWrap['btn1']['title'] ); ?></a>
				</div>
				<?php endif; ?>

				<?php if( $carouselWrap['btn2'] ): ?> 
				<div class="second-btn blur-5">
					<a href="<?php echo esc_url( $carouselWrap['btn2']['url'] ); ?>"><?php echo esc_html( $carouselWrap['btn2']['title'] ); ?></a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>
</section>

