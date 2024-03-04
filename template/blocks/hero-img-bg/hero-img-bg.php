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

<!--- hero-img-bg --->

<?php
	$heroBg = get_field('heroBg');
	if( $heroBg ): ?>
 
<section <?php echo $anchor; ?> class="heroImg blur-1 <?php echo esc_attr( $class_name ); ?>" style="background-image:url(<?php echo aq_resize( $heroBg['bg']['url'], 1900, true ); ?>);">
	<div class="__wrapper c-main">
		<div class="__content grid-2 grid-1-l">
			<div class="">
				<h1 class="blur-2"><?php echo ( $heroBg['header'] ); ?></h1>
				<div class="blur-3"><?php echo ( $heroBg['txt'] ); ?></div>
				<div class="inline-buttons -mt-3">
					<?php if( $heroBg['btn1'] ): ?> 
						<div class="main-btn left-btn blur-4">
							<a href="<?php echo esc_url( $heroBg['btn1']['url'] ); ?>"><?php echo esc_html( $heroBg['btn1']['title'] ); ?></a>
						</div>
					<?php endif; ?>
					<?php if( $heroBg['btn2'] ): ?> 
						<div class="main-btn blur-5">
							<a href="<?php echo esc_url( $heroBg['btn2']['url'] ); ?>"><?php echo esc_html( $heroBg['btn2']['title'] ); ?></a>
						</div>
					<?php endif; ?>	
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>