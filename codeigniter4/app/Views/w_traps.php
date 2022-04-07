<?php include('partials/menu.php'); ?>
<!-- Health section start -->
<?php include('partials/sidenavmenu.php'); ?>
<?php
include 'db_connnection.php';
$conn = OpenCon();
?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/exercises.css'); ?>">

<div class="container">
    <h2 style="color: black; margin-left: 20%; margin-top:10%" class="text-center">Traps Exercises</h2>  <!-- Input muscle group -->
    <div class="workout-menu-box">
    <div class="workout-menu-img">
    <?php $result = mysqli_query($conn,"SELECT user_image FROM user_workouts WHERE user_id=1"); ?>
        <?php $row = mysqli_fetch_array($result) ?>
        <img src=data:image/gif;base64,<?php echo $row["user_image"]?> alt="random-menu1" class="img-responsive img-curve">                                <!-- Input photo by id -->
    </div>
        <div class="workout-menu-desc">
            <?php $result = mysqli_query($conn,"SELECT user_name FROM user_workouts WHERE user_id=1"); ?>
            <?php $row = mysqli_fetch_array($result) ?>
            <h3><?php echo $row["user_name"]; ?></h3>                                                                <!-- Input title by id -->
            <p class="workout-detail">
            <?php $result = mysqli_query($conn,"SELECT user_category FROM user_workouts WHERE user_id=1"); ?>
            <?php $row = mysqli_fetch_array($result) ?>
            Muscle group: <?php echo $row["user_category"]; ?></br> </br>                                            <!-- Input details by id -->
            <?php $result = mysqli_query($conn,"SELECT user_difficulty FROM user_workouts WHERE user_id=1"); ?>
            <?php $row = mysqli_fetch_array($result) ?>
            Difficulty: <?php echo $row["user_difficulty"]; ?></br> </br>
            <?php $result = mysqli_query($conn,"SELECT user_descr FROM user_workouts WHERE user_id=1"); ?>
            <?php $row = mysqli_fetch_array($result) ?>
    Description: <?php echo $row["user_descr"]; ?></br> </br>
            </p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div class="workout-menu-box">
    <div class="workout-menu-img">
    <?php $result = mysqli_query($conn,"SELECT user_image FROM user_workouts WHERE user_id=1"); ?>
        <?php $row = mysqli_fetch_array($result) ?>
        <img src=data:image/gif;base64,<?php echo $row["user_image"]?> alt="random-menu1" class="img-responsive img-curve">                                <!-- Input photo by id -->
    </div>
        <div class="workout-menu-desc">
            <?php $result = mysqli_query($conn,"SELECT user_name FROM user_workouts WHERE user_id=1"); ?>
            <?php $row = mysqli_fetch_array($result) ?>
            <h3><?php echo $row["user_name"]; ?></h3>                                                                <!-- Input title by id -->
            <p class="workout-detail">
            <?php $result = mysqli_query($conn,"SELECT user_category FROM user_workouts WHERE user_id=1"); ?>
            <?php $row = mysqli_fetch_array($result) ?>
            Muscle group: <?php echo $row["user_category"]; ?></br> </br>                                            <!-- Input details by id -->
            <?php $result = mysqli_query($conn,"SELECT user_difficulty FROM user_workouts WHERE user_id=1"); ?>
            <?php $row = mysqli_fetch_array($result) ?>
            Difficulty: <?php echo $row["user_difficulty"]; ?></br> </br>
            <?php $result = mysqli_query($conn,"SELECT user_descr FROM user_workouts WHERE user_id=1"); ?>
            <?php $row = mysqli_fetch_array($result) ?>
    Description: <?php echo $row["user_descr"]; ?></br> </br>
            </p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div class="workout-menu-box">
    <div class="workout-menu-img">
    <?php $result = mysqli_query($conn,"SELECT user_image FROM user_workouts WHERE user_id=1"); ?>
        <?php $row = mysqli_fetch_array($result) ?>
        <img src=data:image/gif;base64,<?php echo $row["user_image"]?> alt="random-menu1" class="img-responsive img-curve">                                <!-- Input photo by id -->
    </div>
        <div class="workout-menu-desc">
            <?php $result = mysqli_query($conn,"SELECT user_name FROM user_workouts WHERE user_id=1"); ?>
            <?php $row = mysqli_fetch_array($result) ?>
            <h3><?php echo $row["user_name"]; ?></h3>                                                                <!-- Input title by id -->
            <p class="workout-detail">
            <?php $result = mysqli_query($conn,"SELECT user_category FROM user_workouts WHERE user_id=1"); ?>
            <?php $row = mysqli_fetch_array($result) ?>
            Muscle group: <?php echo $row["user_category"]; ?></br> </br>                                            <!-- Input details by id -->
            <?php $result = mysqli_query($conn,"SELECT user_difficulty FROM user_workouts WHERE user_id=1"); ?>
            <?php $row = mysqli_fetch_array($result) ?>
            Difficulty: <?php echo $row["user_difficulty"]; ?></br> </br>
            <?php $result = mysqli_query($conn,"SELECT user_descr FROM user_workouts WHERE user_id=1"); ?>
            <?php $row = mysqli_fetch_array($result) ?>
    Description: <?php echo $row["user_descr"]; ?></br> </br>
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
