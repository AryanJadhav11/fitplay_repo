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

<head>
<title>FitPlay - Shop</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

  <!-- Add Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

<!-- Add Font Awesome CSS -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

<!-- Add jQuery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<!-- Add Bootstrap JS -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<div class="py-2">
    <img src="proimg/banner_shopp1710012199.jpg" width="100%">
</div>

</head>

<body style="background-color:#F9F9F9">

<!-- just new design start -->
<!-- <section class="block mt-5"> 
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
    <img src="proimg/stud1-removebg-preview.png" alt="" class="imgcss img-fluid">
    <br>
    <br>
    <br>
    <h3 style="font-size: 6rem;font-weight: boldtext-shadow: 0 0 0.2em yellow;color: white;position:absolute;left:300px;top:400px; -webkit-text-stroke: 1px yellow;-webkit-text-fill-color: transparent;font-weight:400;">₹899</h3>
  </div>
</div>
</div>

</section> -->






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

<!-- effect start -->
<main class="boot-container">
  <div class="row">
    <div class="col-lg-4">
    <section class="boot-card">
    <div class="boot-product-image">
      <img src="https://i.ibb.co/cNWqxGx/red.png" alt="OFF-white Red Edition" draggable="false" />
    </div>
    <div class="boot-product-info">
      <h2>Nike X OFF-white</h2>
      <p>The 10: Air Jordan 1 off-white - Chicago</p>
      <div class="boot-price">$999</div>
    </div>
    <div class="boot-btn boot-button">
      <button class="boot-buy-btn">Buy Now</button>
      <button class="boot-fav">
        <svg class="boot-svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
        </svg>
      </button>
    </div>
  </section>
    </div>
    <div class="col-lg-4">
    <section class="boot-card boot-card-blue">
    <div class="boot-product-image">
      <img src="https://i.ibb.co/0JKpmgd/blue.png" alt="OFF-white Blue Edition" draggable="false" />
    </div>
    <div class="boot-product-info">
      <h2>Nike X OFF-white</h2>
      <p>Air Jordan 1 Retro High "Off-White - UNC" sneakers</p>
      <div class="boot-price">$1599</div>
    </div>
    <div class="boot-btn boot-button">
      <button class="boot-buy-btn">Buy Now</button>
      <button class="boot-fav">
        <svg class="boot-svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
        </svg>
      </button>
    </div>
  </section>
    </div>
    <div class="col-lg-4">
    <section class="boot-card">
    <div class="boot-product-image">
      <img src="https://i.ibb.co/cNWqxGx/red.png" alt="OFF-white Red Edition" draggable="false" />
    </div>
    <div class="boot-product-info">
      <h2>Nike X OFF-white</h2>
      <p>The 10: Air Jordan 1 off-white - Chicago</p>
      <div class="boot-price">$999</div>
    </div>
    <div class="boot-btn boot-button">
      <button class="boot-buy-btn">Buy Now</button>
      <button class="boot-fav">
        <svg class="boot-svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
        </svg>
      </button>
    </div>
  </section>
    </div>
  </div>
 
  
 
  
</main>
<style>
  /*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

/*===== VARIABLES CSS =====*/
:root {
  --dark-color-lighten: #f2f5ff;
  --red-card: #a62121;
  --blue-card: #4bb7e6;
  --btn: #141414;
  --btn-hover: #3a3a3a;
  --text: #fbf7f7;
}

/*===== RESET =====*/
*,
::before,
::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

button {
  font-family: "Montserrat", sans-serif;
  display: inline-block;
  border: none;
  outline: none;
  border-radius: 0.2rem;
  color: var(--text);
  cursor: pointer;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: 100%;
  user-select: none;
}

/*===== CARD =====*/
.boot-container {
  height: 100%;
  width: 100%;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
}
.boot-card {
  position: relative;
  padding: 1rem;
  width: 350px;
  height: 450px;
  box-shadow: -1px 15px 30px -12px rgb(32, 32, 32);
  border-radius: 0.9rem;
  background-color: var(--red-card);
  color: var(--text);
  cursor: pointer;
}

.boot-card-blue {
  background: var(--blue-card);
}

.boot-product-image {
  height: 230px;
  width: 100%;
  transform: translate(0, -1.5rem);
  transition: transform 500ms ease-in-out;
  filter: drop-shadow(5px 10px 15px rgba(8, 9, 13, 0.4));
}
.boot-product-info {
  text-align: center;
}

.boot-card:hover .boot-product-image {
  transform: translate(-0.5rem, -3rem) rotate(-10deg);
}

.boot-product-info h2 {
  font-size: 1.4rem;
  font-weight: 600;
}
.boot-product-info p {
  margin: 0.4rem;
  font-size: 0.8rem;
  font-weight: 600;
}
.boot-price {
  font-size: 1.2rem;
  font-weight: 500;
}
.boot-btn {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  margin-top: 0.8rem;
}
.boot-buy-btn {
  background-color: var(--btn);
  padding: 0.6rem 3.5rem;
  font-weight: 600;
  font-size: 1rem;
  transition: 300ms ease;
}
.boot-buy-btn:hover {
  background-color: var(--btn-hover);
}
.boot-fav {
  box-sizing: border-box;
  background: #fff;
  padding: 0.5rem 0.5rem;
  border: 1px solid#000;
  display: grid;
  place-items: center;
}

.boot-svg {
  height: 25px;
  width: 25px;
  fill: #fff;
  transition: all 500ms ease;
}

.boot-fav:hover .boot-svg {
  fill: #000;
}

@media screen and (max-width: 800px) {
  body {
    height: auto;
  }
  .boot-container {
    padding: 2rem 0;
    width: 100%;
    flex-direction: column;
    gap: 3rem;
  }
}

</style>
<!-- effect end -->
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

                        <h2 class="display-6 fw-bold">Unlock Your Potential: Shop Premium Sports Equipment Here</h2>

                        <p class="lead"><br>Discover top-notch sports equipment to elevate your game. From expert guidance to competitive prices, we've got you covered. Shop online or visit us for an exceptional experience..</p>
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
                            <p>Convenient Shopping.</p>
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

                        <h2 class="display-6 fw-bold">Gear Up for Greatness: Your Ultimate Sports Store</h2>

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
    </div> -->

    <-- product slider css -->
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

<!-- boots  start  -->
<section class="product-section">
  <div class="product-grid">
    <div class="card">
      <div class="card-pill">
        Sale
      </div>
      <img class="card-img" src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/fxfibkkiiiky07goauq6/sb-nyjah-free-skate-shoe-oKwn7N.jpg" alt="product-image">
      <div class="flex-row space-between w-full mb-sm">
        <p class="product-brand">Nike SB</p>
        <p class="product-cat hide">Skateboarding</p>
      </div>
      <h1 class="product-name">Nyjah Free 2</h1>
      <div class="flex-row">
        <p class="price strike">$<span>94.95</span></p>
        <p class="price">$<span>79.95</span></p>
      </div>
      <div class="btn-col">
        <a href="#" class="icon-link">
          Purchase
          <svg fill="none" class="rubicons arrow-right-up" xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path d="M17.9645 12.9645l.071-7h-7.071" stroke-linecap="round"></path>
            <path d="M5.9645 17.9645l12-12" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-pill hide">
        Sale
      </div>
      <img class="card-img" src="https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/c15bdccf-e742-4ad2-9110-e50940765f66/sb-charge-canvas-skate-shoe-80KN54.jpg" alt="product-image">
      <div class="flex-row space-between w-full mb-sm">
        <p class="product-brand">Nike SB</p>
        <p class="product-cat hide">Skateboarding</p>
      </div>
      <h1 class="product-name">Charge Canvas</h1>
      <div class="flex-row">
        <p class="price strike hide">$<span>94.95</span></p>
        <p class="price">$<span>65</span></p>
      </div>
      <div class="btn-col">
        <a href="#" class="icon-link">
          Purchase
          <svg fill="none" class="rubicons arrow-right-up" xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path d="M17.9645 12.9645l.071-7h-7.071" stroke-linecap="round"></path>
            <path d="M5.9645 17.9645l12-12" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-pill hide">
        Sale
      </div>
      <img class="card-img" src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/8968297e-7aa4-447b-88e9-d79ba90b6fc3/sb-shane-skate-shoe-m56jq0.jpg" alt="product-image">
      <div class="flex-row space-between w-full mb-sm">
        <p class="product-brand">Nike SB</p>
        <p class="product-cat hide">Skateboarding</p>
      </div>
      <h1 class="product-name">Shane O'Neill</h1>
      <div class="flex-row">
        <p class="price strike hide">$<span>94.95</span></p>
        <p class="price">$<span>80</span></p>
      </div>
      <div class="btn-col">
        <a href="#" class="icon-link">
          Purchase
          <svg fill="none" class="rubicons arrow-right-up" xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path d="M17.9645 12.9645l.071-7h-7.071" stroke-linecap="round"></path>
            <path d="M5.9645 17.9645l12-12" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-pill hide">
        Sale
      </div>
      <img class="card-img" src="https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/3db0b166-c4c0-4321-9ef4-800314582af3/sb-blzr-court-skate-shoe-R6bVLk.jpg" alt="product-image">
      <div class="flex-row space-between w-full mb-sm">
        <p class="product-brand">Nike SB</p>
        <p class="product-cat hide">Skateboarding</p>
      </div>
      <h1 class="product-name">BLZR Court</h1>
      <div class="flex-row">
        <p class="price strike hide">$<span>94.95</span></p>
        <p class="price">$<span>65</span></p>
      </div>
      <div class="btn-col">
        <a href="#" class="icon-link">
          Purchase
          <svg fill="none" class="rubicons arrow-right-up" xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path d="M17.9645 12.9645l.071-7h-7.071" stroke-linecap="round"></path>
            <path d="M5.9645 17.9645l12-12" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<style>

.product-section {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 120px 4%;
}

.product-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 24px;
  width: 100%;
  max-width: 840px;
  margin: 0 auto;
  justify-items: center;
}

.card {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: start;
  position: relative;
  padding: 24px;
  background: #fff;
  border-radius: 0;
  width: 100%;
  max-width: 420px;
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

.card-pill {
  position: absolute;
  padding: 6px 12px;
  border-radius: 0;
  color: #fff;
  background: #000;
  right: 0;
  top: 0;
  margin-right: 32px;
  margin-top: 32px;
  line-height: 1;
  font-size: 14px;
  font-weight: 700;
}

.card-img {
  display: block;
  width: 100%;
  max-height: 320px;
  object-fit: cover;
  margin-bottom: 16px;
}

.product-brand {
  font-size: 12px;
  line-height: 1;
  margin-top: 12px;
  margin-bottom: 0;
  color: #646464;
}

.product-cat {
  font-size: 12px;
  line-height: 1;
  margin-top: 12px;
  margin-bottom: 0;
  color: #646464;
  background: #f5f5f5;
  padding: 6px 12px;
  border-radius: 0;
}

.product-name {
  font-size: 1.7rem;
  line-height: 1;
  margin-bottom: 6px;
  margin-top: 0;
  color: #000;
}

.flex-row {
  display: flex;
  justify-content: start;
  align-items: center;
}

.space-between {
  justify-content: space-between;
}

.w-full {
  width: 100%;
}

.mb-sm {
  margin-bottom: 8px;
}

.price {
  margin-right: 12px;
}

.strike {
  text-decoration: line-through;
  opacity: 0.4;
}

.btn-col {
  width: 100%;
  margin-top: 24px;
}

.icon-link {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  color: #fff;
  background: #000;
  padding: 1.4em 0;
  border-radius: 0;
  transition: background 0.3s ease;
  text-decoration: none;
  line-height: 1;
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.rubicons {
  width: 24px;
  margin-left: 8px;
  transition: transform 0.3s ease;
}

.icon-link:hover {
  background: #333;
}

.icon-link:hover > .rubicons {
  transform: translate(3px, -3px);
}

.hide {
  display: none;
}

@media screen and (min-width: 640px) {
  .product-grid {
    grid-template-columns: 1fr 1fr;
  }
}

</style>
<!-- boots end -->





<!-- 
image start -->
<section>
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
          <div class="block1">
            <img src="https://www.pngplay.com/wp-content/uploads/7/Cristiano-Ronaldo-Transparent-Images.png" alt="" class="img-fluid img1">
            <div class="text-left">
              <span >Feel Like A Player</span>
              <h1 style="font-size:40px; font-weight:200px;">PROBALL 2019</h1>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex">
          <div class="d-lg-flex">
          <div class=" block2">
              <span style=" padding-top:100
              px; padding-left:20px;">Feel Like A Player</span>
              <h1 style="font-size:40px; padding-top:135px; padding-left:20px;">PROBALL 2019</h1>
          </div>
          <div class="block2">
          <img src="https://www.pngplay.com/wp-content/uploads/7/Cristiano-Ronaldo-Transparent-Images.png" alt="" class="img-fluid img2">
          </div>
          </div>
        </div>
        

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
    left: 60%; /* Align to the left 50% of the parent */
    transform: translate(-50%, -50%); /* Move the element back by 50% of its own dimensions */
  }

  .img2{
    height: 500px;
    width: 400px;
    padding: 10px;
    display: block;
  margin-left: auto;
  margin-right: auto;
  }
</style>

</body>

</body>
</html>



<!-- image end -->
<!-- footer start -->
<?php include('footer.php') ?>
<!-- End Footer -->

</body>
</html>