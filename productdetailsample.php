
<?php

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

if (isset($_GET['Order_id'])) {
    $oid = $_GET['Order_id'];
    $sql9pp = "SELECT * FROM `product_cards` WHERE Order_id='$oid';";
    $res9pp = mysqli_query($conn, $sql9pp);

    // Check if the query was successful
    if (!$res9pp) {
        die(mysqli_error($conn));
    }

    // Check if there are results
    if (mysqli_num_rows($res9pp) > 0) {
        $row9pp = mysqli_fetch_assoc($res9pp);
    } else {
        // Handle the case where no results were found
        echo "No results found for Order_id: $oid";
    }
}

?>



<head>
    <title>FitPlay - Product_Detail</title>
    <!-- cdn links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

<?php include("header.php");?>

<?php

if (isset($_POST['Add_To_Cart'])) {
    // Retrieve user_id from the session
    $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
    // Get item details from the form using the correct names
    $item_name = isset($_POST['item_name']) ? $_POST['item_name'] : '';
    $price = isset($_POST['Price']) ? $_POST['Price'] : '';
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';

    // Insert the item into the order_his table
    $sql = "INSERT INTO `order_his` (`user_id`, `item_name`, `price`, `quantity`) 
            VALUES ('$user_id', '$item_name', '$price', '$quantity')";
            
    $result = mysqli_query($conn, $sql);

    // Insert the item into the buy_items table
   
    if ($result) {
        echo "Item added to cart successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
    ?>


    <!-- start -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

<div class="wrapper">
  
  <div class="col-1-2">
    <div class="product-wrap">
      <div class="product-shot"><?php $imgip = $row9pp['pic'] ?>
        <img src="upload/<?= $imgip ?>" alt="" />
      </div>
    </div>
  </div>
  
  <div class="col-1-2">
    <div class="product-info">
      <h2><?= ucfirst($row9pp['item_name']) ?></h2>
      <div> <span class="product_price">₹ <?= ucfirst($row9pp['Price']) ?></span>  </div>
      <div class="desc">
        From its humble origins as a surfwear brand, Stussy has gone on to become one of the biggest streetwear labels in the industry. Mixing various influences ranging from surf to music and everything in between, Stussy and it’s iconic signature graphic has grown to encapsulate a full range of apparel, home goods and limited-edition collaborations. 100% premium cotton raglan tee with 3/4 -length contrasting sleeves and graphic print on chest.
      </div>
      
      <button type="submit" name="Add_To_Cart" class="button">Add to Cart</button>';
      <a href="" class="button" type="submit" name="dd_To_Cart">Add to Cart</a>
      <a href="mycart.php" class="button">View Cart</a>
      <!-- <a href="" class="button">Add to Cart</a> -->
    </div>
    
  </div>
</div>
 

<style>
    html{ font-family: 'Lato', sans-serif; }

img{ max-width: 100%; }

.wrapper{
  width: 960px;
  margin: 100px auto;
}

.col-1-2{
  float: left;
  width: 50%;
}

.product-wrap{
  margin: 0 auto;
  width: 350px;
  
  
  .product-shot{
    padding-top: 30px;
    transition: all 0.5s ease;
    &:hover{ transform: scale(1.1); }
  }
}

.product-info{
  h2{
    padding-bottom: 15px;
    font-size: 32px; 
    border-bottom: 1px solid #d9d9d9;
  }
  
  .desc{ 
    margin-top: 25px;
    font-size: 16px;
    line-height: 1.6;
  }
  
  .sizing-list{
    margin-top: 25px;
    padding: 0px;
    list-style-type: none; 
  }
  
  .size{ 
    display: inline;
    margin-right: 10px;
    padding: 10px 15px; 
    color: rgb(194, 194, 194);
    border: 1px solid rgb(194, 194, 194);
    cursor: pointer;
    
    &.active{
      color: white;
      background-color: rgb(194, 194, 194);
    }
  }
   
}

.button{
  display: inline-block;
  margin-top: 35px;
  padding: 12px 25px;
  font-size: 16px;
  text-decoration: none;
  background-color: #505050;
  color: white;
  transition: 0.25s ease;
}

.button:hover{
  background-color: #323232;
}
</style>

<script>
    document.body.addEventListener("click", function(event){
    event.target.classList.toggle('active');
});
</script>
    <!-- end -->
</body>
</html>