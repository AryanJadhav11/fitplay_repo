




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
      <link rel="stylesheet" href="proimg/css/bootstrapp.min.css">
      <!-- style & Responsive css -->
      <link rel="stylesheet" href="proimg/css/shopstyle.css">
       <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->

      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      <script src="shoppnew/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="shoppnew/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
      
   </head>
   <!-- body -->
   <body class="main-layout">
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
 
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel" style="background-color:#007aff;" class="pb-0">
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
                              <h1>Where Quality  <strong class="color">Meets the Game.</strong></h1>
                              <p>Unleash power and precision with our elite tennis racket. Engineered for champions, ready for your winning shot.</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button" style="background-color:rgb(54 151 255);">Buy Now</a>
                              <a class="btn btn-lg btn-primary" href="about.html" role="button" style="background-color:rgb(54 151 255);">About</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="proimg/imagess/racket.png" alt="img"/></figure>
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
                              <h1>Gear Up for<strong class="color">Greatness.</strong></h1>
                              <p>Experience superior agility and support with our top-of-the-line tennis shoes. Dominate the court with confidence and style.</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button" style="background-color:rgb(54 151 255);">Buy Now</a>
                              <a class="btn btn-lg btn-primary" href="about.html" role="button" style="background-color:rgb(54 151 255);">About</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="proimg/imagess/shoessss.png" alt="img"/></figure>
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


      <!-- six_box section -->
      <!-- <style>
      .pt-0 six_probpx:hover {
    background-color: #add8e6; /* Light blue background on hover */
    transition: background-color 0.3s ease; /* Smooth transition for the color change */
}
      </style> -->
      <div class="six_box pt-0">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="pt-0 six_probpx yellow_bg">
                     <i><img src="data:image/png;base64,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"  width="80px" height="80px"></i>
                     <span>Sport Shoes</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="pt-0 six_probpx bluedark_bg">
                     <i><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZElEQVR4nO2YMWsUQRTHH2msTrAQgmAl+A1EsUl5hCCCH+FuU4liJ0mUmUUwjRZ+AIuIiO6e2uQIVoaYiN5OGkELSaEmlaVcrvDEv8yaEzK6t/tmZ71d2D887oqZ93+/3feGuSOqVavcQkBbCGiTqiqEBB1U2qcb0msImrIFgKCpOEdIrworNNE8pJ24wA41rQE61DxYs1NYoYnmAS3F5gF1rAECenqwZrGwQseYTyOk7whoiEd0gguADPsLV9oTTAFYSnuDhSuth/VwIqAN2xnKpdZqf67dHeydvLL14+ztDzfHnCLrSUWOEwLajPcap1gW30xqrw52ve4Ax+fXoZNZJ5qUr9cdYJRIh9Mq/4evVzWAltF7tomg/DlEYg9K7qLnz+YFaGWdCbP3sgKYBcefSuJ3iC9cIM/wzTwT5sbsAGbBo+9/ggXkWdaRBwDMOAREFQQ4FFQDVP0NNJor0JG2cbTOjLwADSNf1jpqgEb9BqSbFrIZHkQC/WdX8e3xZUx8iC0Bfg5fLlQa4CuUwP7zaxUFUDLU5sONxbwA+5MB6PkzeZ88dEQycgbAvU5DyfsOANrOrtPz3f6sXqwXnVl+fyMV4OO9I4jkE/vixUNA/PW3pOlr1pUIkJYoaR22xSUo+YJVfE+0/lU8x9cZQAzxRhxlAbxbPubC19nfG1C3TrEA3orTLnzHitN7UOIcs4XOu/B1Jmz7F3gD7F+kMikeStYpJDwqkxDJ68xjdIHKJChxhwlwl8okKLnCbKEHVCYhkmvMK8QalUmIhMp7iZuooORnHoD4RGWSvtfn/R1QiyqoXxZdaK4MoELgAAAAAElFTkSuQmCC"  width="80px" height="80px"></i>
                     <span>Barbell</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="pt-0 six_probpx yellow_bg">
                     <i><img src="data:image/png;base64,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"  width="80px" height="80px"></i>
                     <span>Football</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="pt-0 six_probpx bluedark_bg">
                     <i><img src="data:image/png;base64,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"  width="80px" height="80px"></i>
                     <span>Crickets</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="pt-0 six_probpx yellow_bg">
                     <i><img src="data:image/png;base64,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"  width="80px" height="80px"></i>
                     <span>Basketball</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="pt-0 six_probpx bluedark_bg">
                     <i><img src="data:image/png;base64,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" width="80px" height="80px"></i>
                     <span>Boxing Gloves</span>
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
                     <div class="dark_white_bg" ><img  src="proimg/products/p1.png" alt="#"/></div>
                     <h3 style="color:#393939" >Li-Ning New XP-70-IV <br>₹1,632</h3>
                  </div>
            
             
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="proimg/products/p2.png" alt="#"/></div>
                     <h3 style="color:#393939" >Sborter Protective Knee Pads <br>₹498</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/p3.png" alt="#"/></div>
                     <h3 style="color:#393939">Apole Star Hockey Sticks for Men  <br>₹569</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/p4.png" alt="#"/></div>
                     <h3 style="color:#393939">Nivia Dominator 3.0 Football <br>₹1999</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/p5.png" alt="#"/></div>
                     <h3 style="color:#393939">Nivia Web Football Goal Keep Gloves <br>₹1504</h3>
                  </div>
              
            
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="proimg/products/p6.png" alt="#"/></div>
                     <h3 style="color:#393939">Plaeto Unisex Adult Slam Multiplay Sports Shoes <br>₹1899</h3>
                  </div>
              
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="proimg/products/p7.png" alt="#"/></div>
                     <h3 style="color:#393939" >OFF LIMITS Men's STUSSYY Big and Tall Running Shoes <br>₹499</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/p8.png" alt="#"/></div>
                     <h3 style="color:#393939">Nivia Ambition Football Stud <br>₹899</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/p9.png" alt="#"/></div>
                     <h3 style="color:#393939">Cockatoo Premium Cricket Wicket <br>₹459</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/p10.png" alt="#"/></div>
                     <h3 style="color:#393939">MILTON Aqua 1000 Stainless Steel Water Bottle  <br>₹344</h3>
                  </div>
               
            
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="proimg/products/p11.png" alt="#"/></div>
                     <h3 style="color:#393939">Cosco Slamdunker Basketball Size 7 Professional Basket Ball  <br>₹789</h3>
                  </div>
            
             
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="proimg/products/p12.png" alt="#"/></div>
                     <h3 style="color:#393939" >KARBD Cricket Ball Leather <br> ₹899 </h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/p13.png" alt="#"/></div>
                     <h3 style="color:#393939">Boldfit Gym Ball for Exercise Anti Burst Exercise Ball <br>₹596</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/p14.png" alt="#"/></div>
                     <h3 style="color:#393939">DSC 1500212 Guard Cricket Helmet Small (Navy) <br>₹1118</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="proimg/products/p15.png" alt="#"/></div>
                     <h3 style="color:#393939">Positivity Sports India Cricket Jersey <br>₹359</h3>
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

<div class="container-fluid">
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
                            <div class="col-md-3 p-5">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <?php 
                                        $imgSrc = "upload/{$respro['pic']}";
                                        ?>
                                        <img src="<?= $imgSrc ?>" class="img-fluid" style="height: 200px;" alt="Product Image">
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


<section>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<div class="container py-6">
        <div class="row align-items-center py-2">
            <div class="col-xl-4 mb-5 text-center text-xl-start">

                <div class="lc-block mb-3">
                    <div editable="rich">
                        <h2 class="fw-bold display-6">Our Clients say...</h2>
                    </div>
                </div>
                <div class="lc-block mb-4">
                    <div editable="rich">
                        <p class="fw-light rfs-10">Customers are Awesome. Check what our clients are saying about us.</p>
                    </div>
                </div>

                

            </div>



            <div class="col-xl-8 position-relative">

               

                <div id="carouselTestimonialCards" class="carousel slide py-xl-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="row row-cols-1 row-cols-lg-2 g-4">
                                <div class="col">
                                    <div class="card p-3">
                                        <div class="card-body" style="height:330px ;" >
                                            <div class="lc-block mb-4">
                                                <div editable="rich">
                                                    <p><em class="rfs-8 text-muted">Effortless turf booking, diverse gym choices, and premium fitness gear in the shop. A complete fitness solution in one platform. Highly recommend for fitness enthusiasts!</em></p>
                                                </div>
                                            </div>
                                            <div class="lc-block d-inline-flex" style="align-self:bottom;">
                                                <div class="lc-block me-3" style="min-width:72px;">
                                                    <img class="img-fluid rounded-circle " src="./sankya1.jpg" width="72" height="72">
                                                </div>
                                                <div class="lc-block">
                                                    <div editable="rich">

                                                        <p class="h5">Sanskar Sankpal</p>

                                                        <p class="text-muted">Fitness Lover</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <div class="card-body" style="height:330px ;">
                                            <div class="lc-block mb-4">
                                                <div editable="rich">
                                                    <p><em class="rfs-8 text-muted"> Smooth booking process, excellent gym options, and top-quality fitness products. Convenient and user-friendly interface. Great experience overall!</em></p>
                                                </div>
                                            </div>
                                            <div class="lc-block d-inline-flex">
                                                <div class="lc-block me-3" style="min-width:72px">
                                                    <img class="img-fluid rounded-circle " src="./parth.jpg" width="72" height="72">
                                                </div>
                                                <div class="lc-block">
                                                    <div editable="rich">

                                                        <p class="h5">Parth Chavan</p>

                                                        <p class="text-muted">Football Enthusiastic</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="carousel-item">
                            <div class="row row-cols-1 row-cols-lg-2 g-4">
                                <div class="col">
                                    <div class="card p-3">
                                        <div class="card-body" style="height:330px ;">
                                            <div class="lc-block mb-4">
                                                <div editable="rich">
                                                    <p><em class="rfs-8 text-muted">Seamless turf reservations, comprehensive gym listings, and a shop with premium fitness essentials. Perfect for those serious about fitness. 5 stars!</em></p>
                                                </div>
                                            </div>
                                            <div class="lc-block d-inline-flex">
                                                <div class="lc-block me-3" style="min-width:72px">
                                                    <img class="img-fluid " src="./anuj.jpg" style="width:72; height:100;">
                                                </div>
                                                <div class="lc-block">
                                                    <div editable="rich">

                                                        <p class="h5">Anuj Samang</p>

                                                        <p class="text-muted">Professional Player</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <div class="card-body" style="height:330px ;">
                                            <div class="lc-block mb-4">
                                                <div editable="rich">
                                                    <p><em class="rfs-8 text-muted">I've been a loyal customer of this website for years, and for good reason.I've bought everything from electronics to beauty products, and I've always been satisfied with my purchases. The website is easy to navigate, and the prices are competitive. Overall, a fantastic shopping destination!</em></p>
                                                </div>
                                            </div>
                                            <div class="lc-block d-inline-flex">
                                                <div class="lc-block me-3" style="min-width:72px">
                                                    <img class="img-fluid rounded-circle " src="./adya.jpg" width="72" height="72">
                                                </div>
                                                <div class="lc-block">
                                                    <div editable="rich">

                                                        <p class="h5">Aditya Para</p>

                                                        <p class="text-muted">Football Enthusiastic</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    



                    <div class="w-100 px-3 text-center mt-4">
                        <a class="carousel-control-prev position-relative d-inline me-4 p-2" href="#carouselTestimonialCards" data-bs-slide="prev">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.354 1.726a.5.5 0 0 1 0 .708L5.707 8l5.727 5.726a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                            </svg>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next position-relative d-inline p-2" href="#carouselTestimonialCards" data-bs-slide="next">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                                <path fill-rule="evenodd" d="M4.726 1.726a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.726 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg>
                            <span class="visually-hidden">Next</span>
                        </a>





                    </div>
                </div>
            </div>
        </div>
    </div>

   </section>
      <!-- end Our  Clients -->
<!-- moodel start -->
<div class="mobile-modal">
  <div class="mobile-modal-content">
    <h2>Website is Under Construction</h2>
    <img src="52530.jpg" alt="Mobile Image" style="max-width: 100%; height: 50%;margin:10px;">
    <p>Sorry, this website is under construction and be available on mobile devices soon...</p>
  </div>
  <style>
  /* This will apply by default, hiding the modal on larger screens */
  .mobile-modal {
    display: none;
  }

  /* This media query targets screens with a max-width of 600px */
  @media only screen and (max-width: 600px) {
    .mobile-modal {
      display: block; /* Show the modal on small screens */
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
      text-align: center;
    }
    body{
        overflow:hidden;
    }
    .mobile-modal-content {
      background-color: #fff;
      margin: 10% auto;
      padding: 20px;
      border-radius: 8px;
      max-width: 80%;
    }
  }
</style>
  <!-- modal end -->

</div>

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

