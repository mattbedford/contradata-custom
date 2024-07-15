<?php


// Dynamic block ID
$block_id = 'posts-loop-block-' . $block['id'];

// Check if a custom ID is set in the block editor
if( !empty($block['anchor']) ) {
    $block_id = $block['anchor'];
}

// Block classes
$class_name = 'slider-block';
if( !empty($block['class_name']) ) {
    $class_name .= ' ' . $block['class_name'];
}

// WP Query Args
$query_args = array(
    'post_type' => 'slider',
);

// Expose the response of WP_Query to the render template
$data['posts'] = get_posts($query_args);

/** 
 * Pass the block data into the template part
 */ 

get_template_part(
	'blocks/slider-block/template',
	null,
	array(
		'block'      => $block,
		'is_preview' => $is_preview,
		'post_id'    => $post_id,

		'data'       => $data,
        'class_name' => $class_name,
        'block_id'   => $block_id,
	)
);