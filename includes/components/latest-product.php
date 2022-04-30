 <?php $latestRecords = $products->latest_records(); ?>
 <div class="container">
     <div class="row justify-content-center align-items-center">
         <?php foreach ($latestRecords as $latest) : ?>
             <div class="col-md-4 col-lg-3 mb-3">
                 <div class="card shadow-lg">
                     <img src="./photos/1.jpg" class="card-img-top img img-fluid" alt="">
                     <div class="card-body">
                         <h4 class="card-title fw-bold"><?php echo $latest['product_name']; ?></h4>
                         <p class="card-text"><?php echo $latest['product_description']; ?></p>
                         <div class="price d-flex justify-content-between align-items-center p-3">
                             Price: <code class="fs-5"><?php echo $latest['product_price']; ?></code>
                         </div>
                     </div>
                 </div>
             </div>
         <?php endforeach; ?>
     </div>
 </div>