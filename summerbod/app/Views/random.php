<link rel="stylesheet" href="<?php echo base_url('assets/css/random.css'); ?>">

<section class="challenge-menu container">

    <h2 style="color: black" class="text-center">Random Workout</h2>
    
    <div class="generate-button-class">
        <button class="generate-button" onclick="generateWorkouts()"  name="mihtukas" >Generate</button> 
    </div>
    
    <div class="challenge-container container" id="boxwithworkouts">

        <button class="generate-button regenerate-button" id="resetBtn" onclick="refresh()">Refresh</button> 
        <br><br><br>

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
					    Description: <?php echo $randomWorkout["descr"]; ?>
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

<script src="<?php echo base_url('assets/js/generate.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/resubmission.js'); ?>"></script>