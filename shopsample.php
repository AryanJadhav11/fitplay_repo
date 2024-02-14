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

<head>
<title>FitPlay - Shop</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

</head>
<body>

<!-- carosal start -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://contents.mediadecathlon.com/s1060328/k$551476c484457458609a90f62a1988c2/99%20under%20999%20%20web.jpg?format=auto&quality=70&f=1480x0" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://contents.mediadecathlon.com/s1051803/k$24a0285566a6d9ea9d53a2bde53a3b02/Sale%20%20web.jpg?format=auto&quality=70&f=1480x0" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://contents.mediadecathlon.com/s1061445/k$b0d33a4289de7edac9953bdbd35d99cc/Frame%20427321401.png?format=auto&quality=70&f=1480x0" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- carosal end -->
<br>
<br>
<br>
<br>

<!-- facilities start -->
<section class="pt-3">
<div class="container">
	<div class="row  text-center">
		<div class="col-sm-4 col-md-4 facility-cod">
			<h3> Cash On Delivery </h3>
			<p> Lorem ipsum dolor sit amet, novum paulo principes ut eam, omnium graecis inimicus cum ne. Pro nusquam suscipiantur ei, ad vel dolorem consetetur, impetus lucilius vulputate vim te. Saperet ancillae officiis no est, wisi intellegat id eam, has omnes expetendis theophrastus eu. </p>
		</div>
		<div class="col-sm-4 col-md-4 facility-shipping">
			<h3> Free Shipping</h3>
			<p>Lorem ipsum dolor sit amet, novum paulo principes ut eam, omnium graecis inimicus cum ne. Pro nusquam suscipiantur ei, ad vel dolorem consetetur, impetus lucilius vulputate vim te. Saperet ancillae officiis no est, wisi intellegat id eam, has omnes expetendis theophrastus eu. </p>
		</div>
		<div class="col-sm-4 col-md-4 facility-returns">
			<h3>Easy Returns </h3>
			<p>Lorem ipsum dolor sit amet, novum paulo principes ut eam, omnium graecis inimicus cum ne. Pro nusquam suscipiantur ei, ad vel dolorem consetetur, impetus lucilius vulputate vim te. Saperet ancillae officiis no est, wisi intellegat id eam, has omnes expetendis theophrastus eu. </p>
		</div>
	</div>
</div>

<style>
  .facility-cod
{
	background:url("http://i345.photobucket.com/albums/p396/ruchi122/1470920870_07Wallet_zpsswjtv8dx.png") no-repeat top;
	padding-top:70px;
}

.facility-cod:hover
{
	background:url("http://i345.photobucket.com/albums/p396/ruchi122/1470920870_07_zpspz41uc4k.png") no-repeat top;
}

.facility-shipping
{	background:url("http://i345.photobucket.com/albums/p396/ruchi122/1471024355_ic_local_shipping_48px_zpslmejbm3l.png") no-repeat top;
	padding-top:70px;
}

.facility-shipping:hover
{	background:url("http://i345.photobucket.com/albums/p396/ruchi122/1470920793_ic_local_shipping_48px_zpsijbwmkjd.png") no-repeat top;
}

.facility-returns
{
	background:url("http://i345.photobucket.com/albums/p396/ruchi122/1471024335_return_zps5wptjjcf.png") no-repeat top;
	padding-top:70px;
}

.facility-returns:hover
{
	background:url("http://i345.photobucket.com/albums/p396/ruchi122/1470920778_return_zpswu9lrlui.png") no-repeat top;
}
/*end of facilities*/
</style>
</section>
<!-- facilities end -->

<!-- image gallary start -->
<section class="pt-4 p-0">
<div class="container">
<h2 class="text-center m-3"><b>WATCH SOME PRODUCTS</b></h2>
            <div class="row">
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="proimg/stud1-removebg-preview.png" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="proimg/stump-removebg-preview.png" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="proimg/kneepad1-removebg-preview.png" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-6">
                    <img src="proimg/cr7jersey-removebg-preview.png" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-6">
                    <img src="proimg/waterbottle-removebg-preview.png" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="proimg/product1-removebg-preview.png" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="proimg/product2-removebg-preview.png" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="proimg/product3-removebg-preview.png" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="proimg/product4-removebg-preview.png" class="img-fluid" alt="image">
                </div>

            </div>
        </div>
</section>
<!-- image gallary end -->
<br>
<br>
<br>
<br>
<!-- whats new start -->
<section class="p-0">
    <div class="container ">
    <h2 class="text-center mb-4"><b>WATCH SOME PRODUCTS</b></h2>
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
<!--new product-->
<section class="pt-5">
<div class="container whats-new">
  <div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6 sofa-float text-center">
		<img src="proimg/ronaldodada.png" class="img-responsive">
	</div>
	<div class="col-sm-6 col-md-6 text-center whats-new-text">
		<h1>Check out our Turf Platform</h1>
		<p class="paragraphs"> Lorem ipsum dolor sit amet, novum paulo principes ut eam, omnium graecis inimicus cum ne. Pro nusquam suscipiantur ei, ad vel dolorem consetetur, impetus lucilius vulputate vim te. Saperet ancillae officiis no est, wisi intellegat id eam, has omnes expetendis theophrastus eu. Eam et mazim doctusLorem ipsum dolor sit amet, novum paulo principes ut eam, omnium graecis inimicus cum ne.     </p>
	</div>
  </div>
	
</div>
<!--new product-->
<style>
.whats-new
{
	margin-top:40px;
}

.sofa-float
{
	position: relative;
	display:block;
	max-width:400px;
	margin:0px auto;
	animation:animatedsofa 3s infinite;
}

@keyframes animatedsofa
{
	0%{transform:translateY(10px);}
	50%{transform:translateY(-20px);}
	100%{transform:translateY(10px);}
}

.paragraphs
{
	max-width:400px;
	max-height:400px;
	margin:0px auto;
	display: block;
}

.whats-new-text
{
	padding-top:3%;
	padding-bottom:3%;
}
</style>
<!-- whats new end -->
</section>

<section>
<!-- footer start -->
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
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="privacy_policy.html">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="turf.php">Book Turfs</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Explore Gym</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="shop.php">Shop Products</a></li>
          
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
  
</div>
</footer>
</section>
<!-- End Footer -->

<!-- footer end -->
</body>
</html>