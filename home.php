<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Video Background</title>
<style>
  .video-container {
    position: relative;
    width: 100%;
    height: 100vh; /* Adjust the height as needed */
    overflow: hidden;
  }
  .video-container video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .content {
    position: relative;
    z-index: 1;
    text-align: center;
    margin-top:100px; 
    padding: 20px;
  }
</style>
</head>
<body>

<div class="video-container" >
  <video autoplay muted loop>
    <source src="" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="content">
   <img src="logo.png" alt="">
  </div>
</div>

</body>
</html>
