<?php include __DIR__ . '/../controllers/products.php'; ?>

<section class="products">
    <div class="container-fluid px-4">
        <div class="row">

            <!-- intro -->
            <div class="col-lg-4 mb-5 mb-lg-0">

                <div class="product-form py-3">

                    <div class="fs-4 alert text-primary">New product</div>

                    <!-- form -->
                    <?php include __DIR__ . '/products_form.php'; ?>
                </div>
            </div>

            <!-- analytics -->
            <div class="col-lg-8">

                <div class="text-secondary alert fs-4">Products <i class="fa-solid fa-circle-check text-primary"></i></div>


                <div class="card shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- form -->
                            <?php include __DIR__ . '/products_table.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>