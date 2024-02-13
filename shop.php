<?php include("header.php");?>
<?php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitplay_users";


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conp = new mysqli($servername, $username, $password, $dbname);
$sqlpro="SELECT * FROM `product_cards` ORDER BY product_cards.pubdate DESC; ";
$quepro=mysqli_query($conp,$sqlpro);
$rowpro=mysqli_num_rows($quepro);
$respic=mysqli_fetch_assoc($quepro);
?>

<body>

<div id="hero-carousel" class="carousel slide  carousel-fade" data-bs-ride="carousel" style="margin-bottom:10px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active c-item">
      <img src="footc1.jpeg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4 ">
        <p class="mt-5 fs-3 text-uppercase">Book your turf online effortlessly and secure your playing field.</p>
        <h1 class="display-1 fw-bolder text-capitalize">Score Your Spot</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Book Now</button>
      </div>
    </div>

    <div class="carousel-item c-item">
      <img src="full-shot-couch-training-kids.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4 ">
        <p class="mt-5 fs-3 text-uppercase"> Experience the joy of hassle-free reservations for your soccer matches.</p>
        <h1 class="display-1 fw-bolder text-capitalize">Kick Off Convenience</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Explore Top Turfs</button>
      </div>
    </div>

    <div class="carousel-item c-item">
      <img src="full-shot-women-playing-football.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4 ">
        <p class="mt-5 fs-3 text-uppercase">Our online turf booking platform lets you schedule your games at your convenience.</p>
        <h1 class="display-1 fw-bolder text-capitalize">Game On Anytime</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Kick Now</button>
      </div>
    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
  <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>



  </div>
</div>

<style>
  .product-wrapper, .product-img{overflow: hidden;position: relative}.mb-45{margin-bottom: 45px}.product-action{bottom: 0px;left: 0;opacity: 0;position: absolute;right: 0;text-align: center;transition: all 0.6s ease 0s}.product-wrapper{border-radius: 10px}.product-img >span{background-color: #fff;box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);color: #333;display: inline-block;font-size: 12px;font-weight: 500;left: 20px;letter-spacing: 1px;padding: 3px 12px;position: absolute;text-align: center;text-transform: uppercase;top: 20px}.product-action-style{background-color: #fff;box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);display: inline-block;padding: 16px 2px 12px}.product-action-style >a{color: #979797;line-height: 1;padding: 0 21px;position: relative}.product-action-style >a.action-plus{font-size: 18px}.product-wrapper:hover .product-action{bottom: 20px;opacity: 1}
</style>

<section class="m-100 p-4">
<div class="container d-flex justify-content-center mt-100">
    <div class="row">
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/tL7ZE46.jpg" alt=""> </a>
            <span class="text-center"><i class="fa fa-rupee"></i> 43,000</span>
            <div class="product-action">
              <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> <a href="#"> <i
                    class="fa fa-heart"></i> </a> <a href="#"> <i class="fa fa-shopping-cart"></i> </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/lAQxXCK.jpg" alt=""> </a>
            <span><i class="fa fa-rupee"></i> 41,000</span>
            <div class="product-action">
              <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal"
                  data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a
                  class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a
                  class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/HxEEu5g.jpg" alt=""> </a>
            <span><i class="fa fa-rupee"></i> 33,000</span>
            <div class="product-action">
              <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal"
                  data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a
                  class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a
                  class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/lAQxXCK.jpg" alt=""> </a>
            <span><i class="fa fa-rupee"></i> 23,000</span>
            <div class="product-action">
              <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal"
                  data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a
                  class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a
                  class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="m-100 p-4">
<div class="container d-flex justify-content-center mt-100">
    <div class="row">
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/tL7ZE46.jpg" alt=""> </a>
            <span class="text-center"><i class="fa fa-rupee"></i> 43,000</span>
            <div class="product-action">
              <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> <a href="#"> <i
                    class="fa fa-heart"></i> </a> <a href="#"> <i class="fa fa-shopping-cart"></i> </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/lAQxXCK.jpg" alt=""> </a>
            <span><i class="fa fa-rupee"></i> 41,000</span>
            <div class="product-action">
              <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal"
                  data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a
                  class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a
                  class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/HxEEu5g.jpg" alt=""> </a>
            <span><i class="fa fa-rupee"></i> 33,000</span>
            <div class="product-action">
              <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal"
                  data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a
                  class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a
                  class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/lAQxXCK.jpg" alt=""> </a>
            <span><i class="fa fa-rupee"></i> 23,000</span>
            <div class="product-action">
              <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal"
                  data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a
                  class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a
                  class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- <section class="mt-50 d-flex p-2">
    <div class="container">
      <div class="row">

        <div class="card" style="width: 18rem; margin: 15px;">
            <a href="product_detail.php?Order_id=2">
              <img class="mt-3" src="turf1.jpg" alt="" style="height:220px; width:100%; border-radius: 5px 5px 0px 0px;">
            </a>    
                <div class="card-body">
                 <h5 class="card-title">item name</h5>
                 <p class="card-text">100</p>
                 <a href="product_detail.php?Order_id=2" class="btn btn-primary">Go somewhere</a>
                </div>
         </div>

         <div class="card" style="width: 18rem; margin: 15px;">
            <a href="product_detail.php?Order_id=2">
              <img class="mt-3" src="turf1.jpg" alt="" style="height:220px; width:100%; border-radius: 5px 5px 0px 0px;">
            </a>    
                <div class="card-body">
                 <h5 class="card-title">item name</h5>
                 <p class="card-text">100</p>
                 <a href="product_detail.php?Order_id=2" class="btn btn-primary">Go somewhere</a>
                </div>
         </div>

         <div class="card" style="width: 18rem; margin: 15px;">
            <a href="product_detail.php?Order_id=2">
              <img class="mt-3" src="turf1.jpg" alt="" style="height:220px; width:100%; border-radius: 5px 5px 0px 0px;">
            </a>    
                <div class="card-body">
                 <h5 class="card-title">item name</h5>
                 <p class="card-text">100</p>
                 <a href="product_detail.php?Order_id=2" class="btn btn-primary">Go somewhere</a>
                </div>
         </div>

         <div class="card" style="width: 18rem; margin: 15px;">
            <a href="product_detail.php?Order_id=2">
              <img class="mt-3" src="turf1.jpg" alt="" style="height:220px; width:100%; border-radius: 5px 5px 0px 0px;">
            </a>    
                <div class="card-body">
                 <h5 class="card-title">item name</h5>
                 <p class="card-text">100</p>
                 <a href="product_detail.php?Order_id=2" class="btn btn-primary">Go somewhere</a>
                </div>
         </div>

      </div>
    </div>
</section>  

<section class="mt-50 d-flex p-2">
    <div class="container">
      <div class="row">

        <div class="card" style="width: 18rem; margin: 15px;">
            <a href="product_detail.php?Order_id=2">
              <img class="mt-3" src="turf1.jpg" alt="" style="height:220px; width:100%; border-radius: 5px 5px 0px 0px;">
            </a>    
                <div class="card-body">
                 <h5 class="card-title">item name</h5>
                 <p class="card-text">100</p>
                 <a href="product_detail.php?Order_id=2" class="btn btn-primary">Go somewhere</a>
                </div>
         </div>

         <div class="card" style="width: 18rem; margin: 15px;">
            <a href="product_detail.php?Order_id=2">
              <img class="mt-3" src="turf1.jpg" alt="" style="height:220px; width:100%; border-radius: 5px 5px 0px 0px;">
            </a>    
                <div class="card-body">
                 <h5 class="card-title">item name</h5>
                 <p class="card-text">100</p>
                 <a href="product_detail.php?Order_id=2" class="btn btn-primary">Go somewhere</a>
                </div>
         </div>

         <div class="card" style="width: 18rem; margin: 15px;">
            <a href="product_detail.php?Order_id=2">
              <img class="mt-3" src="turf1.jpg" alt="" style="height:220px; width:100%; border-radius: 5px 5px 0px 0px;">
            </a>    
                <div class="card-body">
                 <h5 class="card-title">item name</h5>
                 <p class="card-text">100</p>
                 <a href="product_detail.php?Order_id=2" class="btn btn-primary">Go somewhere</a>
                </div>
         </div>

         <div class="card" style="width: 18rem; margin: 15px;">
            <a href="product_detail.php?Order_id=2">
              <img class="mt-3" src="turf1.jpg" alt="" style="height:220px; width:100%; border-radius: 5px 5px 0px 0px;">
            </a>    
                <div class="card-body">
                 <h5 class="card-title">item name</h5>
                 <p class="card-text">100</p>
                 <a href="product_detail.php?Order_id=2" class="btn btn-primary">Go somewhere</a>
                </div>
         </div>

      </div>
    </div>
</section>  -->


<section class="m-100" style="background-color:#e7e7e7; border-radius:10px;">
    <div class="container ">
    <h2 class="text-center m-3" style="background-color:#e7e7e7; "><b>WATCH SOME PRODUCTS</b></h2>
              <div class="row">
                <div id="splideCarousel" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list ">

                            <?php 
                            if($rowpro) {
                                // Reset data seek pointer
                                mysqli_data_seek($quepro, 0);

                                while($respro = mysqli_fetch_assoc($quepro)) {
                            ?>
                                    <li class="splide__slide col-sm-3 m-0.1 d-flex p-2 ">
                                        <div class="card bg-light text-dark imager-fluid">
                                            <a href="product_detail.php?Order_id=<?= $respro['Order_id'] ?>">
                                                <?php $img = $respro['pic'] ?>
                                                <img src="upload/<?= $img ?>" alt="" style="height:220px; width:100%; border-radius: 5px 5px 0px 0px;">
                                            </a>
                                            <div class="card-body" style="padding-left:10px;">
                                                <h5 class="card-title"><a href="product_detail.php?Order_id=<?= $respro['Order_id'] ?>" name="title"><?= ucfirst($respro['item_name']) ?></a></h5>
                                                <p  class="card-text" id="Price"><?= strip_tags(substr($respro['Price'], 0, 900)) ?></p>
                                                <a href="product_detail.php?Order_id=<?= $respro['Order_id'] ?>" class="btn btn-primary">View Product</a>
                                            </div>
                                        </div>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</section>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var splide = new Splide('#splideCarousel', {
            perPage: 4,
            breakpoints: {
                600: {
                    perPage: 1
                }
            },
            pagination: false, // Hide pagination
            arrows: true, // Show arrows for navigation
        });

        splide.mount();
    });
</script>

<footer id="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>FitPlay.<span>.</span></h3>
            <p>
             Kolhapur <br>
             Maharastra<br>
              <strong>Phone:</strong> +91 9284008321<br>
              <strong>Email:</strong> thefitplay@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="privacy_policy.html">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Book Turfs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Explore Gym</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Shop Products</a></li>
              
            </ul>
          </div>



          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Welcome to the heart of our vibrant community! Follow us on our social networks to stay connected with the latest in fitness trends, exciting events, exclusive promotions, and inspiring stories from our community members.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

          </div>
          

        </div>
      </div>
    </div>
    

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>FitPlay</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

</body>

</html>
