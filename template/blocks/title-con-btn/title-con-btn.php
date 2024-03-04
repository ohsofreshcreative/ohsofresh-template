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

<!--- title-con-btn --->

<section <?php echo $anchor; ?> class="titleConBtn c-main -pt-10 <?php echo esc_attr( $class_name ); ?>">
	<?php
	$titleConBtn = get_field('titleConBtn');
		
	if( have_rows('titleConBtn') ): while ( have_rows('titleConBtn') ) : the_row();  ?>
		<div class="titleConBtn__content">
			<h2 class="blur-1"><?php echo ( $titleConBtn['header'] ); ?></h2>
			<div class="blur-2"><?php echo ( $titleConBtn['txt'] ); ?></div>

			 <?php if ($titleConBtn['btn']) :
                $target = $titleConBtn['btn']['target']; // Pobierz wartość target z ACF
            ?>
				<div class="main-btn -mt-3 blur-3">
					<a href="<?php echo esc_url($titleConBtn['btn']['url']); ?>" target="<?php echo esc_attr($target); ?>"><?php echo esc_html($titleConBtn['btn']['title']); ?></a>
				</div>
			<?php endif; ?>
		</div>
	<?php endwhile; endif; ?>
</section>