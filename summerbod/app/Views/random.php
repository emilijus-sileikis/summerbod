
<!-- Explore section start -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/random.css'); ?>">
<script src="ajax"></script>

<section class="challenge-menu">

<h2 style="color: black" class="random-text-center">Random Workout</h2>
    
        <div class="generate-button-class">
            <button class="generate-button" onclick="generateWorkouts()"  name="mihtukas" >Generate</button> 
        </div>
    
    <div class="challenge-container" id="boxwithworkouts">

        <a href="<?php base_url('public/home'); ?>" id='live'>
            <button class="regenerate-button" onclick="refresh()">Refresh</button>
            
        </a>

		<?php foreach ($randomWorkouts->getResultArray() as $randomWorkout) { ?>

		<div class="challenge-menu-box">

            <div class="challenge-menu-img">
				<?= '<img src=' .$randomWorkout["image"].' alt="" class="img-responsive img-curve">'?>
            </div>

            <div class="challenge-menu-desc">

                <h3><?php echo $randomWorkout["name"]; ?></h3>	
                <p class="challenge-detail">
                    Muscle group: <?php echo $randomWorkout["category"]; ?><br> <br>
					Difficulty: <?php echo $randomWorkout["difficulty"]; ?><br> <br>
                    Description: <?php echo $randomWorkout["descr"]; ?><br> <br>
				</p>
					
            </div>

            <div class="clearfix"></div>

        </div>

		<?php } ?>

    <div class="close-generated-button-class">
        <button class="close-generated-button generate-button" onclick="closeContainer()">Close</button> 
    </div>          

        <div class="clearfix"></div>

    </div>
</section>


<script>


</script>



<script src="<?php echo base_url('assets/js/generate.js'); ?>"></script>
<!-- Explore section end -->