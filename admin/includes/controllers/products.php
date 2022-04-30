<?php

$products = new Products();

// form
include __DIR__ . '/products_form.php';
// table
include __DIR__ . '/products_table.php';





//  .. delete record
if (!is_null($products->is_set('product_did', 'GET'))) {
    if ($products->delete([':product_id' => $_GET['product_did']], 'products')) {
        // reload
        redirect("?source=products&status=deleted");
    }
}

//  .. edit record
$productId = $products->is_set('product_eid', 'GET');

if (!is_null($productId)) {

    $product = $products->get_single_product([':product_id' => $productId]);

    $product_id = $product['product_id'];
    $product_name = $product['product_name'];
    $product_description = $product['product_description'];
    $product_price = $product['product_price'];


    $products->set_input('product_name', $product_name);
    $products->set_input('product_description', $product_description);
    $products->set_input('product_price', $product_price);
}

// .. status
$status = $products->is_set('status', 'GET');
