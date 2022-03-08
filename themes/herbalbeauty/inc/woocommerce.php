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
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 15 );

  /**
   * Move the excerpt
   */
  remove_action ( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
  add_action( 'woocommerce_single_product_summery', 'woocommerce_template_single_excerpt', 4 );

  /**
   * Add sample text above add to card
   */
  function harbelbeauty_add_sample_text() {
      echo '<p style="color:#ff5252;"><b>You Will Love Our Products</b></p>';
  }
//   add_action( 'woocommerce_before_add_to_cart_form', 'herbalbeauty_add_sample_text', 10 );

  /**
   * Remove tab data
   */
  remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tab', 10 );
  function harbelbeauty_add_content() {
      echo '<div class="content">' . get_the_content() . '</div>';
  }
//   add_action( 'woocommerce_after_single_product_summary', 'herbalbeauty_add_content', 10 );