<?php

class Products  extends Database
{
    use Input_handlers;

    public $inputs = [];
    public $errors = [];

    public function product_records($tableName)
    {
        $rows =  $this->get_rows($tableName);

        if ($rows->rowCount() > 0) {
            return $rows->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function add_product($params)
    {
        $query = "INSERT INTO products (product_name, product_description, product_price) VALUES (
            :name, :description, :price
        )";
        return $this->insert_row($query, $params);
    }

    public function update_product_info($params)
    {
        $sql = "UPDATE products SET product_name = :product_name, product_description = :product_description, product_price = :product_price WHERE product_id = :product_id";
        return $this->update($sql, $params);
    }

    public function latest_records()
    {
        $latestRecords = $this->limited_records('products');
        if ($latestRecords->rowCount() > 0) {
            return $latestRecords->fetchAll(PDO::FETCH_ASSOC);
        }

        return false;
    }

    public function get_products()
    {
        $products = $this->get_rows('products');

        if ($products->rowCount() > 0) {
            return $products->fetchAll(PDO::FETCH_ASSOC);
        }

        return false;
    }


    public function cartItem_exist($id, $cart)
    {
        if (in_array($id, $cart)) {
            return true;
        }

        return false;
    }

    public function get_cartItems($params)
    {
        $paramLeng = count($params);
        $placeholder = str_repeat('?,', $paramLeng - 1) . '?';
        $statement =  $this->pdo->prepare("SELECT * FROM products WHERE product_id IN ($placeholder)");
        $statement->execute($params);

        if ($statement->rowCount() > 0) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        return false;
    }

    public function get_single_product($params)
    {
        return $this->get_row_byId($params)->fetch(PDO::FETCH_ASSOC);
    }
}
