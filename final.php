<?php include("header.php");?>
<?php
$server='localhost';
$user='root';
$db='turf';
$pass='';

$coni=mysqli_connect($server,$user,$pass,$db);

if(!$coni)
{
 die(mysqli_error($coni));
}

if(isset($_GET['id']))
{
   $blid=$_GET['id'];
   $sql9="SELECT * FROM `grd` WHERE id='$blid';";
   $res9=mysqli_query($coni,$sql9);
   $row9=mysqli_fetch_assoc($res9);
  
}
$start_time_12hr = date("h:i A", strtotime($row9['start']));
$end_time_12hr = date("h:i A", strtotime($row9['end']));
?>



<body>
  <!-- carosal start  -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1>
          <?= ucfirst($row9['name']) ?>
        </h1>
        <h3>
          <?= ucfirst($row9['place']) ?>
        </h3>
        <h5>₹
          <?= ucfirst($row9['price']) ?>
        </h5>
      </div>
      <style>
        @media (max-width: 768px) {
          img {
            max-width: 100%;
            height: auto;
          }
        }

        @media (max-width: 576px) {
          img {
            max-width: 100%;
            height: auto;
          }
        }
      </style>
      <div class="row">
        <div class="col-lg-8">
          <div>
            <?php $imgi=$row9['image']?>
            <img src="upload/<?=$imgi?>" style="height:500px; width:700px ;border-radius:30px;">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="p-3"
            style="border-radius: 10px; background-color: rgb(217, 217, 217); box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
            <div class="text-center">
           <?php 
          if (isset($_SESSION['user_data'])) {
            echo '<a href="bookturf.php?id=' . $row9['id'] . '"><button class="btn h-60 bg-success text-white" style="margin-bottom: 10px; width: 320px; border-radius: 100px;"> BOOK NOW </button></a>';
        } else {
            echo '<button class="btn h-60 bg-success text-white" style="margin-bottom: 10px; width: 320px; border-radius: 100px;" data-bs-toggle="modal" data-bs-target="#chloginModal">Book Now</button>';
        }
        

            ?>
              <a href="bookturf.php?id=<?= $row9['id'] ?>">
                <button class="btn h-60 bg-success text-white"
                  style="margin-bottom: 10px; width: 320px; border-radius: 100px;">
                  BOOK NOW
                </button>
              </a>
            </div>



            <br>
            <br>
            <div class="border"
              style="border-radius: 10px; background-color: white; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
              <h4 style="padding-top: 10px; padding-left: 10px;"><b>Timing</b></h4>
              <p style="padding-left: 10px;"><b>From:
                  <?= $start_time_12hr; ?>
                </b></p>
              <p style="padding-left: 10px;"><b>To:
                  <?= $end_time_12hr; ?>
                </b></p>
            </div>
            <br>
            <div class="border"
              style="border-radius: 10px; background-color: white; height: 200px; width: 320px; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
              <div class="text-center">
                <?= ucfirst($row9['loc']) ?>
                <h1>hello sample aahe he bg he </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="border"
            style="border-radius: 10px; margin-top: 20px; background-color: rgb(217, 217, 217); box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
            <div class="" style="margin-top: 10px; border-radius: 10px;margin-bottom: 10px;">
              <div class="align-items-center justify-content-center">
                <button class=" btn btn-danger mt-3"
                  style="margin-left: 60px; margin-bottom: 10px; border-radius: 50px; width: 150px; height: 50px;">
                  <i class="fas fa-futbol" style="size: 50px;"></i>
                  Football
                </button>
                <button class="btn btn-danger mt-3"
                  style="margin-left: 60px; margin-bottom:10px; border-radius: 50px; width: 150px; height: 50px;">
                  <i class="fas fa-baseball-ball"></i> Cricket
                </button>
                <button class="btn btn-danger mt-3"
                  style="margin-left: 60px; margin-bottom:10px; border-radius: 50px; width: 150px; height: 50px;">
                  <i class="fas fa-baseball-ball"></i> Tennis
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="border"
            style="background-color:rgb(217, 217, 217) ;border-radius: 10px; margin: 30px; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
            <div class="border" style="background-color: white; border-radius: 10px; margin: 20px;">
              <h4 style="padding: 10px; padding-bottom: 0px;"><b>Description</b></h4>
              <p style="padding: 10px;">
                <?= ucfirst($row9['details']) ?>
              </p>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-8 border"
          style="border-radius: 10px; background-color:rgb(217, 217, 217); margin: 20px; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
          <div class="border" style="background-color: white; border-radius: 10px; margin: 10px;">
            <h4 class="p-2" style="font-size: x-large;"><b>Amenities</b></h4>
            <div class="p-2">
              <?php

                // Define the amenities array with all possible amenities
                  $amenities = array(
                    $row9['amenitiy1'],
                    $row9['amenitiy2'],
                    $row9['amenitiy3'],
                    $row9['amenitiy4']
                   );
                   $amenityPresent=false;
                                           

                  // Loop through each amenity
                  foreach ($amenities as $amenity) {
                    // Check if the amenity is present
                    if (!empty($amenity)) {
                        // Output the check icon and the amenity
                        echo '<div style="background-color: rgb(12, 208, 12); padding: 5px; display: inline-block; border-radius: 50%;"><i class="fas fa-check" style="color: white;"></i></div>';
                        echo '<span style="margin-left: 5px; margin-right: 10px;">' . ucfirst($amenity) . '</span>';
                        $amenityPresent=true;
                    }
                  }
                    
                  // Check if no amenity is present
                   if (!$amenityPresent) {
                      echo '<div style="background-color: red; padding: 5px; display: inline-block; border-radius: 50%;"><i class="fa fa-close" style="color: white;"></i></div>';
                      echo '<span style="margin-left: 5px; margin-right: 10px;">No Amenity</span>';
                    }
                ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  </div>



  </div>
  <br>
  <br>
  <br>
  <!-- carosal end -->

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BizLand<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
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
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  

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
