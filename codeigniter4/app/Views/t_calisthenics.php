<?php include('partials/menu.php'); ?>
<?php
include 'db_connnection.php';
$conn = OpenCon();
?>
<!-- Health section start -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/exercises.css'); ?>">
<h2 class="text-center workout-header">Calisthenics Exercises</h2>

<div class="diff-menu-container">
 <!-- sorting and stuff, need like 3 more of these to the right -->
	<a style="color:black;">
		<div class="diff-menu-box diff-menu-box-image1">
			<h4>Sort Difficulty</h4>
			<div class="clearfix"></div>
		</div>
	</a>

	<a style="color:black;">
		<div class="diff-menu-box">
			<h4>Filter Difficulty</h4>
			<div class="clearfix"></div>
		</div>
	</a>
</div>

<?php 
	$query = "SELECT * FROM user_workouts";
    $result = $conn->query($query);
	if ($result->num_rows > 0) {
		/* fetch associative array */
		while($row = $result->fetch_assoc()) 
		{
			echo "<div class='workout-menu-box'>
						<div class='workout-menu-img'>
						<img src=data:image/gif;base64," .$row["user_image"]. " alt='random-menu1' class='img-responsive img-curve'>                  
						</div>
						<div class='workout-menu-desc'>
								<h3>" .$row["user_name"]. "</h3>
							<p class='workout-detail'>
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
<?php
	CloseCon($conn);
?>