<?php
/**
 * Functions which enhance the theme by hooking into woocomerce
 *
 * @package Herbal_Beauty
 */

 /**
  * Allow block editor for single products
  */
 function cwd_use_block_editor_for_post_type( $use_block_editor, $post_type ) {
     if ( 'product' === $post_type ) {
         $use_block_editor = true;
     }
     return $use_block_editor;
 }
 add_filter( 'use_block_editor_for_post_type', 'cwd_use_block_editor_for_post_type', 10, 2 );

 /**
  * Remove default woocommerce style
  */
 //add_filter( 'woocommerce_enqueue_styles', '__return_false' );

 /**
  * Re-add product title
  */
  remove_action ( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
  add_action( 'woocommerce_single_product_summery', 'woocommerce_template_single_excerpt', 4 );