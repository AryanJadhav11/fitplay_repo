<?php include("headerai.php");?>
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

<body style="background-color:#;color:#034f84;">

<!-- just new design start -->
<!-- <section class="block mt-5"> 
<div class="container">
<div class="row">
  <div class="col-lg-6">
    <h1 class="hello"><b>Best In Style Colloction For You</b></h1>
    <span style="font-family: 'Oswald', sans-serif; color: #91C8E4;text-decoration-line: underline; text-decoration-color: yellow;  text-decoration-thickness: 3px;text-underline-offset: 6px; font-size:20px;">We craft the,we wont say the best <br>But through 70 years of experience in the industry</span>
    <br>
    <br>
    <button class="btn" style="border-radius:50px;color:white;background-color:black;width:200px;">ORDER NOW</button>
    <br>
    <br>
<br>
    <h4 style="color:#146C94;"><b>Toe Comfort</b></h4>
    <h2 style="color:#146C94;"><b>FAST RUNNING</b></h2>
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

</section>

<style>


.hello{
    font-size: 3rem;
    color: black;
    font-family: 'Oswald', sans-serif;
    font-weight: 400;
    color:#034f84;
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
</style> -->

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
  --blue-card: #041562;
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
  width: 300px;
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
  justify-content:center;
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
@media screen and (max-width: 1200px) {
        .boot-card {
            width: 250px;
            height: 400px;
        }
    }

    @media screen and (max-width: 992px) {
        .boot-container {
            flex-direction: column;
        }

        .boot-card {
            margin-bottom: 2rem;
        }
    }

    @media screen and (max-width: 768px) {
    .boot-card {
        width: 100%;
        margin: 0 10px; /* Adjust the horizontal margin as needed */
        margin-bottom: 40px; /* Adjust the bottom margin as needed */
    }
}

</style>
<!-- effect end -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>


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