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

<section <?php echo $anchor; ?> class="textArea c-main -pt-10 <?php echo esc_attr( $class_name ); ?>">
	<div class="blur -mt-2"><?php the_field('textArea'); ?></div>
</section>