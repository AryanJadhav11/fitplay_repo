<?php include("header.php");?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mg";

$conp = new mysqli($servername, $username, $password, $dbname);
$sqlpro="SELECT * FROM `user_orders` ORDER BY user_orders.pubdate DESC; ";
$quepro=mysqli_query($conp,$sqlpro);
$rowpro=mysqli_num_rows($quepro);
$respic=mysqli_fetch_assoc($quepro);


?>

<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitplay_users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<body>
    <!-- product container -->
      <div class="container m-4 p-4" style="background-color:white; border-radius:10px;" >
    <div class="row">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <?php 
                    if($rowpro) {
                        // Reset data seek pointer
                        mysqli_data_seek($quepro, 0);

                        while($respro = mysqli_fetch_assoc($quepro)) {
                    ?>
                            <li class="splide__slide col-sm-3 m-2">
                                <div class="card bg-light text-dark imager-fluid">
                                    <a href="all_product.php?id=<?= $respro['Order_id'] ?>">
                                        <?php $img = $respro['pic'] ?>
                                        <img src="upload/<?= $img ?>" alt="" style="height:180px; width:100%; border-radius: 5px 5px 0px 0px;">
                                    </a>
                                    <div class="card-body" style="padding-left:10px;">
                                        <h5 class="card-title"><a href="all_product.php?id=<?= $respro['Order_id'] ?>" id="title"><?= ucfirst($respro['item_name']) ?></a></h5>
                                        <p  class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:5px;" class="bi bi-geo-alt-fill " viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg><?= strip_tags(substr($respro['Price'], 0, 900)) ?></p>
                                        <a href="all_product.php?id=<?= $res8['Order_id'] ?>" class="btn btn-primary">View Product</a>
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
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
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
    <!-- ======= Clients Section ======= -->



  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <section style="background-color:#F9F9F9">
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
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2125.6897847171444!2d74.2143666701516!3d16.693163579668703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1704986406573!5m2!1sen!2sin"
              width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>

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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Book Turfs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Explore Gym</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Shop Products</a></li>

            </ul>
          </div>



          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Welcome to the heart of our vibrant community! Follow us on our social networks to stay connected with
              the latest in fitness trends, exciting events, exclusive promotions, and inspiring stories from our
              community members.</p>
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
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </section>
  <!-- End Footer -->


  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>