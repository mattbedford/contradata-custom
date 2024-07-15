<?php
/**
 * Block Name: Slider block template
 *
 * Description: Displays a list of posts.
 */

$slider_selector = get_post($block['data']['slider-selector']);

if ( ! $slider_selector ) {
    return;
}

$slider_selector_id = $slider_selector->ID;
$pagination = get_field('enable_pagination', $slider_selector_id);
$navigation = get_field('enable_nav', $slider_selector_id);
$scrollbar = get_field('enable_scrollbar', $slider_selector_id);
$slides = get_field('slide', $slider_selector_id);

if( !$slides ) return;

function print_slide($slide) {

    $headline = $slide['headline'];
    $text = $slide['text'];
    $background = $slide['slide_background_image'];
    $image = $slide['slide_image_content'];
    $link = $slide['link'];

    echo "<div class='swiper-slide' style='background-image: url($background)'>";
    echo "<div class='slide-content'>";
    echo "<h2>$headline</h2>";
    echo "<p>$text</p>";
    //echo "<a href='$link' class='btn'>Read more</a>";
    echo "</div>";
	echo "</div>";
}

echo "<div class='swiper swiper-" . $slider_selector_id . "'>";
echo "<div class='swiper-wrapper'>";

foreach( $slides as $slide ) {
    print_slide($slide);
}

if($pagination) {
    echo "<div class='swiper-pagination'></div>";
} 
if($navigation) {
    echo "<div class='swiper-button-prev'></div>";
    echo "<div class='swiper-button-next'></div>";
}
if($scrollbar) {
    echo "<div class='swiper-scrollbar'></div>";
}
echo "</div>";
echo "</div>";


?>

<script defer>


new Swiper('<?php echo "swiper" . $slider_selector_id; ?>', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  <?php if($pagination) { ?>
    pagination: {
        el: '.swiper-pagination',
    },
  <?php } ?>

    <?php if($navigation) { ?>
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    <?php } ?>

    <?php if($scrollbar) { ?>
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    <?php } ?>
});

</script>