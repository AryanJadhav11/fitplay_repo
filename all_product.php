<?php
$server = 'localhost';
$user = 'root';
$db = 'mg';
$pass = '';

$conie = mysqli_connect($server, $user, $pass, $db);

if (!$conie) {
    die(mysqli_error($conie));
}

if (isset($_GET['Order_id'])) {
    $oid = $_GET['Order_id'];
    $sql9pp = "SELECT * FROM `user_orders` WHERE Order_id='$oid';";
    $res9pp = mysqli_query($conie, $sql9pp);

    // Check if the query was successful
    if (!$res9pp) {
        die(mysqli_error($conie));
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


<div class="container mt-3">
	<div class="row">
		<div class="col-lg-8">
			
			<div class="card shadow">
				<div class="card-body" >
					<div id="single_img">
						<?php $imgip=$row9pp['pic']?>
					

						<img src="upload/<?=$imgip?>" >
					
					</div>
					<hr>
					<div>
						<h5><?=ucfirst($row9pp['item_name'])?></h5>
						<p><?=$row9pp['about']?></p>
					</div>
                    <div>
						<h5><?=ucfirst($row9pp['Price'])?></h5>
						
					</div>

				</div>
			</div>

		</div>
		
		
	</div>


	
</div>







