  <section class="products">
      <!-- recent products -->
      <div class="latest-product py-5">

          <div class="container">
              <h1 class="display-5 alert text-center">products <i class="fa-solid fa-certificate text-primary"></i></i></h1>
              <!-- products -->
              <div class="row justify-content-center align-items-center">
                  <?php if ($product_records) : ?>
                      <?php foreach ($product_records as $product) : ?>
                          <div class="col-md-4 col-lg-3 mb-3">
                              <div class="card shadow-lg">
                                  <img src="./photos/uploaded/<?php echo $product['img']; ?>" class="card-img-top img img-fluid" alt="">
                                  <div class="card-body">
                                      <h4 class="card-title fw-bold"><?php echo $product['product_name']; ?></h4>
                                      <p class="card-text"><?php echo $product['product_description']; ?></p>
                                      <div class="price d-flex justify-content-between align-items-center p-3">
                                          Price: <code class="fs-5"><?php echo $product['product_price']; ?></code>
                                      </div>
                                      <?php if (in_array($product['product_id'], $_SESSION['cart'])) : ?>
                                          <div class="alert alert-success">Added to basket</div>
                                      <?php else : ?>
                                          <div class="d-grid">
                                              <a href="?source=products&product_id=<?php echo $product['product_id']; ?>" class="btn btn-warning">Add to basket</a>
                                          </div>
                                      <?php endif; ?>
                                  </div>
                              </div>
                          </div>
                      <?php endforeach; ?>
                  <?php else : ?>
                      <div class="alert alert-info">No products Yet</div>
                  <?php endif; ?>
              </div>
          </div>
      </div>


  </section>