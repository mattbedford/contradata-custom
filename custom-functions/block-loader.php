<?php


namespace Contradata;


class BlockLoader {

  public function __construct() {
  
    add_action('init', [self::class, 'register_slider_block']);
      
  }


    public static function register_slider_block() {
        register_block_type( plugin_dir_path(__FILE__) . '/blocks/slider-block' );
    }
}