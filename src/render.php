<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$block_attributes = isset($attributes) ? $attributes : array();

$textAlign = isset($block_attributes['textAlign']) ? $block_attributes['textAlign'] : 'left';

//$style = 'text-align:' . esc_attr($textAlign) . ';';

$date_with_copyright = "© " . date('Y');

?>

<p <?php echo get_block_wrapper_attributes(['class' => "has-text-align-" . esc_attr($textAlign)]); ?>>
	<?php echo esc_html($date_with_copyright); ?>
</p>