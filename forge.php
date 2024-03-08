<?php include("gymheader.php")?>
<?php include("gympageheader.php")?>
<body>
<!-- content -->
<section class="pt-10">
  <div class="container">
    <div class="row gx-5">
    <aside class="col-lg-6">
    <!-- Main Image -->
    <div class="border rounded-4 mb-3 d-flex justify-content-center" style="height:60vh; width:650px;">
        <!-- Main Image Link -->
        <a id="mainImageLink" data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="#">
            <img id="mainImage" style="width: 100%; height: 100%; margin: auto;" class="rounded-4 fit" src="./GYm/assets/img/forge1.jpeg" />
        </a>
    </div>

    <!-- Thumbnail Images -->
    <div class="d-flex justify-content-center mb-3">
        <!-- Thumbnail Image Links -->
        <a onclick="changeMainImage('./GYm/assets/img/forge1.jpeg'); return false;">
            <img width="60" height="60" class="rounded-2" src="./GYm/assets/img/forge1.jpeg" />
        </a>
        <a onclick="changeMainImage('./GYm/assets/img/forge2.jpeg'); return false;">
            <img width="60" height="60" class="rounded-2" src="./GYm/assets/img/forge2.jpeg" />
        </a>
        <a onclick="changeMainImage('./GYm/assets/img/forge3.jpeg'); return false;">
            <img width="60" height="60" class="rounded-2" src="./GYm/assets/img/forge3.jpeg" />
        </a onclick=>
        <a onclick="changeMainImage('./GYm/assets/img/forge4.jpeg'); return false;">
            <img width="60" height="60" class="rounded-2" src="./GYm/assets/img/forge4.jpeg" />
        </a>
        <!-- Add more thumbnail links as needed -->
    </div>
    <!-- thumbs-wrap.// -->
    <!-- gallery-wrap .end// -->
</aside>

<script>
    // JavaScript function to change the main image
    function changeMainImage(imageSrc) {
        document.getElementById('mainImage').src = imageSrc;
        document.getElementById('mainImageLink').href = imageSrc; // Update the href as well
    }
</script>
      <main class="col-lg-6">
        <div class="ps-lg-3">
        <div class="gymname">  
            <h2 class="title ">
               <b>Forge Fitness Club Kolhapur</b>
            </h2> 
            
        </div><br>
        <div class="gymdese"> <p style="font-size:19px; font-family:'Arial';">
              The Forge Fitness Club, Kolhapur is stocked with world-class equipment from leading manufacturers such as Life Fitness and Hammer Strength. We are focused on giving our members the best value for their money. That means equipment and workout space that is clean, safe, comfortable, and close to home.. 
               We provides the top quality cardio, free weight, and strength training that need to get the shape at an affordable price.
            </p>
        </div>
         
          <hr />
          <form action="">
          <label>name</label>
          <label>email</label>
          <label>phone number</label>
          </form>
          
          <br><br>
          </div>
      </main>
    </div>
  </div>
</section>
<!-- content -->

<!-- Footer -->

<!-- Footer -->


    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>

