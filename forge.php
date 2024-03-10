<?php include("gymheader.php")?>
<?php include("gympageheader.php")?>
<body>
<!-- content -->
<section class="pt-7 pb-0">
  <div class="container">
    <div class="row gx-5">
    <aside class="col-lg-6">
    <div class="border rounded-4 mb-3 d-flex justify-content-center" style="height:60vh; width:650px; position: relative;">
        <!-- Main Image -->
        <a id="mainImageLink" data-fslightbox="mygallery" class="rounded-4"  data-type="image">
            <img id="mainImage" style="width: 100%; height: 100%; margin: auto;" class="rounded-4 fit" src="./GYm/assets/img/forgelogo.jpeg" alt="Main Image" />
        </a>
        <!-- Previous Button -->
        <a id="prevButton" class="prev" onclick="changeImage(-1)" style="position: absolute; color:white; text-decoration:none; top: 50%; left: 10px; transform: translateY(-50%); z-index: 1;">&#10094;</a>
        <!-- Next Button -->
        <a id="nextButton" class="next" onclick="changeImage(1)" style="position: absolute; color:white; text-decoration:none; top: 50%; right: 10px; transform: translateY(-50%); z-index: 1;">&#10095;</a>
    </div>

    <!-- Thumbnail Images -->
    <div class="d-flex justify-content-center mb-3">
        <!-- Thumbnail Links -->
        <a onclick="changeMainImage('./GYm/assets/img/forgelogo.jpeg'); return false;">
            <img width="60" height="50" class="rounded-2" src="./GYm/assets/img/forgelogo.jpeg" alt="Thumbnail 1" />
        </a>
        <a onclick="changeMainImage('./GYm/assets/img/forge1.jpeg'); return false;">
            <img width="60" height="50" class="rounded-2" src="./GYm/assets/img/forge1.jpeg" alt="Thumbnail 2" />
        </a>
        <a onclick="changeMainImage('./GYm/assets/img/forge2.jpeg'); return false;">
            <img width="60" height="50" class="rounded-2" src="./GYm/assets/img/forge2.jpeg" alt="Thumbnail 2" />
        </a>
        <a  onclick="changeMainImage('./GYm/assets/img/forge3.jpeg'); return false;">
            <img width="60" height="50" class="rounded-2" src="./GYm/assets/img/forge3.jpeg" alt="Thumbnail 2" />
        </a>
        <a  onclick="changeMainImage('./GYm/assets/img/forge4.jpeg'); return false;">
            <img width="60" height="50" class="rounded-2" src="./GYm/assets/img/forge4.jpeg" alt="Thumbnail 2" />
        </a>
    </div>
    <div class="container m-0 p-0" style="background-color:rgb(30,34,38); height:200px; width:100%;">
      <div class="features_head m-0 p-0 d-flex justify-content-center align-items-center" style="background-color:rgb(19,20,21); height: 50px; width:100%;">
          <h3>Features</h3>
      </div>

    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</aside>
<script>
    var currentImageIndex = 0;
    var images = ['./GYm/assets/img/forgelogo.jpeg', './GYm/assets/img/forge1.jpeg', './GYm/assets/img/forge2.jpeg', './GYm/assets/img/forge3.jpeg', './GYm/assets/img/forge4.jpeg'];

    function changeMainImage(imageSrc) {
        document.getElementById('mainImage').src = imageSrc;
        // document.getElementById('mainImageLink').href = imageSrc;
        currentImageIndex = images.indexOf(imageSrc);
        updateButtons();
    }

    function changeImage(step) {
        currentImageIndex += step;
        if (currentImageIndex < 0) {
            currentImageIndex = images.length - 1;
        } else if (currentImageIndex >= images.length) {
            currentImageIndex = 0;
        }
        document.getElementById('mainImage').src = images[currentImageIndex];
        // document.getElementById('mainImageLink').href = images[currentImageIndex];
        updateButtons();
    }

    function updateButtons() {
        document.getElementById('prevButton').style.display = currentImageIndex === 0 ? 'none' : 'block';
        document.getElementById('nextButton').style.display = currentImageIndex === images.length - 1 ? 'none' : 'block';
    }
</script>


    
    <main class="col-lg-6">
        <div class="ps-lg-3">
            <div>
                <div class="gymname">  
                    <h2 class="title ">
                    <b>Forge Fitness Club Kolhapur</b>
                    </h2> 
            
                </div>
            </div>
                <br>
            <div class="gymdese"> <p style="font-size:19px; font-family:'Arial';">
              The Forge Fitness Club, Kolhapur is stocked with world-class equipment from leading manufacturers such as Life Fitness and Hammer Strength. We are focused on giving our members the best value for their money. That means equipment and workout space that is clean, safe, comfortable, and close to home.. 
               We provides the top quality cardio, free weight, and strength training that need to get the shape at an affordable price.
                </p>
            </div>
         
          <hr />
         
          
        </div>
          <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.943762714696!2d74.2431299!3d16.7296576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc10122281fb59f%3A0x617ecc9e50dfdeb2!2sThe%20Forge%20Fitness%20Club%2C%20Kolhapur%20%7C%20Best%20Gym%20in%20Kolhapur%20%7C%20Fitness%20centre%20in%20Kolhapur!5e0!3m2!1sen!2sin!4v1709967587601!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
    </main>
    </div>
  </div>

 
</section>

<hr class="">
 <!-- form -->
<section>
<form action="" id="packageForm">
  <div class="container">
    <!-- form head -->
    <div class="form_head">
      <div class="d-flex justify-content-center align-items-center" style="background-color:rgb(19,20,21); height:70px; width:100%;">
        <h3>Book Now!</h3>
      </div>
    </div>
<!-- form head end -->
  <!-- form body -->
    <div class="form_body" style="border:5px solid rgb(19,20,21);">
      <div class="packages" style="height: 400px;;">
        <div class="selectpackage d-flex justify-content-center align-items-center pt-5"  >
            <h4>Select Package :</h4>
        </div>
        <div class="packs">
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title" style="color:white;">1 Month Plan</h5>
                <p class="card-text" style="color:white;">1500/Mo</p>
                <label for="package1">SELECT</label>
                <input id="package1" type="radio" name="package" value="1 Month Plan">
            </div>
          </div>
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title" style="color:white;">3 Months Plan</h5>
                <p class="card-text" style="color:white;">4500/3 Mo</p>
                <label for="package2">SELECT</label>
                <input id="package2" type="radio" name="package" value="3 Month Plan">            
            </div>
          </div>
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title" style="color:white;">6 Months Plan</h5>
                <p class="card-text" style="color:white;">7000/6 Mo</p>
                <label for="package3">SELECT</label>
                <input id="package3" type="radio" name="package" value="6 Month Plan">            
             </div>
          </div>
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title" style="color:white;">1 Year Plan</h5>
                <p class="card-text" style="color:white;">12,000/Year</p>
                <label for="package4">SELECT</label>
                <input id="package4" type="radio" name="package" value="1 Year Plan">            
            </div>
          </div>
        </div>
      </div>
      <div class="form-info" style="width:100%; height:70vh; background-color:rgb(33,37,41);">
        
      </div>
    </div>
    <!-- form body end -->


  </div>
   
<button type="submit">Submit</button>
</form>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var radioButtons = document.querySelectorAll('input[type="radio"]');

        radioButtons.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                document.querySelectorAll('.card').forEach(function(card) {
                    card.classList.remove('selected-package');
                });

                // Add teh border to the selected class
                if (this.checked) {
                    this.closest('.card').classList.add('selected-package');
                }
            });
        });

        document.getElementById('packageForm').addEventListener('submit', function(event) {
            event.preventDefault(); 
            var selectedPackage = document.querySelector('input[name="package"]:checked').value;

            // Do something with the selected package
            console.log("Selected package:", selectedPackage);
        });
    });
</script>


<!-- end form -->
<br><br><br><br><br><br><br><br>

    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>

