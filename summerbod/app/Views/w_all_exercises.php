<?php include('partials/menu.php'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/exercises.css'); ?>">
<h2 class="text-center workout-header">All Exercises</h2>

<div class="diff-menu-container">

	<form method="post">
	
		<div class="dropdownex">
  			<button class="dropbtnex">Dropdown</button>
  			<div class="dropdown-contentex">
    			<button type="submit" name="but_sort_1">Difficulty ↑</button>
    			<button type="submit" name="but_sort_2">Difficulty ↓</button>
    			<button type="submit" name="but_sort_3">Name ↑</button>
				<button type="submit" name="but_sort_4">Name ↓</button>
  			</div>
		</div>
          
        <div class="dropdownex">
  			<button class="dropbtnex">Dropdown</button>
  			<div class="dropdown-contentex">
    			<button type="submit" name="but_filter_1">Beginner</button>
    			<button type="submit" name="but_filter_2">Intermediate</button>
    			<button type="submit" name="but_filter_3">Hard</button>
  			</div>
		</div>

		<div class="dropdownex">
    		<button class="dropbtnex" type="submit" name="but_clear">Clear Filters</button>
		</div>

    </form>
</div>

<?php foreach ($workouts->getResultArray() as $workout) { ?>

	<div class="workout-menu-box">

		<div class="workout-menu-img">
			<?= '<img src=' .$workout["image"].' alt="" class="img-responsive img-curve">'?>
		</div>

		<div class="workout-menu-desc">

			<h3><?php echo $workout["name"]; ?></h3>	
			<p class="workout-detail">
				Muscle group: <?php echo $workout["category"]; ?><br> <br>
				Difficulty: <?php echo $workout["difficulty"]; ?><br> <br>
				Description: <?php echo $workout["descr"]; ?> <br> <br>
			</p>
			
		</div>

		<a href="<?= base_url('public/Workouts/w_all_exercises/add').'/'.$workout['id']; ?>" style="font-size: 25px; filter: grayscale(1);">&#128151;</a>

		<div class="clearfix"></div>

	</div>

<?php } ?>

<script src="<?php echo base_url('assets/js/resubmission.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/custom_alert.js'); ?>"></script>

<?php include('partials/footer.php'); ?>