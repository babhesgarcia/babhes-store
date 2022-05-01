  <section class="products">

      <div class="container py-3">
          <div class="row">
              <!-- card products -->
              <div class="col-md-8 mb-3 mb-md-0 order-1 order-md-0">

                  <?php if ($cartItems) : ?>

                      <?php foreach ($cartItems as $item) : ?>

                          <?php
                            // calculate total price
                            $cartPrice += $item['product_price'];
                            ?>

                          <!-- product cart -->
                          <div class="card mb-3 shadow-sm">
                              <div class="card-body d-flex flex-column flex-lg-row align-items-center">
                                  <!-- img -->
                                  <div class="product-img mx-3 d-flex flex-column justify-content-between align-items-center">
                                      <img src="./photos/uploaded/<?php echo $item['img']; ?>" alt="img">

                                      <!-- price -->
                                      <div class="product-price d-flex justify-content-between align-items-center alert mb-0">
                                          Price: <code class="fs-5 ms-3"><?php echo $item['product_price']; ?></code>
                                      </div>
                                  </div>
                                  <!-- info -->
                                  <div class="product-info">
                                      <h4><?php echo $item['product_name']; ?></h4>
                                      <div class="product-description">
                                          <?php echo $item['product_description']; ?>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      <?php endforeach; ?>
                  <?php else : ?>
                      <div class="alert alert-info">You haven't added any item in your cart.</div>
                  <?php endif; ?>
              </div>

              <!-- card infomation -->
              <div class="col-md-4 mb-3 mb-md-0">
                  <div class="card-information">
                      <div class="card shadow-lg border-0">
                          <div class="card-body">
                              <h3 class="text-warning">Cart <i class="fa-solid fa-cart-shopping"></i></h3>
                              <hr>

                              <!-- card items -->
                              <div class="card mb-2">
                                  <div class="card-body d-flex justify-content-between align-items-center">
                                      Items: <code class="fs-4"><?php echo $cartItemCount; ?></code>
                                  </div>
                              </div>

                              <!-- card total -->
                              <div class="card">
                                  <div class="card-body d-flex justify-content-between align-items-center">
                                      Total: <div><code class="fs-4"><?php echo $cartPrice;  ?></code> Pesos</div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>
  </section>