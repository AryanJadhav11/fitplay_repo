
<head>
  <title>FitPlay-Turfs</title>
</head>
<body style="background-color:white">
<?php include("header.php");?>

<style>
  
.col-xxl-8 {
    flex: 0 0 auto;
    width:80%;
}
body
{
  background:white;
}
/*card css */
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

 <div class="overflow-hidden">
        <div class="container-fluid col-xxl-8" >
            <div class="row flex-lg-nowrap align-items-center g-5">
                <div class="order-lg-1 w-100">
                    <img style="clip-path: polygon(25% 0%, 100% 0%, 100% 99%, 0% 100%);" src="https://images.unsplash.com/photo-1618004912476-29818d81ae2e?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NzV8fHB1cnBsZXxlbnwwfDB8fHwxNjQ3NDcxNjY4&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=768" class="d-block mx-lg-auto img-fluid" alt="Photo by Milad Fakurian" loading="lazy" srcset="men_football.jpg">
                </div>
                <div class="col-lg-6 col-xl-5 text-center text-lg-start pt-lg-5 mt-xl-4">
                    <div class="lc-block mb-4">
                        <div editable="rich">
                            <h1 class="fw-bold display-3">One More Time One More Game</h1>
                        </div>
                    </div>

                    <div class="lc-block mb-5">
                        <div editable="rich">
                            <p class="rfs-8">Experience the ultimate in convenience and excitement with our online turf booking platform at FitPlay! Elevate your sports experience by effortlessly securing your playing field, right from the comfort of your fingertips. Unleash the joy of hassle-free reservations and score your spot to kick off convenience.</p>
                        </div>
                    </div>

                    <div class="lc-block mb-6"><a class="btn btn-primary px-4 me-md-2 btn-lg" href="#tuu" role="button">Explore Turfs</a>
                    </div>

                    <!-- <div class="lc-block">
                        <div editable="rich">
                            <p class="fw-bold">Collaborations With:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="lc-block col-3"><img class="img-fluid wp-image-975" src="https://lclibrary.b-cdn.net/starters/wp-content/uploads/sites/15/2021/11/motorola.svg" width="" height="300" srcset="" sizes="" alt=""></div>
                        <div class="lc-block col-3"><img class="img-fluid wp-image-977" src="https://lclibrary.b-cdn.net/starters/wp-content/uploads/sites/15/2021/11/asus.svg" width="" height="300" srcset="" sizes="" alt=""></div>
                        <div class="lc-block col-3"><img class="img-fluid wp-image-974" src="https://lclibrary.b-cdn.net/starters/wp-content/uploads/sites/15/2021/11/sony.svg" width="" height="300" srcset="" sizes="" alt=""></div>
                        <div class="lc-block col-3"><img class="img-fluid wp-image-967" src="https://lclibrary.b-cdn.net/starters/wp-content/uploads/sites/15/2021/11/samsung-282297.svg" width="" height="300" srcset="" sizes="" alt=""></div>
                    </div> -->
                </div>

            </div><!-- /lc-block -->
        </div>
    </div>



    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- video end -->

<!-- carousel start -->
  <!-- <div id="hero-carousel" class="carousel slide  carousel-fade" data-bs-ride="carousel" style="margin-bottom:10px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active c-item">
      <img src="footc1.jpeg" class="d-block w-100 c-img" alt="..." style="height:100vh">
      <div class="carousel-caption top-0 mt-4 ">
        <p class="mt-5 fs-3 text-uppercase">Book your turf online effortlessly and secure your playing field.</p>
        <h1 class="display-1 fw-bolder text-capitalize">Score Your Spot</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Book Now</button>
      </div>
    </div>

    <div class="carousel-item c-item">
      <img src="full-shot-couch-training-kids.jpg" class="d-block w-100 c-img" alt="..." style="height:100vh">
      <div class="carousel-caption top-0 mt-4 ">
        <p class="mt-5 fs-3 text-uppercase"> Experience the joy of hassle-free reservations for your soccer matches.</p>
        <h1 class="display-1 fw-bolder text-capitalize">Kick Off Convenience</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Explore Top Turfs</button>
      </div>
    </div>

    <div class="carousel-item c-item">
      <img src="full-shot-women-playing-football.jpg" class="d-block w-100 c-img" alt="..." style="height:100vh">
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
</div> -->
<!-- carousel end  -->


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "turf";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql2="SELECT * FROM `grd` ORDER BY grd.pubdate DESC; ";
$que2=mysqli_query($conn,$sql2);
$row2=mysqli_num_rows($que2);
$resimg=mysqli_fetch_assoc($que2);


?>

<!--card carousel to show turfs-->

<!-- Add Splide CSS -->
<!-- Add Splide CSS -->
<!-- Add Splide CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">


<body class="py-5 pb-0" style="background-color: #f8f9fa;">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class="fea">Featured <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">

<div id="productCarousel" class="carousel slide" data-bs-ride="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <?php 
                if($row2) {
                    // Reset data seek pointer
                    mysqli_data_seek($que2, 0);
                    $count = 0;
                    while($row2 = mysqli_fetch_assoc($que2)) {
                        if ($count % 4 == 0 && $count != 0) {
                            echo '</div></div><div class="carousel-item"><div class="row">';
                        }
                ?>
                <div class="col-md-3 p-5">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <?php 
                            $imgSrc = "upload/{$row2['image']}";
                            
                            ?>
                            <img src="<?= $imgSrc ?>" class="img-fluid" style="height: 200px;" alt="Product Image">
                        </div>
                        <div class="thumb-content pt-3">
                            <h4><?= ucfirst($row2['name']) ?></h4>
                            <div class="star-rating">
                                <ul class="list-inline">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:5px;" class="bi bi-geo-alt-fill " viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                                </svg><?= ucfirst($row2['place']) ?>
                                </ul>
                            </div>
                            <h3 class="item-price">₹<?= strip_tags(substr($row2['price'], 0, 900)) ?> INR</h3>
                            <a href="turf_df.php?id=<?= $row2['id'] ?>" class="btn btn-primary">Book Now</a>
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


<div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="col-12 text-center mb-4">
                        <h2 class="explore-turfs-text">Our Top Turf Partners</h2>
                    </div>

                <div class="lc-block">
                    <div id="carouselLogos" class="carousel slide pt-5 pb-4" data-bs-ride="carousel">

                        <div class="carousel-inner px-5">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="d-block w-100 px-3 mb-3" src="https://cdn.livecanvas.com/media/logos/11.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/2.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/3.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/12.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/5.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/6.png" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="d-block w-100 px-3 mb-3" src="https://cdn.livecanvas.com/media/logos/11.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/2.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/3.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/12.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/5.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/6.png" alt="">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--
	<ol class="carousel-indicators list-unstyled position-relative mt-3">
		<li data-bs-target="#carouselLogos" data-bs-slide-to="0" class="active bg-dark carousel-control-prev-icon"></li>
		<li data-bs-target="#carouselLogos" data-bs-slide-to="1" class="bg-dark"></li>
	</ol>
	-->

                        <div class="w-100 px-3 text-center mt-4 ">
                            <a class="carousel-control-prev position-relative d-inline me-4 p-1" href="#carouselLogos" data-bs-slide="prev">
                                <svg width="2em" height="2em" viewBox="0 0 16 16"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                </svg>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next position-relative d-inline me-4 p-1" href="#carouselLogos" data-bs-slide="next">
                                <svg width="2em" height="2em" viewBox="0 0 16 16"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                </svg>
                                <span class="visually-hidden">Next</span>
                            </a>





                        </div>


                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>
    </div></div></div></div></div>
<section>
    <div >
    <img src="one.png" width="100%">
</div>
</section>
 


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
                                                    <img class="img-fluid rounded-circle " src="./sankya1.jpg" width="72px" height="72px">
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
                                                    <img class="img-fluid rounded-circle " src="./parth.jpg"width="72px" height="72px">
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
                                                    <p><em class="rfs-8 text-muted">Easy turf bookings, extensive gym options, and a shop with high-value fitness gear. Exceptional service and convenience. Highly satisfied with my experience.</em></p>
                                                </div>
                                            </div>
                                            <div class="lc-block d-inline-flex">
                                                <div class="lc-block me-3" style="min-width:72px">
                                                    <img class="img-fluid rounded-circle " src="./adya.jpg"width="72px" height="72px">
                                                </div>
                                                <div class="lc-block">
                                                    <div editable="rich">

                                                        <p class="h5">Aditya Deshmuk</p>

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
                        <a class="carousel-control-next position-relative d-inline me-4 p-2" href="#carouselTestimonialCards" data-bs-slide="next">
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



    <!-- <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
</body> -->


<!-- Add Splide JS -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var splide = new Splide('.splide', {
            perPage: 4,
            breakpoints: {
                600: {
                    perPage: 1
                }
            }
        });

        splide.mount();
    });
</script>
<!-- shop start -->

<!-- card css start -->
<style>
    .article-card {
  width: 280px;
  height: 220px;
  border-radius: 12px;
  overflow: hidden;
  position: relative;
  font-family: Arial, Helvetica, sans-serif;
  transition: all; 
}

.article-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}

.article-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.article-card .content {
  box-sizing: border-box;
  width: 100%;
  position: absolute;
  padding: 30px 20px 20px 20px;
  height: auto;
  bottom: 0;
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.6));
}

.article-card .date,
.article-card .title {
  margin: 0;
}

.article-card .date {
  font-size: 16px;
  color:white;
  margin-bottom: 2px;
  align-self:center;
}

.article-card .title {
  font-size: 20px;
  color: white;
}

</style>
<!-- card css end -->

<!-- shop end -->


    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

 <!-- moodel start -->
 <div class="mobile-modal">
  <div class="mobile-modal-content">
    <h2>Website is Under Construction</h2>
    <img src="52530.jpg" alt="Mobile Image" style="max-width: 100%; height: 50%;margin:10px;">
    <p>Sorry, this website is under construction and be available on mobile devices soon...</p>
  </div>
  <style>
     /* Media query for mobile devices */
  @media only screen and (max-width: 600px) {
    /* Styling for the modal */
    .mobile-modal {
      display: block;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
      text-align: center;
    }

    .mobile-modal-content {
      background-color: #fff;
      max-width: 80%;
      margin: 10% auto;
      padding: 20px;
      border-radius: 8px;
    }
    .ok-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
}
  </style>
  <!-- modal end -->
</div>
   <!-- footer start -->
<?php include('footer.php') ?>
<!-- End Footer -->
</body>
</html>



