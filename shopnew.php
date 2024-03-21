<?php include("header.php");?>

<?php
if (isset($_SESSION['user_data'])) {
    include('floating_icon.php');
}
?>
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



<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>FitPlay - Shop</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="bootstrapp.min.css">
      <!-- style & Responsive css -->
      <link rel="stylesheet" href="shopstyle.css">
       <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->

      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      <script src="shoppnew/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="shoppnew/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

      
   </head>
   <!-- body -->
   <body class="main-layout">
      <style>
         /*--------------------------------------------------------------------- layout new css ---------------------------------------------------------------------*/
.marginii {
     margin: 50px 0px 100px 0px;
}
.carousel-indicators li {
     display: none;
}
.banner-main {
     position: relative;
     background-color: #007aff;
     background-size: 100% 100%;

}
.banner-main .carousel-caption {
     text-align: left;
     left: 0;
     top: 16%;
     position: relative;
}
.banner-main .carousel-caption h1 {
     font-size: 65px;
     line-height: 74px;
     font-weight: bold;
     color: #081b30;
}
.banner-main .carousel-caption p {
     color: #ffffff;
     padding: 9px 0px;
     margin-bottom: 50px;
}
.color {
     color: #fff;
}

.btn-primary:hover {
     background: #007bff;
     color: #000;
}
.img-box figure {
     margin: 0;
}
.img-box figure img {
     box-shadow: #081b30 0px 0px 0px 0px;
}
.layout_padding {
     padding-top:  90px 0px;
}
.titlepage {
     padding-bottom: 50px;
}
.titlepage h2 {
     padding: 0px 0px 0px 0px;
     font-size: 50px;
     font-weight: bold;
     color: #007aff;
     line-height: 50px;
     position: relative;
     margin-bottom: 20px;
}

.titlepage span {
     color: #141012;
font-size: 17px;
line-height: 31px;
display: block;
font-weight: normal;
}
.clothes_main{
     width: 100%; 
     float: left;
     background-color: #081b30;
     height: auto;
     padding: 60px 0px;

}
      </style>
      <section style="background-color:#007aff;" class="pb-0" >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome to <strong class="color">FitPlay Shop</strong></h1>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button" style="background-color:rgb(54 151 255);">Buy Now</a>
                              <a class="btn btn-lg btn-primary" href="about.html" role="button" style="background-color:rgb(54 151 255);">About </a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="proimg/imagess/boksing-gloves.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome to <strong class="color">FitPlay Shop</strong></h1>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button" style="background-color:rgb(54 151 255);">Buy Now</a>
                              <a class="btn btn-lg btn-primary" href="about.html" role="button" style="background-color:rgb(54 151 255);">About</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="proimg/imagess/boksing-gloves.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome to <strong class="color">FitPlay Shop</strong></h1>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button" style="background-color:rgb(54 151 255);">Buy Now</a>
                              <a class="btn btn-lg btn-primary" href="about.html" role="button" style="background-color:rgb(54 151 255);">About</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="proimg/imagess/boksing-gloves.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>

      <!-- six_box section -->
      <div class="six_box pt-0">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="shoppnew/images/shoes.png" alt="#"/></i>
                     <span>Shoes</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="shoppnew/images/underwear.png" alt="#"/></i>
                     <span>underwear</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="shoppnew/images/pent.png" alt="#"/></i>
                     <span>Pante & socks</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="shoppnew/images/t_shart.png" alt="#"/></i>
                     <span>T-shirt & tankstop</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="shoppnew/images/jakit.png" alt="#"/></i>
                     <span>cardigans & jumpers</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="shoppnew/images/helbet.png" alt="#"/></i>
                     <span>Top & hat</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end six_box section -->
      
      <!-- project section -->

   <style>
      .project_box {
    overflow: hidden;
    position: relative;
}

.project_box img {
    transition: transform 0.3s ease;
}

.project_box:hover img {
    transform: scale(1.1);
}
</style>
      <div id="project" class="project">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage p-0">
                     <h2 style="color:#393939; font-size: 30px;">Featured Products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
            <div class="product_main">
             
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="proimg/products/kneepad1-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939" >Short Openwork Cardigan $120.00</h3>
                  </div>
            
             
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="proimg/products/product1-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939" >Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/product2-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939">Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/product3-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939">Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/product4-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939">Short Openwork Cardigan $120.00</h3>
                  </div>
              
            
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="proimg/products/shoes1.png" alt="#"/></div>
                     <h3 style="color:#393939">Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="proimg/products/shoes2.png" alt="#"/></div>
                     <h3 style="color:#393939" >Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/stud1-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939">Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/stump-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939">Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/waterbottle-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939">Short Openwork Cardigan $120.00</h3>
                  </div>
               
            
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="proimg/products/kneepad1-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939">Short Openwork Cardigan $120.00</h3>
                  </div>
            
             
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="proimg/products/product1-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939" >Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/product2-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939">Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/product3-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939">Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/product4-removebg-preview.png" alt="#"/></div>
                     <h3 style="color:#393939">Short Openwork Cardigan $120.00</h3>
                  </div>
              
               <div class="col-md-12">
                  <a class="read_more" href="#">See More</a>
               </div>
            </div>
            </div>
         </div>
      </div>
      <!-- end project section -->

      
         <!-- three_box section -->
         <div class="three_box pb-6 pt-0">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="shoppnew/images/icon_mony.png"></i>
                     <span>Money Back</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="shoppnew/images/icon_gift.png"></i>
                     <span>Special Gift</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="shoppnew/images/icon_car.png"></i>
                     <span>Free Shipping</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end three_box section -->



<!--product display start -->
<div class="container">
        <div class="row mb-4 align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="lc-block text-center">
                    <img class="img-fluid " src="proimg/shop_content2.png" width="400" height="400" loading="lazy">
                </div><!-- /lc-block -->
            </div><!-- /col -->
            <div class="col-lg-6 p-lg-6">
                <div class="lc-block mb-5">
                    <div editable="rich">

                        <h2 class="display-6 fw-bold" style="color:#393939">Unlock Your Potential: Shop Premium Sports Equipment Here</h2>

                        <p class="lead" style="color:#393939"><br>Discover top-notch sports equipment to elevate your game. From expert guidance to competitive prices, we've got you covered. Shop online or visit us for an exceptional experience..</p>
                    </div>
                </div><!-- /lc-block -->
                <!-- /lc-block -->
                <div class="lc-block">
                    <div class="d-inline-flex" >
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-primary" viewBox="0 0 16 16" lc-helper="svg-icon">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                        </div>

                        <div class="ms-3 align-self-center" editable="rich">
                            <p >Convenient Shopping.</p>
                        </div>
                    </div>
                </div>
                <div class="lc-block">
                    <div class="d-inline-flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-primary" viewBox="0 0 16 16" lc-helper="svg-icon">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                        </div>

                        <div class="ms-3 align-self-center" editable="rich">
                            <p>Competitive Pricing.</p>
                        </div>
                    </div>
                </div>
                <div class="lc-block">
                    <div class="d-inline-flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-primary" viewBox="0 0 16 16" lc-helper="svg-icon">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                        </div>

                        <div class="ms-3 align-self-center" editable="rich">
                            <p>Latest Trends.</p>
                        </div>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>
        <div class="row mb-4 align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 order-lg-1">
                <div class="lc-block text-center"><img class="img-fluid" src="proimg/shop_content1.png" width="400" height="400" loading="lazy"></div><!-- /lc-block -->
            </div><!-- /col -->
            <div class="col-lg-6 p-lg-6">
                <div class="lc-block mb-5">
                    <div editable="rich">

                        <h2 class="display-6 fw-bold" style="color:#393939">Gear Up for Greatness: Your Ultimate Sports Store</h2>

                        <p class="lead"><br>Offer a diverse range of sports equipment, apparel, and accessories catering to different sports and activities.</p>
                    </div>
                </div><!-- /lc-block -->
                <!-- /lc-block -->
                <div class="lc-block">
                    <div class="d-inline-flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-primary" viewBox="0 0 16 16" lc-helper="svg-icon">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                        </div>

                        <div class="ms-3 align-self-center" editable="rich">
                            <p>Quality Assurance.</p>
                        </div>
                    </div>
                </div>
                <div class="lc-block">
                    <div class="d-inline-flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-primary" viewBox="0 0 16 16" lc-helper="svg-icon">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                        </div>

                        <div class="ms-3 align-self-center" editable="rich">
                            <p>Return Policy.</p>
                        </div>
                    </div>
                </div>
                <div class="lc-block">
                    <div class="d-inline-flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-primary" viewBox="0 0 16 16" lc-helper="svg-icon">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                        </div>

                        <div class="ms-3 align-self-center" editable="rich">
                            <p>Customer Support.</p>
                        </div>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>

    </div>



    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- product display end -->

<section>
      <div  class="p-2">
         <img src="proimg/adss.png" width="100%">
      </div>
</section> 

<style>
  .product-wrapper, .product-img{overflow: hidden;position: relative; width: 310px; height: 318px; background-color:#E1E1E1;}.mb-45{margin-bottom: 45px}.product-action{bottom: 0px;left: 0;opacity: 0;position: absolute;right: 0;text-align: center;transition: all 0.6s ease 0s}.product-wrapper{border-radius: 10px}.product-img >span{background-color: #fff;box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);color: #333;display: inline-block;font-size: 12px;font-weight: 500;left: 20px;letter-spacing: 1px;padding: 3px 12px;position: absolute;text-align: center;text-transform: uppercase;top: 20px}.product-action-style{background-color: #fff;box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);display: inline-block;padding: 16px 2px 12px}.product-action-style >a{color: #979797;line-height: 1;padding: 0 21px;position: relative}.product-action-style >a.action-plus{font-size: 18px}.product-wrapper:hover .product-action{bottom: 20px;opacity: 1}
</style>


      <!-- PRODUCT CARDS START -->
<style>
  .fea {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 60px;
}
.fea::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	border-radius: 1px;
	background: #106eea;
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #747d89;
	min-height: 325px;
	text-align: center;
	overflow: hidden;
}
.carousel .thumb-wrapper {
	padding: 25px 15px;
	background: #fff;
	border-radius: 6px;
	text-align: center;
	position: relative;
	box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}
.carousel .item .img-box {
	height: 120px;
	margin-bottom: 20px;
	width: 100%;
	position: relative;
}
.carousel .item img {	
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .item h4 {
	font-size: 18px;
}
.carousel .item h4, .carousel .item p, .carousel .item ul {
	margin-bottom: 5px;
}
.carousel .thumb-content .btn {
	color: #106eea;
	font-size: 11px;
	text-transform: uppercase;
	font-weight: bold;
	background: none;
	border: 1px solid #106eea;
	padding: 6px 14px;
	margin-top: 5px;
	line-height: 16px;
	border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
	color: #fff;
	background: #106eea;
	box-shadow: none;
}
.carousel .thumb-content .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	opacity: 0.7;
	margin-right: 5px;
}
.carousel-control-prev, .carousel-control-next {
	height: 44px;
	width: 40px;
	background: #106eea;	
	margin: auto 0;
	border-radius: 4px;
	opacity: 0.8;
}
.carousel-control-prev:hover, .carousel-control-next:hover {
	background: #106eea;
	opacity: 1;
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 36px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -19px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: #fff;
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -2px;
}
.carousel-control-next i {
	margin-right: -4px;
}		
.carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 4px;
	border-radius: 50%;
	border: none;
}
.carousel-indicators li {	
	background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {	
	background: rgba(0, 0, 0, 0.6);
}
.carousel .wish-icon {
	position: absolute;
	right: 10px;
	top: 10px;
	z-index: 99;
	cursor: pointer;
	font-size: 16px;
	color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
	color: #ff6161;
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
}
.thumb-wrapper {
        height: 100%; /* Ensure the card takes up the full height */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add shadow to the card */
    }
</style>

<div class="container-xl">
    <div class="row">
        <div class="col-md-12">
            <h2 class="fea">Featured <b>Products</b></h2>
            <div id="productCarousel" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php 
                            if($rowpro) {
                                // Reset data seek pointer
                                mysqli_data_seek($quepro, 0);
                                $count = 0;
                                while($respro = mysqli_fetch_assoc($quepro)) {
                                    if ($count % 4 == 0 && $count != 0) {
                                        echo '</div></div><div class="carousel-item"><div class="row">';
                                    }
                            ?>
                            <div class="col-md-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <?php 
                                        $imgSrc = "upload/{$respro['pic']}";
                                        ?>
                                        <img src="<?= $imgSrc ?>" class="img-fluid" style="height: 200px; object-fit: contain;" alt="Product Image">
                                    </div>
                                    <div class="thumb-content">
                                        <h4><?= ucfirst($respro['item_name']) ?></h4>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <p class="item-price"><?= strip_tags(substr($respro['Price'], 0, 900)) ?> INR</p>
                                        <a href="productdetailsample.php?Order_id=<?= $respro['Order_id'] ?>" class="btn btn-primary">View Product</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    $count++;
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var carousel = document.getElementById('productCarousel');
        var carouselInstance = new bootstrap.Carousel(carousel);
        var prevButton = carousel.querySelector('.carousel-control-prev');
        var nextButton = carousel.querySelector('.carousel-control-next');

        prevButton.addEventListener('click', function () {
            carouselInstance.prev();
        });

        nextButton.addEventListener('click', function () {
            carouselInstance.next();
        });
    });
</script>

<!-- PRODUCT CARDS END -->


      <!--Our  Clients -->
      <div id="plant" class="section_Clients layout_padding padding_bottom_0" >
         <div class="container pt-3">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2 class="text-center p-0" style="color:#393939;"> Testmonial</h2>
                     <span style="text-align: center;" class="pb-0">available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
            <div class="section Clients_2 layout_padding padding-top_0">
               <div class="container">
                  <div class="row p-0">
                     <div class="col-sm-12">

                        <div id="testimonial" class="carousel slide pb-0"  data-ride="carousel" style="background-color:#136af8;">

  <!-- Indicators -->
  <ul class="carousel-indicators ">
    <li data-target="#testimonial" data-slide-to="0" class="active"></li>
    <li data-target="#testimonial" data-slide-to="1"></li>
    <li data-target="#testimonial" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner p-0">
    <div class="carousel-item active">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="proimg/imagess/john-image.png" style="max-width: 100%;"></div>
                              <div class="john_text">JOHN DUE<span style="color: #fffcf4;">(ceo)</span></div>
                              <p class="lorem_ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                              <div class="icon_image"><img src="proimg/imagess/icon-1.png"></div>
                           </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="proimg/imagess/john-image.png" style="max-width: 100%;"></div>
                              <div class="john_text">JOHN DUE<span style="color: #fffcf4;">(ceo)</span></div>
                              <p class="lorem_ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                              <div class="icon_image"><img src="proimg/imagess/icon-1.png"></div>
                           </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="proimg/imagess/john-image.png" style="max-width: 100%;"></div>
                              <div class="john_text">JOHN DUE<span style="color: #fffcf4;">(ceo)</span></div>
                              <p class="lorem_ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                              <div class="icon_image"><img src="proimg/imagess/icon-1.png"></div>
                           </div>
                        </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#testimonial" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#testimonial" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <style>
      
      .Clients{
     width: 100%; 
     float: left;
}

.section_Clients{
     width: 100%;
     float: left;
}

.section .Clients_2{ 
     width: 100%; 
     float: left; 
}
.john{ 
     width: 100%; 
     float: left;
     background-color: #136af8;
     height: auto;
     background-size: 100%;
     background-repeat: no-repeat;

}

.john_image {
    width: 100%;
    float: left;
    text-align: center;
    margin-top: 30px;
}

.john_text {
    width: 100%;
    float: left;
    font-size: 22px;
    color: #000;
    text-align: center;
    margin-top: 20px;
    padding-bottom: 35px;
    font-weight: 500;
    line-height: 23px;

}

.lorem_ipsum_text{
     color: #fff;
     text-align: center;
     width: 83%;
     margin: 0 auto;
     position: relative;
     color: #fffcf4;
     padding-top: 33px!important;

}
.icon_image{
     width: 100%;
     text-align: center;
     margin: 0 auto;
     position: relative;
     top: 0;
     display: block;
     padding-bottom: 30px;
     padding-top: 30px;
}

.contact_us{
     width: 100%;
     float: left;
     padding: 0px;
}
</style>
      <!-- end Our  Clients -->


      <!--  footer -->
      <footer style="width:100%;">
      <?php include('footer.php') ?>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="shoppnew/js/jquery.min.js"></script>
      <script src="shoppnew/js/popper.min.js"></script>
      <script src="shoppnew/js/bootstrap.bundle.min.js"></script>
      <script src="shoppnew/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="shoppnew/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="shoppnew/js/custom.js"></script>


            <!-- Javascript files-->
            <script src="proimg/jss/jquery.min.js"></script>
      <script src="proimg/jss/popper.min.js"></script>
      <script src="proimg/jss/bootstrap.bundle.min.js"></script>
      <script src="proimg/jss/jquery-3.0.0.min.js"></script>
      <script src="proimg/jss/plugin.js"></script>
      <!-- sidebar -->
      <script src="proimg/jss/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="proimg/jss/custom.js"></script>
      <!-- javascript --> 
      <script src="proimg/jss/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

