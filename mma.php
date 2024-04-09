<?php include("gymheader.php")?>
<?php include("gympageheader.php");

?>
<body>
<!-- content -->
<section class="pt-5 pb-0">
  <div class="mx-5 px-5">
    <div class="row gx-5">
    <aside class="col-lg-6 py-0">
    <div class="border rounded-4 mb-3 d-flex justify-content-center" style="height:60vh; width:100%; position: relative;">
        <!-- Main Image -->
            <img id="mainImage" style="width: 100%; height: 100%; margin: auto;" class="rounded-4 img-fluid fit" src="./GYm/assets/img/mmalogo.jpeg" alt="Main Image" />
        <!-- Previous Button -->
        <a id="prevButton" class="prev" onclick="changeImage(-1)" style="position: absolute; color:white; text-decoration:none; top: 50%; left: 10px; transform: translateY(-50%); z-index: 1;">&#10094;</a>
        <!-- Next Button -->
        <a id="nextButton" class="next" onclick="changeImage(1)" style="position: absolute; color:white; text-decoration:none; top: 50%; right: 10px; transform: translateY(-50%); z-index: 1;">&#10095;</a>
    </div>

    <!-- Thumbnail Images -->
    <div class="d-flex justify-content-center mb-3">
        <!-- Thumbnail Links -->
        <a onclick="changeMainImage('./GYm/assets/img/mmalogo.jpeg'); return false;">
            <img width="60" height="50" class="rounded-2" src="./GYm/assets/img/mmalogo.jpeg" alt="Thumbnail 1" />
        </a>
        <a onclick="changeMainImage('./GYm/assets/img/mma.jpg'); return false;">
            <img width="60" height="50" class="rounded-2" src="./GYm/assets/img/mma.jpg" alt="Thumbnail 2" />
        </a>
        <a onclick="changeMainImage('./GYm/assets/img/mma2.jpg'); return false;">
            <img width="60" height="50" class="rounded-2" src="./GYm/assets/img/mma2.jpg" alt="Thumbnail 2" />
        </a>
        <a  onclick="changeMainImage('./GYm/assets/img/mma3.jpg'); return false;">
            <img width="60" height="50" class="rounded-2" src="./GYm/assets/img/mma3.jpg" alt="Thumbnail 2" />
        </a>
        <a  onclick="changeMainImage('./GYm/assets/img/mma4.jpg'); return false;">
            <img width="60" height="50" class="rounded-2" src="./GYm/assets/img/mma4.jpg" alt="Thumbnail 2" />
        </a>
    </div>
    <div class="container m-0 p-0" style="background-color:rgb(30,34,38); height:200px; width:100%;">
      <div class="features_head m-0 p-0 d-flex justify-content-center align-items-center" style="background-color:rgb(19,20,21); height: 50px; width:100%;">
          <h3>Features</h3>
      </div>
      <div class="features-body">
        <div class="row" style="gap:1pxpx;">
          <div class="col-lg-6">
            <h5>1) Premium equipments</h5>
          </div>
          <div class="col-lg-6">
            <h5>2) Custom Nutritional Plans</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h5>3) Cafeteria</h5>
          </div>
          <div class="col-lg-6">
            <h5>4) Certified Trainers</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h5>5) Steam Baths</h5>
          </div>
          <div class="col-lg-6">
            <h5>6) Special Women's Trainers</h5>
          </div>
        </div>
      </div>

    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</aside>
<script>
    var currentImageIndex = 0;
    var images = ['./GYm/assets/img/mmalogo.jpeg', './GYm/assets/img/mma.jpg', './GYm/assets/img/mma2.jpg', './GYm/assets/img/mma3.jpg', './GYm/assets/img/mma4.jpg'];

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
                    <b>MMA Matrix Gym Kolhapur</b>
                    </h2> 
            
                </div>
            </div>
                <br>
            <div class="gymdese"> <p style="font-size:19px; font-family:'Arial';">
            MMA Matrix Gym Kolhapur is one f the leading businesses in the Martial Arts Training Centres. Also known for Gyms, Women Gyms, Fitness Centres, Martial Arts Training Centres, Personal Gym Trainers, Personal Gym Trainers for Women, Men Gyms, Steam Bath Services and much more.Mma Matrix Gym is one of the best martial art training centres in Kolhapur. It has many beginners and advanced courses for the students.
            </div>
         
          <hr />
         
          
        </div>
          <div class="container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.6643469236014!2d74.23845567514937!3d16.693671684080016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc101baec9c65ad%3A0x3dbefb158db24d0!2sMMA%20MATRIX%20GYM%20KOLHAPUR!5e0!3m2!1sen!2sin!4v1712643965927!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          </div>
    </main>
    </div>
  </div>

 
</section>

<hr>
 <!-- form -->
<section>
<form method="POST" id="packageForm" onsubmit="console.log('submitted')">
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
      <div class="packages" style="height: auto;">
        <div class="selectpackage d-flex justify-content-center align-items-center pt-5"  >
            <h4>Select Package :</h4>
        </div>
        <div class="packs pt-5">
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title" style="color:white;">1 Month Plan</h5>
                <p class="card-text" style="color:white;">4000/Mo</p>
                <label for="package1">SELECT</label>
                <input id="package1" type="radio" id="plan1" name="package" value="1 Month Plan">
            </div>
          </div>
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title" style="color:white;">3 Months Plan</h5>
                <p class="card-text" style="color:white;">10,000/3 Mo</p>
                <label for="package2">SELECT</label>
                <input id="package2" type="radio" id="plan2" name="package" value="3 Month Plan">            
            </div>
          </div>
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title" style="color:white;">6 Months Plan</h5>
                <p class="card-text" style="color:white;">12,000/6 Mo</p>
                <label for="package3">SELECT</label>
                <input id="package3" type="radio" id="plan3" name="package" value="6 Month Plan">            
             </div>
          </div>
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title" style="color:white;">1 Year Plan</h5>
                <p class="card-text" style="color:white;">18,000/Year</p>
                <label for="package4">SELECT</label>
                <input id="package4" type="radio" id="plan4" name="package" value="1 Year Plan">            
            </div>
          </div>
        </div>
      </div>
      <div class="form-info container" style="width:100%; height:30vh; background-color:rgb(33,37,41);">
        <div class="row g-3">
          <div class="col-md-6">
            <label for="userMail" class="form-label">Email</label>
            <input type="email" class="form-control" id="userMail"  name="userMail">
          </div>
          <div class="col-md-6">
            <label for="userNum" class="form-label">Phone No.</label>
            <input type="tel" class="form-control" id="userNum" name="userNum">
          </div>
          <div class="col-md-6">
            <label for="userFirstname" class="form-label">First Name.</label>
            <input type="text" class="form-control" name="userFirstname" id="userFirstname">
          </div>
          <div class="col-md-6">
            <label for="userLastname" class="form-label">Last Name.</label>
            <input type="text" class="form-control" name="userLastname" id="userLastname">
          </div>
          
          </div><div class="col-12 d-flex justify-content-center pt-4">
            <input type="submit" name="submit" value="submit" class="btn btn-primary">
          </div>
       
      </div>
    </div>
    <!-- form body end -->
  </div> 
</form>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

if(isset($_POST['submit'])){
  $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;

  $name1=isset($_POST['userFirstname']) ? $_POST['userFirstname'] : '';
  $surname1=isset($_POST['userLastname']) ? $_POST['userLastname'] : '';
  $fullname= $name1." ".$surname1;
  $email1=isset($_POST['userMail']) ? $_POST['userMail'] : '';
  $phone1=isset($_POST['userNum']) ? $_POST['userNum'] : '';


require 'PHPmailer/Exception.php';
require 'PHPmailer/PHPMailer.php';
require 'PHPmailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'omrandive1006@gmail.com';                     //SMTP username
    $mail->Password   = 'epngvczxwxgzwiez';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email1, 'FitPlay Gyms');
    $mail->addAddress('kolhapur@mmamatrix.org', 'MMA Matrix Gym Kolhapur');     //Add a recipient kolhapur@mmamatrix.org



$mail->isHTML(true); // Set email format to HTML

// Email Subject
$mail->Subject = 'Inquiry about Gym Membership';

// Email Body
$body = '<p>Dear MMA Matrix Kolhapur,</p>';
$body .= '<p>This is an inquiry about gym membership. Below are the details:</p>';
$body .= '<ul>';
$body .= '<li><strong>Sender Name:</strong> ' . $fullname . '</li>';
$body .= '<li><strong>Email:</strong> ' . $email1 . '</li>';
$body .= '<li><strong>Phone Number:</strong> ' . $phone1 . '</li>';
$body .= '<li><strong>Selected Package:</strong> ' . $_POST['package'] . '</li>'; // Assuming the package name is submitted in the form
$body .= '</ul>';
$body .= '<p>Please contact the sender at <strong>' . $email1 . '</strong> or <strong>' . $phone1 . '</strong> to discuss further.</p>';
$body .= '<p>Thank you for considering FitPlay Gym!</p>';
$body .= '<p>Best regards,<br>FitPlay Team</p>';
$body .= '<hr>'; // Optional: Add a horizontal line for visual separation
$body .= '<p><strong>FitPlay Overview:</strong></p>';
$body .= '<p>FitPlay Gym offers state-of-the-art fitness facilities, an Online Turf booking platform, Online Gym exploring Platform, our fitness and sports equipment shop, and more to help you achieve your fitness goals.</p>';
$body .= '<p><strong>Address:</strong></p>';
$body .= '<p>P67Q+G8R, Warna Colony, Kolhapur, Maharashtra 416003</p>';

$mail->Body = $body;


// 
    $mail->send();

    echo "<script>alert('message sent successfull')</script>";
  } catch (Exception $e) {
    echo "<script>alert('Opps! Something went wrong')</script>";
}


}
?>
</section>



<script>
document.addEventListener('DOMContentLoaded', function() {
    var radioButtons = document.querySelectorAll('input[type="radio"]');

    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            document.querySelectorAll('.card').forEach(function(card) {
                card.classList.remove('selected-package');
            });

            // Add the border to the selected class
            if (this.checked) {
                this.closest('.card').classList.add('selected-package');
            }
        });
    });

});

</script>

<?php include("gym_foot.php")?>