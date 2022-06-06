<!-- Explore section start -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/explore.css'); ?>">
<section class="workout-menu">

    <div class="container">
        <h2 style="color: white" class="text-center">Explore Exercises</h2>

		<?php foreach ($workouts->getResultArray() as $workout) { ?>

		    <div class="workout-menu-box">

                <div class="workout-menu-img">
				    <?= '<img src=' .$workout["user_image"].' alt="" class="img-responsive img-curve img-explore-stretch">'?>
                </div>

                <div class="workout-menu-desc">

                    <h3><?php echo $workout["user_name"]; ?></h3>	
                    <p class="workout-detail">
                        Muscle group: <?php echo $workout["user_category"]; ?><br> <br>
					    Difficulty: <?php echo $workout["user_difficulty"]; ?><br> <br>
					    Author: <?php echo $workout["author"]; ?>
				    </p>
					
                </div>

                <div class="clearfix"></div>

            </div>

		<?php } ?>

        <div class="clearfix"></div>

    </div>
</section>
<!-- Explore section end -->