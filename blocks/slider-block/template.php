<?php
/**
 * Block Name: Slider block template
 *
 * Description: Displays a list of posts.
 */

// The block attributes
$block = $args['block'];

// The block data
$data = $args['data'];

// Dynamic block ID
$block_id = 'posts-loop-block-' . $block['id'];

// The block ID
$block_id = $args['block_id'];

// The block class names
$class_name = $args['class_name'];
?>


<div id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?>">
    <?php
        echo "<pre>";
        print_r($args);
        echo "</pre>";
    ?>
</div>