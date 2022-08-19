<?php echo view('partials/menu'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/warmups.css'); ?>">

<div class="container">
    <h2 class="text-center header">Warm-ups</h2>

	<div id="msg" style="text-align: center; margin-left: 100px; color: green; font-size: 15px;">
    	<?php echo session("message"); ?>
	</div>

	<div id="err" style="text-align: center; margin-left: 100px; color: red; font-size: 15px;">
    	<?php echo session("error"); ?>
	</div>

	<h3 class="warmup-text header3"> Why are they important? </h3> <p>.</p>
	<p class="warmup-text">It is very important to perform a proper warm-up before any type of physical activity. 
		The purpose of warming-up is to prevent injury by increasing the body’s core and muscle temperature. 
		Warm muscles increase the rate of energy production which increases reflexes and lowers the time it takes to contract a muscle. 
		A good warm up should also increase range of motion and mentally prepare you for exercise.
		Warm-ups can be performed to specificifically target certain muscles, but more often than not full body warm-up is still recommended, even if you
		only plan to workout a few muscle groups. 
	</p>
	
	<p class="warmup-text">
		Summerbod provides a neat list of exercises below, so to start your workout right, pick a few warmups, which directly correlate to the muscles
		you are going to use, but dont forget to include at least one of each group regardless.
	</p>

	<p>.</p><h3 class="warmup-text header3"> Explore warm-ups: </h3><p>.</p>

	<?php foreach ($warmups->getResultArray() as $warmup) { ?>

		<div class="warmup-menu-box">

			<div class="warmup-menu-img">
				<?= '<img src=' .$warmup["image"].' alt="" class="img-responsive img-curve">'?>
			</div>

			<div class="warmup-menu-desc">

				<h3><?php echo $warmup["name"]; ?></h3>	
				<p class="warmup-detail">
					Muscle group: <?php echo $warmup["category"]; ?><br> <br>
					Difficulty: <?php echo $warmup["difficulty"]; ?><br> <br>
					Description: <?php echo $warmup["descr"]; ?> <br> <br>
				</p>
		
			</div>

			<div class="clearfix"></div>

			<a href="<?= base_url('public/Workouts/w_all_exercises/add').'/'.$warmup['id']; ?>" id="ex-<?php echo $warmup['id']?>" style="font-size: 25px; filter: grayscale(1);">&#128151;</a>

			<?php foreach ($favorites->getResultArray() as $fav) { ?>

				<?php if ($fav["ex_id"] === $warmup["id"]) { ?>
					<a href="<?= base_url('public/Workouts/w_all_exercises/remove').'/'.$warmup['id']; ?>" style="font-size: 25px; filter: grayscale(0);">&#128151;</a>
					<script> document.getElementById('ex-<?php echo $warmup['id']?>').style.display='none'; </script>
				<?php } ?>

			<?php } ?>

			<div class="clearfix"></div>

		</div>

	<?php } ?>

</div>

<script src="<?php echo base_url('assets/js/resubmission.js'); ?>"></script>

<script> window.setTimeout("document.getElementById('msg').style.display='none';", 2000); </script>
<script> window.setTimeout("document.getElementById('err').style.display='none';", 2000); </script>

<?php echo view('partials/footer'); ?>