<?php
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

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

<!--- button --->

<div class="c-main <?php echo esc_attr( $class_name ); ?>">
	<?php 
	$button = get_field('button');
	if( $button ): 
		$button_url = $button['url'];
		$button_title = $button['title'];
		$button_target = $button['target'] ? $button['target'] : '_self';
		?>
	<div class="main-btn blur -mt-3"><a target="<?php echo esc_url( $button['target'] ); ?>" href="<?php echo esc_url( $button['url'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a></div>
	<?php endif; ?>
</div>