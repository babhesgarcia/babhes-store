<?php if (!empty($productRecords)) : ?>
    <table class="table table-sm align-middle">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Created on</th>
                <th>Action(s)</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($productRecords as $product) : ?>
                <tr>
                    <td><?php echo $product['product_name']; ?></td>
                    <td><?php echo $product['product_description']; ?></td>
                    <td><?php echo $product['product_price']; ?></td>
                    <td><?php echo $product['date_created']; ?></td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="?source=products&product_eid=<?php echo $product['product_id']; ?>" class="btn  me-1"><i class="fa-solid fa-pen-to-square fa-lg text-secondary"></i></a>
                            <a href="<?php echo $url; ?>&product_did=<?php echo $product['product_id']; ?>" class="btn ms-1"><i class="fa-solid fa-xmark fa-lg text-danger"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php else : ?>
    <div class="alert">No added product yet.</div>
<?php endif; ?>