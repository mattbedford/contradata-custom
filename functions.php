<?php

namespace Contradata;

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

include_once plugin_dir_path(__FILE__) . '/custom-functions/block-loader.php';
include_once plugin_dir_path(__FILE__) . '/custom-functions/load-swiper.php';
include_once plugin_dir_path(__FILE__) . '/custom-functions/woo-catalogue-only.php';

new BlockLoader();
new Swiper();
new WooCatalogueOnly();

    