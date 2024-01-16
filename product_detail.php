<?php include("header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="view Productport">

  <title>FitPlay-Shopping-Site</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/pro/favicon.png" rel="icon">
  <link href="assets/img/pro/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/img/pro/8p.png" class="img-fluid" alt="Product Image">
                </div>
                <div class="col-lg-6">
                    <form action="manage_cart.php" method="POST">
                        <h2>Product 1 yash</h2>
                        <p class="text-muted">Category: Electronics</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p class="font-weight-bold">Price: Rs. 780</p>
                        <div class="mb-3">
                            <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1">
                        </div>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Product 1">
                        <input type="hidden" name="Price" value="780">
                    </form>
                </div>
            </div>
        </div>
    </section>

    

    <!-- ... (your scripts) ... -->

</body>

</html>
