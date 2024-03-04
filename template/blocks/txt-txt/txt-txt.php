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

<!--- textarea --->

<section <?php echo $anchor; ?> class="txttxt c-main -smt grid-2 -gap-5 grid-1-l <?php echo esc_attr( $class_name ); ?>">
	<div class="blur-2"><?php the_field('txt1'); ?></div>
	<div class="blur-3"><?php the_field('txt2'); ?></div>
</section>