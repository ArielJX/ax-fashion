<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <?php wp_head(); ?>
  <title>AX FASHION</title>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header>
  <div class="navbar max-width-1024">
    <div class="left-nav">
      <a href="https://ariel.xiong.yoobeestudent.net/summative-4/" aria-current="page">HOME</a>
      <a href="https://ariel.xiong.yoobeestudent.net/summative-4/product-category/dress/" aria-current="page">DRESS</a>
      <a href="https://ariel.xiong.yoobeestudent.net/summative-4/product-category/top/" aria-current="page">TOP</a>
      <a href="https://ariel.xiong.yoobeestudent.net/summative-4/product-category/skirt/" aria-current="page">SKIRT</a>
    </div>
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" class="logo">
    <div class="right-nav">
      <a href="https://ariel.xiong.yoobeestudent.net/summative-4/my-account/" aria-current="page">ACCOUNT</a>
      <a href="https://ariel.xiong.yoobeestudent.net/summative-4/cart/" aria-current="page">CART</a>
    </div>
  </div>
</header>  
