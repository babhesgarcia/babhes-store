 <?php include __DIR__ . '/../controllers/dashboard.php'; ?>

 <div class="container">
     <div class="row">

         <!-- intro -->
         <div class="col-md-6 mb-5 mb-md-0">
             <div class="display-1 alert text-primary d-flex flex-column">
                 <h1 class="display-1">Garcia</h1>
                 <h4>Online Food Store</h4>
             </div>
             <hr>
             <p>#No 1. Online Food store in Mamburao Occidental Mindoro</p>
         </div>

         <!-- analytics -->
         <div class="col-md-6">

             <div class="card shadow my-2">
                 <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                     Products <code class="fs-1"><?php echo $productQuantity; ?></code>
                 </div>
             </div>
         </div>
     </div>
 </div>