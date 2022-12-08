<?php
function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_script( 'custom_script', get_template_directory_uri() . '/js/custom_script.js', array('jquery')
	);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function simpletheme_theme_support()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'simpletheme_theme_support');


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
 add_action( 'init', 'register_my_menus' );


// Change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single' ); 
function woocommerce_add_to_cart_button_text_single() {
    return __( 'Shop', 'woocommerce' ); 
}

// Change add to cart text on product archives page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_add_to_cart_button_text_archives' );  
function woocommerce_add_to_cart_button_text_archives() {
    return __( 'Shop', 'woocommerce' );
}

function woocommerce_product_category( $args = array() ) {
    $woocommerce_category_id = get_queried_object_id();
  $args = array(
      'parent' => $woocommerce_category_id
  );
  $terms = get_terms( 'product_cat', $args );
  if ( $terms ) {
      echo '<ul class="woocommerce-categories">';
      foreach ( $terms as $term ) {
          echo '<li class="woocommerce-product-category-page">';
            woocommerce_subcategory_thumbnail( $term );
          echo '<h2>';
          echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
          echo $term->name;
          echo '</a>';
          echo '</h2>';
          echo '</li>';
      }
      echo '</ul>';
  }
}
add_action( 'woocommerce_before_shop_loop', 'woocommerce_product_category', 100 );