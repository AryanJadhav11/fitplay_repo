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
?>

<div class="container mt-3">
	<div class="row">
		<div class="col-lg-8">
			
			<div class="card shadow">
				<div class="card-body" >
					<div id="single_img">
						<?php $imgi=$row9['image']?>
					

						<img src="upload/<?=$imgi?>" >
					
					</div>
					<hr>
					<div>
						<h5><?=ucfirst($row9['name'])?></h5>
						<p><?=$row9['details']?></p>
					</div>
                    <div>
						<h5><?=ucfirst($row9['place'])?></h5>
						<p><?=$row9['price']?></p>
					</div>

				</div>
			</div>

		</div>
		
		
	</div>


	
</div>







