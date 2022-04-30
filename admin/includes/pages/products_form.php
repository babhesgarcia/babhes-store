<form action="" method="post">

    <?php if (!is_null($productId)) : ?>
        <input type="hidden" name="id" value="<?php echo $productId; ?>">
    <?php endif; ?>
    <!-- name -->
    <div class="mb-3">
        <label for="product_name" class="form-label">Product name</label>
        <input type="text" name="product_name" id="product_name" class="form-control" value="<?php echo $products->get_input('product_name'); ?>">
        <small class="text-danger"><?php echo $products->get_error('product_name'); ?></small>
    </div>

    <!-- description -->
    <div class="mb-3">
        <label for="product_description" class="form-label">Product description</label>
        <textarea name="product_description" id="product_description" cols="30" rows="6" class="form-control"><?php echo $products->get_input('product_description'); ?></textarea>
        <small class="text-danger"><?php echo $products->get_error('product_description'); ?></small>
    </div>

    <!-- price -->
    <div class="mb-3">
        <label for="product_price" class="form-label">Price</label>
        <input type="text" name="product_price" id="product_price" class="form-control" value="<?php echo $products->get_input('product_price'); ?>">
        <small class="text-danger"><?php echo $products->get_error('product_price'); ?></small>
    </div>

    <?php if (!is_null($productId)) : ?>
        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    <?php else : ?>
        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary">Add Product</button>
        </div>
    <?php endif; ?>
</form>