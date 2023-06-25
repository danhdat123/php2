<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>EShopper - Bootstrap Shop Template</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="Free HTML Templates" name="keywords">
   <meta content="Free HTML Templates" name="description">


   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <!-- Font Awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

   <!-- Libraries Stylesheet -->


   <!-- Customized Bootstrap Stylesheet -->
   <link href="../css/style.css" rel="stylesheet">
</head>
<!-- Shop Detail Start -->
<div class="container-fluid py-5">
   <div class="row px-xl-5">
      <?php foreach ($a as $i) : ?>
         <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner border">
                  <div class="carousel-item active">
                     <img src="<?php echo $i['img']; ?>" alt="">
                  </div>
               </div>
               <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                  <i class="fa fa-2x fa-angle-left text-dark"></i>
               </a>
               <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                  <i class="fa fa-2x fa-angle-right text-dark"></i>
               </a>
            </div>
         </div>
         <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold"><?php echo $i['name']; ?></h3>
            <div class="d-flex mb-3">
               <div class="text-primary mr-2">
                  <small class="fas fa-star"></small>
                  <small class="fas fa-star"></small>
                  <small class="fas fa-star"></small>
                  <small class="fas fa-star-half-alt"></small>
                  <small class="far fa-star"></small>
               </div>
               <small class="pt-1">(50 Reviews)</small>
            </div>
            <h3 class="font-weight-semi-bold mb-4">$<?php echo $i['price']; ?></h3>
            <p class="mb-4"><?php echo $i['title']; ?></p>
         <?php endforeach; ?>
         <div class="d-flex mb-4">
            <p class="text-dark font-weight-medium mb-0 mr-3">Colors:</p>
            <form>
               <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="color-1" name="color">
                  <label class="custom-control-label" for="color-1">Black</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="color-2" name="color">
                  <label class="custom-control-label" for="color-2">White</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="color-3" name="color">
                  <label class="custom-control-label" for="color-3">Red</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="color-4" name="color">
                  <label class="custom-control-label" for="color-4">Blue</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="color-5" name="color">
                  <label class="custom-control-label" for="color-5">Green</label>
               </div>
            </form>
         </div>
         <div class="d-flex align-items-center mb-4 pt-2">
            <div class="input-group quantity mr-3" style="width: 130px;">
               <div class="input-group-btn">
                  <button class="btn btn-primary btn-minus">
                     <i class="fa fa-minus"></i>
                  </button>
               </div>
               <input type="text" class="form-control bg-secondary text-center" value="1">
               <div class="input-group-btn">
                  <button class="btn btn-primary btn-plus">
                     <i class="fa fa-plus"></i>
                  </button>
               </div>
            </div>
            <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
         </div>
         <div class="d-flex pt-2">
            <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
            <div class="d-inline-flex">
               <a class="text-dark px-2" href="">
                  <i class="fab fa-facebook-f"></i>
               </a>
               <a class="text-dark px-2" href="">
                  <i class="fab fa-twitter"></i>
               </a>
               <a class="text-dark px-2" href="">
                  <i class="fab fa-linkedin-in"></i>
               </a>
               <a class="text-dark px-2" href="">
                  <i class="fab fa-pinterest"></i>
               </a>
            </div>
         </div>
         </div>
   </div>
</div>
<!-- Shop Detail End -->


<!-- Products End -->


<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>


<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="/public/js/main.js"></script>
</body>

</html>