<?php echo view('partials/menu'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/exercises.css'); ?>">
<h2 class="text-center workout-header"><?php echo $title ?></h2>

<div id="msg" style="text-align: center; margin-left: 100px; color: green; font-size: 15px;">
    <?php echo session("message"); ?>
</div>

<div id="err" style="text-align: center; margin-left: 100px; color: red; font-size: 15px;">
    <?php echo session("error"); ?>
</div>

<div class="diff-menu-container">

	<form method="post">
	
		<div class="dropdownex">
  			<button class="dropbtnex">Sort By:</button>
  			<div class="dropdown-contentex">
    			<button type="submit" name="but_sort_1">Difficulty ↑</button>
    			<button type="submit" name="but_sort_2">Difficulty ↓</button>
    			<button type="submit" name="but_sort_3">Name ↑</button>
				<button type="submit" name="but_sort_4">Name ↓</button>
  			</div>
		</div>
          
        <div class="dropdownex">
  			<button class="dropbtnex">Difficulty:</button>
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

	<div class="clearfix"></div>

	<a href="<?= base_url('public/Workouts/w_all_exercises/add').'/'.$workout['id']; ?>" id="ex-<?php echo $workout['id']?>" style="font-size: 25px; filter: grayscale(1);">&#128151;</a>

	<?php foreach ($favorites->getResultArray() as $fav) { ?>

		<?php if ($fav["ex_id"] === $workout["id"]) { ?>
			<a href="<?= base_url('public/Workouts/w_all_exercises/remove').'/'.$workout['id']; ?>" style="font-size: 25px; filter: grayscale(0);">&#128151;</a>
			<script> document.getElementById('ex-<?php echo $workout['id']?>').style.display='none'; </script>
		<?php } ?>

	<?php } ?>

	<div class="clearfix"></div>

</div>

<?php } ?>

<script src="<?php echo base_url('assets/js/resubmission.js'); ?>"></script>

<script> window.setTimeout("document.getElementById('msg').style.display='none';", 2000); </script>
<script> window.setTimeout("document.getElementById('err').style.display='none';", 2000); </script>

<?php echo view('partials/footer'); ?>