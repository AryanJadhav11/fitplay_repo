<?php include("header.php");?>



<head>
  <title>FitPlay-Turfs</title>
</head>
<body>

  <div id="hero-carousel" class="carousel slide  carousel-fade" data-bs-ride="carousel" style="margin-bottom:10px;">
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
</div>



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


<section class="m-100">
    <div class="container ">
              <div class="row">
<!-- <div class="container m-4 p-4" style="background-color:white; border-radius:10px;" > -->
       <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <?php 
                    if($row2) {
                        // Reset data seek pointer
                        mysqli_data_seek($que2, 0);

                        while($res8 = mysqli_fetch_assoc($que2)) {
                    ?>
                            <li class="splide__slide col-sm-3 m-2">
                                <div class="card bg-light text-dark imager-fluid">
                                    <a href="single_post.php?id=<?= $res8['id'] ?>">
                                        <?php $img = $res8['image'] ?>
                                        <img src="upload/<?= $img ?>" alt="" style="height:180px; width:100%; border-radius: 5px 5px 0px 0px;">
                                    </a>
                                    <div class="card-body" style="padding-left:10px;">
                                        <h5 class="card-title"><a href="single_post.php?id=<?= $res8['id'] ?>" id="title"><?= ucfirst($res8['name']) ?></a></h5>
                                        <p  class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:5px;" class="bi bi-geo-alt-fill " viewBox="0 0 16 16">
                                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                  </svg><?= strip_tags(substr($res8['place'], 0, 900)) ?></p>
                                        <a href="final.php?id=<?= $res8['id'] ?>" class="btn btn-primary">Book Now</a>
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
</div>
</section>

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
<style>
  .product-wrapper, .product-img{overflow: hidden;position: relative}.mb-45{margin-bottom: 45px}.product-action{bottom: 0px;left: 0;opacity: 0;position: absolute;right: 0;text-align: center;transition: all 0.6s ease 0s}.product-wrapper{border-radius: 10px}.product-img >span{background-color: #fff;box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);color: #333;display: inline-block;font-size: 12px;font-weight: 500;left: 20px;letter-spacing: 1px;padding: 3px 12px;position: absolute;text-align: center;text-transform: uppercase;top: 20px}.product-action-style{background-color: #fff;box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);display: inline-block;padding: 16px 2px 12px}.product-action-style >a{color: #979797;line-height: 1;padding: 0 21px;position: relative}.product-action-style >a.action-plus{font-size: 18px}.product-wrapper:hover .product-action{bottom: 20px;opacity: 1}
</style>
<h2 class="text-center"><b>WATCH SOME PRODUCTS</b></h2>
<div class="container d-flex justify-content-center mt-100">	<div class="row"> <div class="col-md-3"> <div class="product-wrapper mb-45 text-center"> <div class="product-img"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/tL7ZE46.jpg" alt=""> </a>	<span class="text-center"><i class="fa fa-rupee"></i> 43,000</span> <div class="product-action"> <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> <a href="#"> <i class="fa fa-heart"></i> </a> <a href="#"> <i class="fa fa-shopping-cart"></i> </a> </div> </div> </div> </div> </div> <div class="col-md-3"> <div class="product-wrapper mb-45 text-center"> <div class="product-img"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/lAQxXCK.jpg" alt=""> </a>	<span><i class="fa fa-rupee"></i> 41,000</span> <div class="product-action"> <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i> </a> </div> </div> </div> </div> </div>	<div class="col-md-3"> <div class="product-wrapper mb-45 text-center"> <div class="product-img"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/HxEEu5g.jpg" alt=""> </a>	<span><i class="fa fa-rupee"></i> 33,000</span> <div class="product-action"> <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i> </a> </div> </div> </div> </div> </div>	<div class="col-md-3"> <div class="product-wrapper mb-45 text-center"> <div class="product-img"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/lAQxXCK.jpg" alt=""> </a>	<span><i class="fa fa-rupee"></i> 23,000</span> <div class="product-action"> <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i> </a> </div> </div> </div> </div> </div> </div>	</div>
<!-- shop end -->

  




    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


   <!-- footer start -->
<?php include('footer.php') ?>
<!-- End Footer -->

</body>

</html>
