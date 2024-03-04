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

<?php
	$heroVideo = get_field('heroVideo');
	if( $heroVideo ): ?>

<!--- hero-video-bg --->

<section <?php echo $anchor; ?> class="hero con-padding h-100vh <?php echo esc_attr( $class_name ); ?>">
	
	<div id="video-content" class="__wrapper c-main grid-2 items-c h-100vh grid-2-1-max grid-1-l">
		<div class="__content position-relative zindex9" style="top:-70px;">
			<h1 class="blur-2"><?php echo ( $heroVideo['header'] ); ?></h1>
			<div class="blur-3"><?php echo ( $heroVideo['txt'] ); ?></div>
			
			<div class="inline-buttons -mt-3">
			<?php if( $heroVideo['btn1'] ): ?> 
				<div class="main-btn left-btn blur-4">
					<a href="<?php echo esc_url( $heroVideo['btn1']['url'] ); ?>"><?php echo esc_html( $heroVideo['btn1']['title'] ); ?></a>
				</div>
			<?php endif; ?>	
			<?php if( $heroVideo['btn2'] ): ?> 
				<div class="main-btn blur-5">
					<a href="<?php echo esc_url( $heroVideo['btn2']['url'] ); ?>"><?php echo esc_html( $heroVideo['btn2']['title'] ); ?></a>
				</div>
			<?php endif; ?>	
			</div>

		</div>
		<div class="d-none-l"></div>
	</div>
	<div class="video-wrapper blur-1">
        <video class="start-video" playsinline autoplay muted loop id="myVideo">
            <source src="<?php echo ( $heroVideo['video'] ); ?>" type="video/mp4">
        </video>
	</div>
</section>

<?php endif; ?>
