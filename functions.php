<?php

namespace Contradata;

if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
}


include_once plugin_dir_path(__FILE__) . '/custom-functions/load-swiper.php';
new Swiper();