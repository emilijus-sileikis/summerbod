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
					<?php $result = mysqli_query($conn,"SELECT user_image FROM user_workouts WHERE user_id=1"); ?>
					<?php $row = mysqli_fetch_array($result) ?>
					<img src=data:image/gif;base64,<?php echo $row["user_image"]?> alt="Random1" class="img-responsive img-curve img-explore-stretch" style="object-fit: contain;">
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
		<a style="color:black;" href="#">
            <div class="workout-menu-box">
                <div class="workout-menu-img">
					<?php $result = mysqli_query($conn,"SELECT user_image FROM user_workouts WHERE user_id=1"); ?>
					<?php $row = mysqli_fetch_array($result) ?>
					<img src=data:image/gif;base64,<?php echo $row["user_image"]?> alt="Random1" class="img-responsive img-curve img-explore-stretch" style="object-fit: contain;">
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
					
					<?php $result = mysqli_query($conn,"SELECT name FROM user_info WHERE id=2"); ?>
					<?php $row = mysqli_fetch_array($result) ?>
					Author: <?php echo $row["name"]; ?>
					</p>
					
                </div>

                <div class="clearfix"></div>
            </div>
		</a>
		<a style="color:black;" href="#">
            <div class="workout-menu-box">
                <div class="workout-menu-img">
					<?php $result = mysqli_query($conn,"SELECT user_image FROM user_workouts WHERE user_id=1"); ?>
					<?php $row = mysqli_fetch_array($result) ?>
					<img src=data:image/gif;base64,<?php echo $row["user_image"]?> alt="Random1" class="img-responsive img-curve img-explore-stretch" style="object-fit: contain;">
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
		<a style="color:black;" href="#">
            <div class="workout-menu-box">
                <div class="workout-menu-img">
				
				    <?php $result = mysqli_query($conn,"SELECT user_image FROM user_workouts WHERE user_id=1"); ?>
					<?php $row = mysqli_fetch_array($result) ?>
					<img src=data:image/gif;base64,<?php echo $row["user_image"]?> alt="Random1" class="img-responsive img-curve img-explore-stretch" style="object-fit: contain;">
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
					
					<?php $result = mysqli_query($conn,"SELECT name FROM user_info WHERE id=2"); ?>
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