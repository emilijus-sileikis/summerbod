<?php include('partials/menu.php'); ?>
<?php include('partials/sidenavmenu.php'); ?>
<?php
include 'db_connnection.php';
$conn = OpenCon();
?>
<div class="container">
    <h2 style="color: black; margin-left: 20%; margin-top:10%" class="text-center">Calves Exercises</h2>  <!-- Input muscle group -->
    <div class="workout-menu-box">
	<div class="workout-menu-img">
        <?php include('partials/base64/random-menu.php'); ?>                                  <!-- Input photo by id -->
    </div>
        <div class="workout-menu-desc">
            <h3>Calves</h3>                                                                 <!-- Input title by id -->
            <p class="workout-detail">
            Muscle group: Calves </br> </br>                                              <!-- Input details by id -->
		    Category: Home workout </br> </br>
		    Difficulty: Begginer 
            </p>
        </div>
	    <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div class="workout-menu-box">
	<div class="workout-menu-img">
        <?php include('partials/base64/random-menu.php'); ?>                                  <!-- Input photo by id -->
    </div>
        <div class="workout-menu-desc">
            <h3>Yuh</h3>                                                                 <!-- Input title by id -->
            <p class="workout-detail">
            Muscle group: Calves </br> </br>                                              <!-- Input details by id -->
		    Category: Home workout </br> </br>
		    Difficulty: Begginer 
            </p>
        </div>
	    <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div class="workout-menu-box">
	<div class="workout-menu-img">
        <?php include('partials/base64/random-menu.php'); ?>                                  <!-- Input photo by id -->
    </div>
        <div class="workout-menu-desc">
            <h3>Bruh</h3>                                                                 <!-- Input title by id -->
            <p class="workout-detail">
            Muscle group: Calves </br> </br>                                              <!-- Input details by id -->
		    Category: Home workout </br> </br>
		    Difficulty: Begginer 
            </p>
        </div>
	    <div class="clearfix"></div>
    </div>
</div>

<!-- Workouts section end -->
    <?php include('partials/footer.php'); ?>
<?php
	CloseCon($conn);
?>