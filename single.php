<?php get_header() ?>
  <div class="banner-page">
    <h3>New Arrival</h3>
    <p>Time to discovery the most popular trend in 2023</p>
  </div>
</section>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
      $product = wc_get_product( $product_id );
      $price = get_post_meta( get_the_ID($product_id), '_regular_price', true);
      $cart_item['product_id']; ?>
                              
<section class="section-products center">
  <div class="row-3" data-product-page-preselected-id="<?php echo $product_id; ?>">
   <?php if(have_posts()): ?>
    <?php while(have_posts()) : the_post();?>
    <div class="image-wrapper">
      <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
    </div>

    <div class="single-post_content center-top">
      <?php the_title('<h3 class="single-post_title">', '</h3>'); ?>

      <p class="single-post_price">--------   NZD$<?php echo $price;?>  --------</p>
      <div class="single-post_description">


      <form action method="post" enctype="multipart/form-data" class="cart">
        <div class="quantity">
          <label for="<?php echo $loop->post->ID; ?>" class="screen-reader-text"><?php the_title() ?></label>
          <input type="number" id="<?php echo $loop->post->ID; ?>" step="1" min="1" value="1" title="Qty" size="4"  placeholder inputmode="numeric" autocomplete="off" class="single-post_input button-single">
        </div>
        <button type="submit" name="add-to-cart" value="20" class="single_add_to_cart_button button-single_blue button-single">ADD TO SHOPPING CART</button>
      </form>

        <button class="button-single button-single_white">ADD TO MY WATCH LIST</button>
        <?php the_excerpt('<p class="single-post_excerpt">','</p>');?>
      </div>

      <!-- <div class="woocommerce-notices-wrapper">
        <div class="woocommerce-message" role="alert">
          <a href="http://ax-fashion.local/cart/" tabindex="1"class="button wc-forward wp-element-button">View Cart</a>
          ""<?php the_title() ?>" has been added to your cart"
        </div>
      </div> -->
  
      
    </div>
    <?php endwhile ?>
    <?php endif ?>
  </div>
</section>

<?php get_footer() ?>