<?php include('partials/menu.php'); ?>
<?php
include 'db_connnection.php';
$conn = OpenCon();
?>
<!-- Health section start -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/exercises.css'); ?>">
<h2 class="text-center workout-header">Traps Exercises</h2>

<div class="diff-menu-container">
 <!-- sorting and stuff, need like 3 more of these to the right -->
	<form method="post">
		<a class="dropdownex"> 
			<button class="dropbtnex diff-menu-box">Sort by</button>
				<div class="dropdownex-content sort-content">
                    <li> <button type="submit" name="but_sort_1" class="diff-menu-sort-box" >Difficulty ↑</button> </li>
                    <li> <button type="submit" name="but_sort_2" class="diff-menu-sort-box" >Difficulty ↓</button> </li>
                    <li> <button type="submit" name="but_sort_3" class="diff-menu-sort-box" >Name ↑</button> </li>
					<li> <button type="submit" name="but_sort_4" class="diff-menu-sort-box" >Name ↓</button> </li>
                </div>
		</a>
          
        <a class="dropdownex"> 
			<button class="dropbtnex diff-menu-box">Difficulty</button>
				<div class="dropdownex-content filter-content">
                    <li> <button type="submit" name="but_filter_1" class="diff-menu-sort-box" >Beginner</button> </li>
                    <li> <button type="submit" name="but_filter_2" class="diff-menu-sort-box" >Intermediate</button> </li>
                    <li> <button type="submit" name="but_filter_3" class="diff-menu-sort-box" >Hard</button> </li>
                </div>
		</a>
				
		<button type="submit" name="but_clear" class="button diff-menu-box" value="Clear filters">Clear Filters</button>
    </form>
</div>

<?php 
	if(isset($_POST['but_sort_1'])) {
        $query = "SELECT * FROM user_workouts WHERE `user_category`='Traps' AND user_difficulty='Beginner' OR `user_category`='Traps' AND user_difficulty='Intermediate' OR `user_category`='Traps' AND user_difficulty='Hard' ORDER BY user_difficulty ASC";
    }
	else if(isset($_POST['but_sort_2'])) {
        $query = "SELECT * FROM user_workouts WHERE `user_category`='Traps' AND user_difficulty='Beginner' OR `user_category`='Traps' AND user_difficulty='Intermediate' OR `user_category`='Traps' AND user_difficulty='Hard' ORDER BY user_difficulty DESC";
    }
	else if(isset($_POST['but_sort_3'])) {
        $query = "SELECT * FROM user_workouts WHERE `user_category`='Traps' AND user_difficulty='Beginner' OR `user_category`='Traps' AND user_difficulty='Intermediate' OR `user_category`='Traps' AND user_difficulty='Hard' ORDER BY user_name ASC";
    }
	else if(isset($_POST['but_sort_4'])) {
        $query = "SELECT * FROM user_workouts WHERE `user_category`='Traps' AND user_difficulty='Beginner' OR `user_category`='Traps' AND user_difficulty='Intermediate' OR `user_category`='Traps' AND user_difficulty='Hard' ORDER BY user_name DESC";
    }
    else if(isset($_POST['but_filter_1'])) {
        $query = "SELECT * FROM user_workouts WHERE `user_category`='Traps' AND user_difficulty='Beginner'";
    }
	else if(isset($_POST['but_filter_2'])) {
        $query = "SELECT * FROM user_workouts WHERE `user_category`='Traps' AND user_difficulty='Intermediate'";
    }
	else if(isset($_POST['but_filter_3'])) {
        $query = "SELECT * FROM user_workouts WHERE `user_category`='Traps' AND user_difficulty='Hard'";
    }
	else if(isset($_POST['but_clear'])) {
        $query = "SELECT * FROM user_workouts WHERE `user_category`='Traps' AND user_difficulty='Beginner' OR `user_category`='Traps' AND user_difficulty='Intermediate' OR `user_category`='Traps' AND user_difficulty='Hard' ";
    }
	else{
		$query = "SELECT * FROM user_workouts WHERE `user_category`='Traps' AND user_difficulty='Beginner' OR `user_category`='Traps' AND user_difficulty='Intermediate' OR `user_category`='Traps' AND user_difficulty='Hard' ";
	}
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