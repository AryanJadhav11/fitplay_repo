<?php include("header.php");?>
<?php include('floating_icon.php'); ?>
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
<br>
<br>
<br>

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
<section class="pt-4 p-0 hoverable">
<div class="container">
<h2 class="text-center m-3"><b>WATCH SOME PRODUCTS</b></h2>
            <div class="row hover14">
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
                    <img src="proimg/product1-removebg-preview.png" class="img-fluid sofa-float" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="proimg/product2-removebg-preview.png" class="img-fluid sofa-float" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="proimg/product3-removebg-preview.png" class="img-fluid sofa-float" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="proimg/product4-removebg-preview.png" class="img-fluid sofa-float" alt="image">
                </div>
            </div>
        </div>
</section>
<!-- image gallary end -->
<br>
<br>
<br>
<br>


<!-- Product Slider -->
<section class="p-0">
    <div class="container">
        <h2 class="text-center mb-4"><b>WATCH SOME PRODUCTS</b></h2>
        <div class="row">
            <div id="splideCarousel" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">

                        <?php 
                        if($rowpro) {
                            // Reset data seek pointer
                            mysqli_data_seek($quepro, 0);

                            while($respro = mysqli_fetch_assoc($quepro)) {
                        ?>
                        <li class="splide__slide col-sm-3 m-0.1 d-flex p-2">
                            <div class="container page-wrapper">
                                <div class="page-inner">
                                    <div class="row">
                                        <div class="el-wrapper" >
                                            <div class="box-up">
                                            <a href="product_detail.php?Order_id=<?= $respro['Order_id'] ?>">
                                            <?php $img = $respro['pic'] ?>
                                                <img class="img" src="upload/<?= $img ?>" alt="" style="height:220px; width:100%; border-radius: 5px 5px 0px 0px;">
                                                <div class="img-info">
                                                    <div class="info-inner">
                                                        <span class="p-name"><h3><a href="product_detail.php?Order_id=<?= $respro['Order_id'] ?>" name="title"><?= ucfirst($respro['item_name']) ?></a></h3></span>
                                                        <span class="p-company">Yeezy</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-down">
                                                <div class="h-bg">
                                                    <div class="h-bg-inner"></div>
                                                </div>
                                                <a class="cart" href="product_detail.php?Order_id=<?= $respro['Order_id'] ?>">
                                                    <span class="price"id="Price"><?= strip_tags(substr($respro['Price'], 0, 900)) ?></span>
                                                    <span class="add-to-cart">
                                                        <span class="txt">View Product</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
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

    <!-- product slider css -->
  <style>
    body,
    html {
      height: 100%;
    }

    .d-flex {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
    }

    .align-center {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .flex-centerY-centerX {
      justify-content: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    body {
      background-color: #f7f7f7;
    }

    .page-wrapper {
      height: 100%;
      display: table;
    }

    .page-wrapper .page-inner {
      display: table-cell;
      vertical-align: middle;
    }

    .el-wrapper {
      width: 360px;
      padding: 15px;
      margin: 15px auto;
      background-color: #fff;
    }

    @media (max-width: 991px) {
      .el-wrapper {
        width: 345px;
      }
    }

    @media (max-width: 767px) {
      .el-wrapper {
        width: 290px;
        margin: 30px auto;
      }
    }

    .el-wrapper:hover .h-bg {
      left: 0px;
    }

    .el-wrapper:hover .price {
      left: 20px;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      -o-transform: translateY(-50%);
      transform: translateY(-50%);
      color: #818181;
    }

    .el-wrapper:hover .add-to-cart {
      left: 50%;
    }

    .el-wrapper:hover .img {
      webkit-filter: blur(7px);
      -o-filter: blur(7px);
      -ms-filter: blur(7px);
      filter: blur(7px);
      filter: progid:DXImageTransform.Microsoft.Blur(pixelradius='7', shadowopacity='0.0');
      opacity: 0.4;
    }

    .el-wrapper:hover .info-inner {
      bottom: 155px;
    }

    .el-wrapper:hover .a-size {
      -webkit-transition-delay: 300ms;
      -o-transition-delay: 300ms;
      transition-delay: 300ms;
      bottom: 50px;
      opacity: 1;
    }

    .el-wrapper .box-down {
      width: 100%;
      height: 60px;
      position: relative;
      overflow: hidden;
    }

    .el-wrapper .box-up {
      width: 100%;
      height: 300px;
      position: relative;
      overflow: hidden;
      text-align: center;
    }

    .el-wrapper .img {
      padding: 20px 0;
      -webkit-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
      -moz-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
      -o-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
      transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
      /* ease-out */
      -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      /* ease-out */
    }

    .h-bg {
      -webkit-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
      -moz-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
      -o-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
      transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
      /* ease-out */
      -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      /* ease-out */
      width: 660px;
      height: 100%;
      background-color: #3f96cd;
      position: absolute;
      left: -659px;
    }

    .h-bg .h-bg-inner {
      width: 50%;
      height: 100%;
      background-color: #464646;
    }

    .info-inner {
      -webkit-transition: all 400ms cubic-bezier(0, 0, 0.18, 1);
      -moz-transition: all 400ms cubic-bezier(0, 0, 0.18, 1);
      -o-transition: all 400ms cubic-bezier(0, 0, 0.18, 1);
      transition: all 400ms cubic-bezier(0, 0, 0.18, 1);
      /* ease-out */
      -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      /* ease-out */
      position: absolute;
      width: 100%;
      bottom: 25px;
    }

    .info-inner .p-name,
    .info-inner .p-company {
      display: block;
    }

    .info-inner .p-name {
      font-family: 'PT Sans', sans-serif;
      font-size: 18px;
      color: #252525;
    }

    .info-inner .p-company {
      font-family: 'Lato', sans-serif;
      font-size: 12px;
      text-transform: uppercase;
      color: #8c8c8c;
    }

    .a-size {
      -webkit-transition: all 300ms cubic-bezier(0, 0, 0.18, 1);
      -moz-transition: all 300ms cubic-bezier(0, 0, 0.18, 1);
      -o-transition: all 300ms cubic-bezier(0, 0, 0.18, 1);
      transition: all 300ms cubic-bezier(0, 0, 0.18, 1);
      /* ease-out */
      -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      /* ease-out */
      position: absolute;
      width: 100%;
      bottom: -20px;
      font-family: 'PT Sans', sans-serif;
      color: #828282;
      opacity: 0;
    }

    .a-size .size {
      color: #252525;
    }

    .cart {
      display: block;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      font-family: 'Lato', sans-serif;
      font-weight: 700;
    }

    .cart .price {
      -webkit-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
      -moz-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
      -o-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
      transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
      /* ease-out */
      -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      /* ease-out */
      -webkit-transition-delay: 100ms;
      -o-transition-delay: 100ms;
      transition-delay: 100ms;
      display: block;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      font-size: 16px;
      color: #252525;
    }

    .cart .add-to-cart {
      -webkit-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
      -moz-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
      -o-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
      transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
      /* ease-out */
      -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
      /* ease-out */
      -webkit-transition-delay: 100ms;
      -o-transition-delay: 100ms;
      transition-delay: 100ms;
      display: block;
      position: absolute;
      top: 50%;
      left: 110%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    .cart .add-to-cart .txt {
      font-size: 12px;
      color: #fff;
      letter-spacing: 0.045em;
      text-transform: uppercase;
      white-space: nowrap;
    }
  </style>

</section>
    <!-- product slider over -->

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
<!-- our section -->
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
</section>
<!-- our section -->

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
