<!-- Explore section start -->

<link rel="stylesheet" href="<?php echo base_url('assets/css/explore.css'); ?>">
<section class="workout-menu">
        <div class="container">
            <h2 style="color: white" class="text-center">Explore Exercises</h2>

		<a style="color:black;" href="#">
            <div class="workout-menu-box">
                <div class="workout-menu-img">
                <?php include('partials/base64/random-menu.php'); ?>
                </div>

                <div class="workout-menu-desc">
                    <h3>Crunches</h3>
                    <p class="workout-detail">
                        Muscle group: Abdominals </br> </br>
						Category: Home workout </br> </br>
						Difficulty: Begginer 
                    </p>
                </div>

                <div class="clearfix"></div>
            </div>

		</a>
		<a style="color:black;" href="#">
            <div class="workout-menu-box">
                <div class="workout-menu-img">
                <?php include('partials/base64/random-menu.php'); ?>
                </div>

                <div class="workout-menu-desc">
                    <h3>Plank</h3>
                    <p class="workout-detail">
                        Muscle group: Abdominals </br> </br>
						Category: Home workout </br> </br>
						Difficulty: Begginer 
                    </p>
                </div>

                <div class="clearfix"></div>
            </div>
		</a>
		<a style="color:black;" href="#">
            <div class="workout-menu-box">
                <div class="workout-menu-img">
                <?php include('partials/base64/random-menu.php'); ?>
                </div>

                <div class="workout-menu-desc">
                    <h3>Dumbbell Row</h3>
                    <p class="workout-detail">
                        Muscle group: Lats </br> </br>
						Category: Gym workout </br> </br>
						Difficulty: Intermediate 
                    </p>
                </div>

                <div class="clearfix"></div>
            </div>
		</a>
		<a style="color:black;" href="#">
            <div class="workout-menu-box">
                <div class="workout-menu-img">
                <?php include('partials/base64/random-menu.php'); ?>
                </div>

                <div class="workout-menu-desc">
                    <h3>Dumbbell Flys</h3>
                    <p class="workout-detail">
                        Muscle group: Chest </br> </br>
						Category: Gym workout </br> </br>
						Difficulty: Begginer 
                    </p>
                </div>

                <div class="clearfix"></div>
            </div>
        </a>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Explore section end -->
<?php
	include 'db_connnection.php';
	$conn = OpenCon();
	$result = mysqli_query($conn,"SELECT * FROM user_workouts");
	?>
<!DOCTYPE html>
<html>
<body>
<?php
	if (mysqli_num_rows($result) > 0) {
?>
	<table>
  
	<tr>
		<td>user_workoutid</td>
		<td>user_id</td>
		<td>user_category</td>
		<td>user_name</td>
		<td>user_difficulty</td>
		<td>user_descr</td>
	</tr>
<?php
	$i=0;
		while($row = mysqli_fetch_array($result)) {
?>
		<tr>
			<td><?php echo $row["user_workoutid"]; ?></td>
			<td><?php echo $row["user_id"]; ?></td>
			<td><?php echo $row["user_category"]; ?></td>
			<td><?php echo $row["user_name"]; ?></td>
			<td><?php echo $row["user_difficulty"]; ?></td>
			<td><?php echo $row["user_descr"]; ?></td>
		</tr>
<?php
	$i++;
	}
?>
	</table>
<?php
	}
	else{
		echo "No result found";
	}
?>
 </body>
</html>
<?php
	CloseCon($conn);
?>