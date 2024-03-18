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

<style>


</style>

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
      <script src="shoppnew/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]
   </head>
   <!-- body -->
   <body class="main-layout">

      <!-- header -->
      <header>
         <!-- header inner -->
         <!-- <div class="header">
            <div class="header_top d_none1">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4">
                        <ul class="conta_icon ">
                           <li><a href="#"><img src="shoppnew/images/call.png" alt="#"/>Call us: 0126 - 922 - 0162</a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <ul class="social_icon">
                           <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <div class="se_fonr1">
                           <form action="#" >
                              <div class="select-box">
                                 <label for="select-box1" class="label select-box1"><span class="label-desc">English</span> </label>
                                 <select id="select-box1" class="select">
                                    <option value="Choice 1">English</option>
                                    <option value="Choice 1">Falkla</option>
                                    <option value="Choice 2">Germa</option>
                                    <option value="Choice 3">Neverl</option>
                                 </select>
                              </div>
                           </form>
                           <span class="time_o"> Open hour: 8.00 - 18.00</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_midil">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-4">
                        <ul class="conta_icon d_none1">
                           <li><a href="#"><img src="shoppnew/images/email.png" alt="#"/> demo@gmail.com</a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <a class="logo" href="#"><img src="shoppnew/images/logo.png" alt="#"/></a>
                     </div>
                     <div class="col-md-4">
                        <ul class="right_icon d_none1">
                           <li><a href="#"><img src="shoppnew/images/shopping.png" alt="#"/></a> </li>
                           <a href="#" class="order">Order Now</a> 
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="products.html">Products</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="fashion.html">Fashion</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="news.html">News</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <div class="search">
                           <form action="/action_page.php">
                              <input class="form_sea" type="text" placeholder="Search" name="search">
                              <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header> -->
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main" style= "background-image: url('proimg/sport2_blur.png') ; ">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="text-bg">
                     <h1> <span class="blodark"> FitPlay Shop </span> <br>Gear Up To Fitness</h1>
                     <p>A huge fashion collection for ever </p>
                     <a class="read_more" href="#">Shop now</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ban_img pt-6">
                     <figure><img src="proimg/banner.png" alt="innerbanner" width="750px" height="750px"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- six_box section -->
      <div class="six_box">
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
      <div id="project" class="project">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Featured Products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
            <div class="product_main">
             
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/shoes1.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
            
             
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/shoes2.png" alt="#"/></div>
                     <h3 >Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/shoes3.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/shoes4.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/shoes5.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
              
            
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/tisat1.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/tisat2.png" alt="#"/></div>
                     <h3 >Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/tisat3.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/tisat4.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/tisat5.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
               
            
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/mix1.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/mix2.png" alt="#"/></div>
                     <h3 >Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/mix3.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/mix4.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="shoppnew/images/mix5.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
              
               <div class="col-md-12">
                  <a class="read_more" href="#">See More</a>
               </div>
            </div>
            </div>
         </div>
      </div>
      <!-- end project section -->
   <section>
      <div>
         <img src="ONE.png" width="100%">
      </div>
</section>   
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
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">

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
      <!-- three_box section -->
      <div class="three_box">
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
   </div>
      <!-- end three_box section -->

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
   </body>
</html>

