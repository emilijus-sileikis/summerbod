<?php echo view('partials/menu_no_bar'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/exercises.css'); ?>">

    <h2 class="text-center workout-header">Your Favorite Exercises</h2>

    <?php foreach ($workouts->getResultArray() as $workout) { ?>

        <div class="workout-menu-box" style="margin-left: 150px;">

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

			<div class="clearfix"></div>

	        <a href="<?= base_url('public/Workouts/w_all_exercises/remove').'/'.$workout['id']; ?>" style="font-size: 25px;">&#128148;</a>

	        <div class="clearfix"></div>

        </div>

    <?php } ?>

<?php echo view('partials/footer'); ?>