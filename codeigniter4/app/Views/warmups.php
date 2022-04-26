<?php include('partials/menu.php'); ?>
<?php
include 'db_connnection.php';
$conn = OpenCon();
?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/warmups.css'); ?>">
<div class="container">
    <h2 class="text-center header">Warm-ups</h2>  <!-- Input muscle group -->

<h3 class="warmup-text header3"> Why are they important? </h3> <p>.</p>
<p class="warmup-text">It is very important to perform a proper warm-up before any type of physical activity. 
The purpose of warming-up is to prevent injury by increasing the body’s core and muscle temperature. 
Warm muscles increase the rate of energy production which increases reflexes and lowers the time it takes to contract a muscle. 
A good warm up should also increase range of motion and mentally prepare you for exercise.
Warm-ups can be performed to specificifically target certain muscles, but more often than not full body warm-up is still recommended, even if you
only plan to workout a few muscle groups. </p>
<p class="warmup-text">
Summerbod provides a neat list of exercises below, so to start your workout right, pick a few warmups, which directly correlate to the muscles
you are going to use, but dont forget to include at least one of each group regardless.
</p>
<p>.</p><h3 class="warmup-text header3"> Explore warm-ups: </h3><p>.</p>

<?php 
	$query = "SELECT * FROM user_workouts WHERE `user_difficulty`='Warm-up' ";
    $result = $conn->query($query);
	if ($result->num_rows > 0) {
		/* fetch associative array */
		while($row = $result->fetch_assoc()) 
		{
			echo "<div class='warmup-menu-box'>
						<div class='warmup-menu-img'>
						<img src=data:image/gif;base64," .$row["user_image"]. " alt='random-menu1' class='img-responsive img-curve'>                  
						</div>
						<div class='warmup-menu-desc'>
								<h3>" .$row["user_name"]. "</h3>
							<p class='warmup-detail'>
								Muscle group: ".$row["user_category"]."</br> </br>
								Difficulty: ".$row["user_difficulty"]."</br> </br>
								Description: ".$row["user_descr"]."</br> </br>
								</p>
						</div>
							<div class='clearfix'></div>
					</div>";
		}
	
		/* free result set */
		$result->free();
	}
?>

<!-- Workouts section end -->
    <?php include('partials/footer.php'); ?>