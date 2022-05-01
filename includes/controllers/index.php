  <?php

  if (!isset($_SESSION['cart']) && empty($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
  }


  $products = new Products();


  // .. latest product record
  $latestProducts =   $products->limited_records('products');

  //  .. all products
  $product_records =  $products->get_products();


  $product_id = $products->is_set('product_id', 'GET');
  //  .. cart
  if (!is_null($product_id)) {
    $_SESSION['cart'][] = $_GET['product_id'];
  }

  // .. get cart count
  $cartItemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

  $cartItems = [];

  //  .. cart items
  if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    $cartItems = $products->get_cartItems($_SESSION['cart']);
  }


  //  ..cart total price
  $cartPrice = 0;
