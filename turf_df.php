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







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY8i0v9U5TJ7FExlFIIJqKxN/Un4M5i7fZ+J" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js'></script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .turf-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 30px auto;
            max-width: 1200px;
            display: flex;
            flex-wrap: wrap;
        }

        .turf-image-container {
            flex: 0 0 300px; /* Fixed width for the image container */
            margin-right: 30px;
        }

        .turf-image {
            max-width: 600;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .turf-details {
            flex: 1;
            padding-right: 30px;
        }

        .turf-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #333;
        }

        .turf-subtitle {
            font-size: 20px;
            font-weight: 400;
            color: #555;
            margin-bottom: 20px;
        }

        .turf-description {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
        }

        .time-range-container {
            text-align: center;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .time-label,
        .time-value {
            font-size: 18px;
            color: #333;
            margin: 0;
        }

        .turf-price {
            font-size: 28px;
            font-weight: 700;
            color: #007bff;
            margin-bottom: 20px;
        }

        .buttons-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .btn-book-slot,
        .btn-share {
            font-size: 18px;
            font-weight: 600;
            padding: 15px 30px;
            border-radius: 8px;
        }

        .btn-book-slot {
            background-color: #007bff;
            color: #fff;
            border: none;
            margin-right: 10px;
        }
        .amenities-container {
        background-color: #f5f5f5;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 20px;
    }

    .amenities-list {
        display: flex;
        flex-direction: column;
    }

    .amenity-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .amenity-icon {
        font-size: 24px;
        color: #0cd00c;
        margin-right: 10px;
    }

    .amenity-name {
        font-size: 18px;
        color: #333;
    }

    .no-amenity {
        color: red;
    }

        .btn-share {
            background-color: #343a40;
            color: #fff;
            border: none;
        }

        .amenities-container {
            flex: 1;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
        }

        .amenities-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .amenities-list {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .amenity-item {
            flex: 0 0 calc(33.3333% - 15px);
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 15px;
        }

        .amenity-item img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .amenity-name {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }
    </style>
</head>

<body class="pt-5">
    <div class="container">
        <div class="turf-container">
            <div class="turf-image-container">
                <?php $imgi=$row9['image']?><img src="upload/<?= $imgi ?>" width="600px;" height="449.99px;" alt="Turf Image" class="turf-image">
            </div>
            <div class="turf-details">
                <h1 class="turf-title"><?= ucfirst($row9['name']) ?></h1>
                <h4 class="turf-subtitle"><?= ucfirst($row9['place']) ?></h4>
                <p class="turf-description"><?= ucfirst($row9['details']) ?></p>

                <div class="time-range-container">
                    <p class="time-label"><b>From:</b></p>
                    <p class="time-value"><?= $start_time_12hr; ?></p>
                    <p class="time-label"><b>To:</b></p>
                    <p class="time-value"><?= $end_time_12hr; ?></p>
                </div>

                <h2 class="turf-price">Price: Rs <?= ucfirst($row9['price']) ?></h2>

                <div class="buttons-container">
                    
                <?php
    if (isset($_SESSION['user_data'])) {
        echo '<a href="detail_turf.php?id=' . $row9['id'] . '"><button class="btn btn-book-slot">Book Your Slot</button></a>';
        echo '<button class="btn btn-share" onclick="shareOnWhatsApp()">Share</button>';
    } else {
        echo '<button class="btn btn-book-slot"  data-bs-toggle="modal" data-bs-target="#chloginModal">Book Your Slot</button>';
        echo ' <button class="btn btn-share" onclick="shareOnWhatsApp()">Share</button>';
    }
?>

<script>
    function shareOnWhatsApp() {
        // Get the current page URL
        var currentUrl = window.location.href;

        // Create a WhatsApp share link
        var whatsappLink = 'whatsapp://send?text=' + encodeURIComponent('Check out this page: ' + currentUrl + '\n');

        // Open the WhatsApp app
        window.location.href = whatsappLink;
    }
</script>

                </div>
            </div>

            <div class="amenities-container">
    <h3 class="amenities-title">Available Amenities</h3>
    <div class="amenities-list">
        <?php
        // Define the amenities array with all possible amenities
        $amenities = array(
            $row9['amenitiy1'],
            $row9['amenitiy2'],
            $row9['amenitiy3'],
            $row9['amenitiy4']
        );
        $amenityPresent = false;

        // Loop through each amenity
        foreach ($amenities as $amenity) {
            // Check if the amenity is present
            if (!empty($amenity)) {
                // Output the amenity item with an icon and styling
                echo '<div class="amenity-item">';
                echo '<i class="fas fa-check-circle amenity-icon"></i>';
                echo '<span class="amenity-name">' . ucfirst($amenity) . '</span>';
                echo '</div>';
                $amenityPresent = true;
            }
        }

        // Check if no amenity is present
        if (!$amenityPresent) {
            // Output a message indicating no amenities
            echo '<div class="amenity-item no-amenity">';
            echo '<i class="fas fa-times-circle amenity-icon"></i>';
            echo '<span class="amenity-name">No Amenity</span>';
            echo '</div>';
        }
        ?>
    </div>
</div>
<div id="map-container" style="height: 400px; margin-top: 20px; width: 100%;">
    <?= ucfirst($row9['loc']) ?>
</div>

<!-- moodel start -->
<div class="mobile-modal">
  <div class="mobile-modal-content">
    <h2>Website is Under Construction</h2>
    <img src="52530.jpg" alt="Mobile Image" style="max-width: 100%; height: 50%;margin:10px;">
    <p>Sorry, this website is under construction and be available on mobile devices soon...</p>
  </div>
  <style>
  /* This will apply by default, hiding the modal on larger screens */
  .mobile-modal {
    display: none;
  }

  /* This media query targets screens with a max-width of 600px */
  @media only screen and (max-width: 600px) {
    .mobile-modal {
      display: block; /* Show the modal on small screens */
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
      margin: 10% auto;
      padding: 20px;
      border-radius: 8px;
      max-width: 80%;
    }
  }
</style>

</body>

</html>




</body>
</html>