<?php include('partials/menu.php'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/exercises.css'); ?>">
<h2 class="text-center workout-header">Forearms Exercises</h2>

<div class="diff-menu-container">

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

<?php foreach ($workouts->getResultArray() as $workout) { ?>

<div class="workout-menu-box">

	<div class="workout-menu-img">
		<?= '<img src=' .$workout["user_image"].' alt="" class="img-responsive img-curve">'?>
	</div>

	<div class="workout-menu-desc">

		<h3><?php echo $workout["user_name"]; ?></h3>	
		<p class="workout-detail">
			Muscle group: <?php echo $workout["user_category"]; ?><br> <br>
			Difficulty: <?php echo $workout["user_difficulty"]; ?><br> <br>
			Description: <?php echo $workout["user_descr"]; ?> <br> <br>
		</p>
			
	</div>

	<div class="clearfix"></div>

</div>

<?php } ?>

<script> 
	if ( window.history.replaceState ) {window.history.replaceState( null, null, window.location.href );}
</script>

<?php include('partials/footer.php'); ?>