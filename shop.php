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

<!-- just new design start -->
<section class="block"> 
<div class="container">
<div class="row">
  <div class="col-lg-6">
    <h1 class="hello"><b>Best In Style Colloction For You</b></h1>
    <span style="font-family: 'Oswald', sans-serif; color: black;text-decoration-line: underline; text-decoration-color: yellow;  text-decoration-thickness: 3px;text-underline-offset: 6px; font-size:20px;">We craft the,we wont say the best <br>But through 70 years of experience in the industry</span>
    <br>
    <br>
    <button class="btn" style="border-radius:50px;color:white;background-color:black;width:200px;">ORDER NOW</button>
    <br>
    <br>
<br>
    <h4 style="color:black;"><b>Toe Comfort</b></h4>
    <h2 style="color:black;"><b>FAST RUNNING</b></h2>
  </div>
  <div class="col-lg-6">
    <img src="https://www.pinclipart.com/picdir/big/338-3385006_download-shoe-png-hd-clipart.png" alt="" class="imgcss img-fluid">
    <br>
    <br>
    <br>
    <h3 style="font-size: 6rem;font-weight: boldtext-shadow: 0 0 0.2em yellow;color: white;position:absolute;left:1150px;top:500px; -webkit-text-stroke: 1px yellow;-webkit-text-fill-color: transparent;font-weight:400;">₹899</>
  </div>
</div>
</div>

</section>

<style>


.hello{
    font-size: 3rem;
    color: black;
    font-family: 'Oswald', sans-serif;
    font-weight: 400;
  }
  .block{
    height:110%;
    width:100%;
    background: linear-gradient(to right,#988181,#585151,#281F1F,#000000);
    background-size:200% 200%;
    animation: gradientAnimation 5s ease infinite;
    position: relative;
    }
    @keyframes gradientAnimation {
        0% {
            background-position: 0% 50%; /* Start position of the animation */
        }
        100% {
            background-position: 100% 50%; /* End position of the animation */
        }
    }
  .imgcss{
    position: relative;
    max-width: 100%;
    filter:drop-shadow(20px 20px 20px rgba(0,0,0,0.9));
  }
  .circle{
    position: absolute;
    top: -120px;
    right: 0;
    z-index:1;
    height: auto;
    max-width: 100%;
    opacity: 10%;
  }

  @media (min-width: 576px) {
    .hello {
      font-size: 4rem;
    }
    .circle {
      height: 400px;
    }
  }

  @media (min-width: 768px) {
    .hello {
      font-size: 5rem;
    }
    .circle {
      height: 600px;
    }
  }

  @media (min-width: 992px) {
    .hello {
      font-size: 6rem;
    }
    .circle {
      height: 800px;
    }
  }

  @media (min-width: 1200px) {
    .hello {
      font-size: 6rem;
    }
    .circle {
      height: 1000px;
    }
  }
</style>

<!-- just new design end -->
<br>
<br>
<br>
<!-- best sellig satrt -->
   <!-- trying new slider start
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<div class="bbb_viewed">
    <div class="container">
        <div class="row">
            <div class="col">
               <div class="bbb_main_container">
                <div class="bbb_viewed_title_container">
                    <h3 class="bbb_viewed_title">Best selling products</h3>
                    <div class="bbb_viewed_nav_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="bbb_viewed_slider_container">
                    <div class="owl-carousel owl-theme bbb_viewed_slider">
                        <div class="owl-item">
                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924153/alcatel-smartphones-einsteiger-mittelklasse-neu-3m.jpg" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹12225<span>₹13300</span></div>
                                    <div class="bbb_viewed_name"><a href="#">Alkatel Phone</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924221/51_be7qfhil.jpg" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹30079</div>
                                    <div class="bbb_viewed_name"><a href="#">Samsung LED</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924241/8fbb415a2ab2a4de55bb0c8da73c4172--ps.jpg" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹22250</div>
                                    <div class="bbb_viewed_name"><a href="#">Samsung Mobile</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924275/images.jpg" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹1379</div>
                                    <div class="bbb_viewed_name"><a href="#">Huawei Power</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924361/21HmjI5eVcL.jpg" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹225<span>₹300</span></div>
                                    <div class="bbb_viewed_name"><a href="#">Sony Power</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924241/8fbb415a2ab2a4de55bb0c8da73c4172--ps.jpg" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹13275</div>
                                    <div class="bbb_viewed_name"><a href="#">Speedlink Mobile</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               </div> 
            </div>
        </div>
    </div>
</div>

<style>
  .bbb_viewed {
     padding-top: 51px;
     padding-bottom: 60px;
     background: #eff6fa
 }

 .bbb_main_container{
         background-color: #fff;
    padding: 11px;
 }

 .bbb_viewed_title_container {
     border-bottom: solid 1px #dadada
 }

 .bbb_viewed_title {
         margin-bottom: 16px;
    margin-top: 8px;

 }

 .bbb_viewed_nav_container {
     position: absolute;
     right: -5px;
     bottom: 14px
 }

 .bbb_viewed_nav {
     display: inline-block;
     cursor: pointer
 }

 .bbb_viewed_nav i {
     color: #dadada;
     font-size: 18px;
     padding: 5px;
     -webkit-transition: all 200ms ease;
     -moz-transition: all 200ms ease;
     -ms-transition: all 200ms ease;
     -o-transition: all 200ms ease;
     transition: all 200ms ease
 }

 .bbb_viewed_nav:hover i {
     color: #606264
 }

 .bbb_viewed_prev {
     margin-right: 15px
 }

 .bbb_viewed_slider_container {
     padding-top: 13px;
 }

 .bbb_viewed_item {
     width: 100%;
     background: #FFFFFF;
     border-radius: 2px;
     padding-top: 25px;
     padding-bottom: 25px;
     padding-left: 30px;
     padding-right: 30px
 }

 .bbb_viewed_image {
         width: 150px;
    height: 150px;
 }

 .bbb_viewed_image img {
     display: block;
     max-width: 100%
 }

 .bbb_viewed_content {
     width: 100%;
     margin-top: 25px
 }

 .bbb_viewed_price {
     font-size: 16px;
     color: #000000;
     font-weight: 500
 }

 .bbb_viewed_item.discount .bbb_viewed_price {
     color: #df3b3b
 }

 .bbb_viewed_price span {
     position: relative;
     font-size: 12px;
     font-weight: 400;
     color: rgba(0, 0, 0, 0.6);
     margin-left: 8px
 }

 .bbb_viewed_price span::after {
     display: block;
     position: absolute;
     top: 6px;
     left: -2px;
     width: calc(100% + 4px);
     height: 1px;
     background: #8d8d8d;
     content: ''
 }

 .bbb_viewed_name {
     margin-top: 3px
 }

 .bbb_viewed_name a {
     font-size: 14px;
     color: #000000;
     -webkit-transition: all 200ms ease;
     -moz-transition: all 200ms ease;
     -ms-transition: all 200ms ease;
     -o-transition: all 200ms ease;
     transition: all 200ms ease
 }

 .bbb_viewed_name a:hover {
     color: #0e8ce4
 }

 .item_marks {
     position: absolute;
     top: 18px;
     left: 18px
 }

 .item_mark {
     display: none;
     width: 36px;
     height: 36px;
     border-radius: 50%;
     color: #FFFFFF;
     font-size: 10px;
     font-weight: 500;
     line-height: 36px;
     text-align: center
 }

 .item_discount { 
     background: #df3b3b;
     margin-right: 5px
 }

 .item_new {
     background: #0e8ce4
 }

 .bbb_viewed_item.discount .item_discount {
     display: inline-block
 }

 .bbb_viewed_item.is_new .item_new {
     display: inline-block
 }
</style>

<script>
  $(document).ready(function()
{

   
        if($('.bbb_viewed_slider').length)
        {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel(
            {
                loop:true,
                margin:30,
                autoplay:true,
                autoplayTimeout:6000,
                nav:false,
                dots:false,
                responsive:
                {
                    0:{items:1},
                    575:{items:2},
                    768:{items:3},
                    991:{items:4},
                    1199:{items:6}
                }
            });

            if($('.bbb_viewed_prev').length)
            {
                var prev = $('.bbb_viewed_prev');
                prev.on('click', function()
                {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if($('.bbb_viewed_next').length)
            {
                var next = $('.bbb_viewed_next');
                next.on('click', function()
                {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }


    });
</script> -->
<style>
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
	color: #7ac400;
	font-size: 11px;
	text-transform: uppercase;
	font-weight: bold;
	background: none;
	border: 1px solid #7ac400;
	padding: 6px 14px;
	margin-top: 5px;
	line-height: 16px;
	border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
	color: #fff;
	background: #7ac400;
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
	background: #7ac400;	
	margin: auto 0;
	border-radius: 4px;
	opacity: 0.8;
}
.carousel-control-prev:hover, .carousel-control-next:hover {
	background: #78bf00;
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
</style>

<div class="container-xl">
	<div class="row">
		<div class="col-md-12">
			<h2>Featured <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/examples/images/products/ipad.jpg" class="img-fluid" alt="">									
								</div>
								<div class="thumb-content">
									<h4>Apple iPad</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/examples/images/products/headphone.jpg" class="img-fluid" alt="Headphone">
								</div>
								<div class="thumb-content">
									<h4>Sony Headphone</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/examples/images/products/macbook-air.jpg" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content">
									<h4>Macbook Air</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/examples/images/products/nikon.jpg" class="img-fluid" alt="Nikon">
								</div>
								<div class="thumb-content">
									<h4>Nikon DSLR</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/examples/images/products/play-station.jpg" class="img-fluid" alt="Play Station">
								</div>
								<div class="thumb-content">
									<h4>Sony Play Station</h4>
									<p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/examples/images/products/macbook-pro.jpg" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content">
									<h4>Macbook Pro</h4>
									<p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/examples/images/products/speaker.jpg" class="img-fluid" alt="Speaker">
								</div>
								<div class="thumb-content">
									<h4>Bose Speaker</h4>
									<p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/examples/images/products/galaxy.jpg" class="img-fluid" alt="Galaxy">
								</div>
								<div class="thumb-content">
									<h4>Samsung Galaxy S8</h4>
									<p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>						
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/examples/images/products/iphone.jpg" class="img-fluid" alt="iPhone">
								</div>
								<div class="thumb-content">
									<h4>Apple iPhone</h4>
									<p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/examples/images/products/canon.jpg" class="img-fluid" alt="Canon">
								</div>
								<div class="thumb-content">
									<h4>Canon DSLR</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/examples/images/products/pixel.jpg" class="img-fluid" alt="Pixel">
								</div>
								<div class="thumb-content">
									<h4>Google Pixel</h4>
									<p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>	
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/examples/images/products/watch.jpg" class="img-fluid" alt="Watch">
								</div>
								<div class="thumb-content">
									<h4>Apple Watch</h4>
									<p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>                                		
    <!-- trying new slider end -->

<!-- best selling end -->

<!--product display start -->

<div class="container">
        <div class="row mb-4 align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="lc-block text-center">
                    <img class="img-fluid " src="https://img.freepik.com/free-vector/no-time-concept-illustration_114360-4209.jpg?w=740&t=st=1709932533~exp=1709933133~hmac=d799041cc79f1faee2b329406e29a76a8845a76248623fded4d1b136d322e216" width="400" height="400" loading="lazy">
                </div><!-- /lc-block -->
            </div><!-- /col -->
            <div class="col-lg-6 p-lg-6">
                <div class="lc-block mb-5">
                    <div editable="rich">

                        <h2 class="display-6 fw-bold">Boost your Creativity</h2>

                        <p class="lead"><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus est. Etiam diam metus.</p>
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
                            <p>Lorem ipsum dolor sit amet</p>
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
                            <p>Consectetur adipiscing elit.</p>
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
                            <p>Aenean vel nisi in ipsum congue</p>
                        </div>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>
        <div class="row mb-4 align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 order-lg-1">
                <div class="lc-block text-center"><img class="img-fluid" src="https://img.freepik.com/free-vector/discount-concept-illustration_114360-2301.jpg?w=740&t=st=1709932568~exp=1709933168~hmac=fe4ab8965b27cd051463b32e51628ba04ccd59378a6f3a60d418f33a234002c5" width="400" height="400" loading="lazy"></div><!-- /lc-block -->
            </div><!-- /col -->
            <div class="col-lg-6 p-lg-6">
                <div class="lc-block mb-5">
                    <div editable="rich">

                        <h2 class="display-6 fw-bold">Increase your Sales</h2>

                        <p class="lead"><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus est. Etiam diam metus.</p>
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
                            <p>Lorem ipsum dolor sit amet</p>
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
                            <p>Consectetur adipiscing elit.</p>
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
                            <p>Aenean vel nisi in ipsum congue</p>
                        </div>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>

    </div>



    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- product display end -->

<style>
  .product-wrapper, .product-img{overflow: hidden;position: relative; width: 310px; height: 318px; background-color:#E1E1E1;}.mb-45{margin-bottom: 45px}.product-action{bottom: 0px;left: 0;opacity: 0;position: absolute;right: 0;text-align: center;transition: all 0.6s ease 0s}.product-wrapper{border-radius: 10px}.product-img >span{background-color: #fff;box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);color: #333;display: inline-block;font-size: 12px;font-weight: 500;left: 20px;letter-spacing: 1px;padding: 3px 12px;position: absolute;text-align: center;text-transform: uppercase;top: 20px}.product-action-style{background-color: #fff;box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);display: inline-block;padding: 16px 2px 12px}.product-action-style >a{color: #979797;line-height: 1;padding: 0 21px;position: relative}.product-action-style >a.action-plus{font-size: 18px}.product-wrapper:hover .product-action{bottom: 20px;opacity: 1}
</style>
<h2 class="text-center"><b>WATCH SOME PRODUCTS</b></h2>
<div class="container d-flex justify-content-center mt-100">
  <div class="row">
    <div class="col-md-3">
      <div class="product-wrapper mb-45 text-center">
        <div class="product-img"> <a href="productdetailsample.php?Order_id=14>" data-abc="true"> <img src="proimg/product2-removebg-preview.png" alt="" style="width:310px;height:318px;"> </a>
          <span class="text-center"><i class="fa fa-rupee"></i> 43,000</span>
          <div class="product-action">
            <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"> cricket set</i> </a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="product-wrapper mb-45 text-center">
        <div class="product-img"> <a href="#" data-abc="true"> <img src="proimg/waterbottle-removebg-preview.png" alt="" style="width:310px;height:318px;"> </a>
          <span><i class="fa fa-rupee"></i> 41,000</span>
          <div class="product-action">
            <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="product-wrapper mb-45 text-center">
        <div class="product-img"> <a href="#" data-abc="true"> <img src="proimg/product1-removebg-preview.png" alt="" style="width:310px;height:318px;"> </a>
          <span><i class="fa fa-rupee"></i> 33,000</span>
          <div class="product-action">
            <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="product-wrapper mb-45 text-center">
        <div class="product-img"> <a href="#" data-abc="true"> <img src="proimg/cr7jersey-removebg-preview.png" alt="" style="width:310px;height:318px;"> </a>
          <span><i class="fa fa-rupee"></i> 23,000</span>
          <div class="product-action">
            <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="product-wrapper mb-45 text-center">
        <div class="product-img"> <a href="#" data-abc="true"> <img src="proimg/product3-removebg-preview.png" alt="" style="width:310px;height:318px;"> </a>
          <span><i class="fa fa-rupee"></i> 23,000</span>
          <div class="product-action">
            <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="product-wrapper mb-45 text-center">
        <div class="product-img"> <a href="#" data-abc="true"> <img src="proimg/product4-removebg-preview.png" alt="" style="width:310px;height:318px;"> </a>
          <span><i class="fa fa-rupee"></i> 23,000</span>
          <div class="product-action">
            <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="product-wrapper mb-45 text-center">
        <div class="product-img"> <a href="#" data-abc="true"> <img src="proimg/kneepad1-removebg-preview.png" alt="" style="width:310px;height:318px;"> </a>
          <span><i class="fa fa-rupee"></i> 23,000</span>
          <div class="product-action">
            <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="product-wrapper mb-45 text-center">
        <div class="product-img"> <a href="#" data-abc="true"> <img src="proimg/stud1-removebg-preview.png" alt="" style="width:310px;height:318px;"> </a>
          <span><i class="fa fa-rupee"></i> 23,000</span>
          <div class="product-action">
            <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});
});	
</script>

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
                                        <div class="el-wrapper"style="height:400px; background-color:#f7f7f7;" >
                                            <div class="box-up">
                                            <a href="productdetailsample.php?Order_id=<?= $respro['Order_id'] ?>">
                                            <?php $img = $respro['pic'] ?>
                                                <img class="img" src="upload/<?= $img ?>" alt="" style="height:220px; width:100%; border-radius: 5px 5px 0px 0px;mix-blend-mode: multiply;">
                                                <div class="img-info">
                                                    <div class="info-inner">
                                                        <span class="p-name"><h3><a href="productdetailsample.php?Order_id=<?= $respro['Order_id'] ?>" name="title"><?= ucfirst($respro['item_name']) ?></a></h3></span>
                                                        <span class="p-company">FitPlay</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-down">
                                                <div class="h-bg">
                                                    <div class="h-bg-inner"></div>
                                                </div>
                                                <a class="cart" href="productdetailsample.php?Order_id=<?= $respro['Order_id'] ?>">
                                                    <span class="price"id="Price"><?= strip_tags(substr($respro['Price'], 0, 900)) ?> INR</span>
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
<!-- 
image start -->
<!-- <section>
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <div class="block1">
            <img src="https://www.pngplay.com/wp-content/uploads/7/Cristiano-Ronaldo-Transparent-Images.png" alt="" class="img-fluid img1">
            <div class="text-left">
              <span>Feel Like A Player</span>
              <h1 style="font-size:40px; font-weight:200px;">PROBALL 2019</h1>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
         <div class="block2">
            <img src="https://www.pngplay.com/wp-content/uploads/7/Cristiano-Ronaldo-Transparent-Images.png" alt="" class="img-fluid img2">
            <div class="text-right">
              <span>Feel Like A Player</span>
              <h1 style="font-size:40px; font-weight:200px;">PROBALL 2019</h1>
              <button class="btn "></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .block1 {
    background-color: grey;
    position: relative; /* Added position relative */
    color:black;
    font-weight:200;
    font-family: 'Oswald', sans-serif;

  }

  .img1 {
    height: 500px;
    width: 400px;
    padding: 10px;
  }

  .text-left {
    position: absolute; /* Added position absolute */
    top: 40%; /* Align to the top 50% of the parent */
    left: 80%; /* Align to the left 50% of the parent */
    transform: translate(-50%, -50%); /* Move the element back by 50% of its own dimensions */
  }
  .block2{
    background-color: black;
    position: relative; /* Added position relative */
    color:white;
    font-weight:200;
    font-family: 'Oswald', sans-serif;

  }
  .text-right {
    position: absolute; /* Added position absolute */
    top: 40%; /* Align to the top 50% of the parent */
    left: 30%; /* Align to the left 50% of the parent */
    transform: translate(-50%, -50%); /* Move the element back by 50% of its own dimensions */
  }

  .img2{
    height: 500px;
    width: 400px;
    padding: 10px;
  }
</style> -->

</body>

</body>
</html>



<!-- image end -->
<!-- footer start -->
<?php include('footer.php') ?>
<!-- End Footer -->

<!-- footer end -->
</body>
</html>
