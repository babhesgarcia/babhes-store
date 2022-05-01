  <header class="header d-flex justify-content-between align-items-center p-2 px-4 border-bottom border-primary bg-light">
      <div class="nav-logo fs-3 fw-bold text-primary">Garcia store</div>

      <nav class="nav">
          <a href="?source=home" class="nav-link">Home</a>
          <a href="?source=products" class="nav-link">Products <i class="fa-solid fa-certificate"></i></a>

          <!-- card -->
          <a href="?source=cart" class="cart  text-decoration-none text-success position-relative">
              <i class="fa-solid fa-cart-shopping icon fa-lg text-warning"></i>
              <!-- card number indicator -->
              <span class="cart-count position-absolute"><?php echo $cartItemCount; ?></span>
          </a>
      </nav>
  </header>