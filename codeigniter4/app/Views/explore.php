<!-- Explore section start -->

<?php
include 'db_connnection.php';
$conn = OpenCon();
?>

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
				         <!--  <?php $result = mysqli_query($conn,"SELECT user_image FROM user_workouts WHERE user_id=1"); ?> -->
						 <!--  <?php $row = mysqli_fetch_array($result) ?> -->
                <?php include('partials/base64/random-menu.php'); ?>
                </div>

                <div class="workout-menu-desc">
				
				    <?php $result = mysqli_query($conn,"SELECT user_name FROM user_workouts WHERE user_id=1"); ?>
					<?php $row = mysqli_fetch_array($result) ?>
                    <h3><?php echo $row["user_name"]; ?></h3>
					
                    <p class="workout-detail">
					<?php $result = mysqli_query($conn,"SELECT user_category FROM user_workouts WHERE user_id=1"); ?>
					<?php $row = mysqli_fetch_array($result) ?>
                    Muscle group: <?php echo $row["user_category"]; ?></br> </br>
					
					<?php $result = mysqli_query($conn,"SELECT user_difficulty FROM user_workouts WHERE user_id=1"); ?>
					<?php $row = mysqli_fetch_array($result) ?>
					Difficulty: <?php echo $row["user_difficulty"]; ?></br> </br>
					
					<?php $result = mysqli_query($conn,"SELECT name FROM user_info WHERE id=1"); ?>
					<?php $row = mysqli_fetch_array($result) ?>
					Author: <?php echo $row["name"]; ?>
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
	CloseCon($conn);
?>