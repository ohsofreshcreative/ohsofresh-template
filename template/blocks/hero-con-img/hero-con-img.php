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

<!--- hero-con-img --->

<section class="heroConImg <?php echo esc_attr( $class_name ); ?>">
    <?php
        $heroConImg = get_field('heroConImg');
		if( have_rows('heroConImg') ): while ( have_rows('heroConImg') ) : the_row();  ?>
            <div class="grid-2 grid-1-l items-c -gap-4-l">
				<div class="heroConImg__img order2 order1-l">
					<img class="blur-1" src="<?php echo aq_resize( $heroConImg['img']['url'], 1200, 800, true ); ?>" alt="<?php echo esc_attr( $heroConImg['img']['alt'] ); ?>" />
				</div>
                <div class="order1 order2-l w-80 m-auto">
                    <h2 class="blur-2"><?php echo ( $heroConImg['header'] ); ?></h2>
					<div class="blur-3"><?php echo ( $heroConImg['txt'] ); ?></div>

                    <div class="inline-buttons -mt-3">
                    <?php if( $heroConImg['btn1'] ): ?> 
                        <div class="main-btn left-btn blur-4">
                            <a href="<?php echo esc_url( $heroConImg['btn1']['url'] ); ?>"><?php echo esc_html( $heroConImg['btn1']['title'] ); ?></a>
                        </div>
                    <?php endif; ?>	
                    <?php if( $heroConImg['btn2'] ): ?> 
                        <div class="second-btn blur-5">
                            <a href="<?php echo esc_url( $heroConImg['btn2']['url'] ); ?>"><?php echo esc_html( $heroConImg['btn2']['title'] ); ?></a>
                        </div>
                    <?php endif; ?>	
                    </div>

                </div> 
            </div>
    <?php endwhile; endif; ?>
</section>
 
