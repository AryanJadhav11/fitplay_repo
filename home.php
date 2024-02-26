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
    color: #fff;
    text-align: center;
    padding: 20px;
  }
</style>
</head>
<body>

<div class="video-container" >
  <video autoplay muted loop>
    <source src="https://media.istockphoto.com/id/1426877619/video/football-championship-ball-hits-net-in-slow-motion-goalkeeper-jumps-and-fails-to-protect.mp4?s=mp4-640x640-is&k=20&c=BAuUaeRKUeI0UJ7bIrx6kt5LLkyIhSS1mB1aICSTjpY=" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="content">
    <!-- Your content here -->
    <h1>Welcome to My Website</h1>
    <p>This is some content overlaid on top of the video background.</p>
  </div>
</div>

</body>
</html>
