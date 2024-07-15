<?php

namespace Contradata;

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}


include_once plugin_dir_path(__FILE__) . '/custom-functions/woo-catalogue-only.php';

new WooCatalogueOnly();

    