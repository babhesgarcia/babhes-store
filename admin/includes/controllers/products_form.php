<?php




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $products->check_inputs($_POST);

    if ($products->no_errors()) {

        $post_id = $products->is_set('id');

        if (!is_null($post_id)) {
            $products->update_product_info(
                [
                    ':product_id' => $post_id,
                    ':product_name' => $products->get_input('product_name'),
                    ':product_description' => $products->get_input('product_description'),
                    ':product_price' => $products->get_input('product_price')
                ]
            );
            // reload paage
            redirect("?source=products&status=updated");
        } else {
            $name = $products->get_input('product_name');
            $description = $products->get_input('product_description');
            $price = $products->get_input('product_price');

            $products->add_product([':name' => $name, ':description' => $description, ':price' => $price]);

            // reload paage
            redirect("?source=products&status=added");
        }
    }
}
