<?php

namespace Contradata;


class WooCatalogueOnly {
  
  public function __construct() {
  
    add_action('init', [self::class, 'RemoveAddToCart']);
    add_filter('woocommerce_get_price_html', [self::class, 'RemovePricing'], 10, 1);
    add_action('woocommerce_after_shop_loop_item', 'ContactUsButtonForPricing', 10 );
    add_action('woocommerce_single_product_summary', 'ContactUsButtonForPricing', 31 );
      
  }
  
  
  public static function RemoveAddToCart (): void
  {
  	
      remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
      remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
  }


  public static function RemovePricing( $price )
  {

      return '';
  }
  

  public static function ContactUsButtonForPricing()
  {
      echo '<a href="/contact-us" class="button">Contact Us for Pricing</a>';
  }

  
}