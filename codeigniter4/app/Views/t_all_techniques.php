<?php include('partials/menu.php'); ?>
<!-- Health section start -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/workouts.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/explore.css'); ?>">
<div class="container">

    <h2 style="color: black; margin-left: 20%; margin-top:10%" class="text-center">Exercise Techniques</h2>  <!-- Input muscle group -->

<h3 class="workout-text"> There are techniques? </h3>
<p class="workout-text">
Most people workout by picking a wide variety of bodyweight, cardio and weighted exercise assortments, 
which they particullarly like, which is not inherently incorrect, however focusing on a specific technique fitting your goals
will improve and speedup desired results.
As long as you exercise correctly, there are no downsides to performing semi-random exercises, however workout culture has developed 
some main ways of exercising, with particular goals in mind and with the help of health and sport experts they have been nearly perfected
and are inclusive from the very begginers to advanced sportsmen. 
</p>
<h4 class="workout-text" style="padding-bottom: 1%"> Calisthenics </h4>
<p class="workout-text">Calisthenics is a form of strength training consisting of a variety of movements that 
exercise large muscle groups, such as standing, grasping, pushing, etc. 
These exercises are often performed rhythmically and with minimal equipment, as bodyweight exercises. 
They are intended to increase strength, fitness, and flexibility, through movements such as pulling, 
pushing, bending, jumping, or swinging, using one's body weight for resistance. Calisthenics can provide 
the benefits of muscular and aerobic conditioning, in addition to improving psychomotor skills such as balance, 
agility and coordination.</p>
<h4 class="workout-text" style="padding-bottom: 1%"> Powerlifting </h4>
<p class="workout-text">
Powerlifting is a sport that tests maximal strength, which is tested by performing three main exercises: squat, bench press, and deadlift.
These exercises are perfomed by lifting a barbell loaded with weight plates, while the training itself typically involves exercises which
 apply the maximum amount of force as fast as possible; on the basis that strength + speed = power. Power training frequently specifically 
 utilises two physiological processes which increase in conjunction with one another during exercise. These are deep breathing, which 
 results in increased intra-abdominal pressure; and post-activation potentation, which is the enhanced activation of the nervous system 
 and increased muscle fibre recruitment.
</p>

<a href="<?php echo base_url('public/Techniques/t_calisthenics'); ?>" style="color:black;">
<div class="workout-menu-box" style="margin-left: 25%; width: 20%; height: 5%; background-color: #f2f2f2;">
        <div class="workout-menu-desc">
            <h3>Calisthenics</h3>                                                           
            <p class="workout-detail">
            Explore calisthenics exercises.
            </p>
        </div>
	    <div class="clearfix"></div>
</div>
</a>

<a href="<?php echo base_url('public/Techniques/t_powerlifting'); ?>" style="color:black;">
<div class="workout-menu-box" style="margin-left: 13%; width: 20%; height: 5%; background-color: #f2f2f2;">
        <div class="workout-menu-desc">
            <h3>Powerlifting</h3>                                                           
            <p class="workout-detail">
            Explore powerlifting exercises.
            </p>
        </div>
	    <div class="clearfix"></div>
</div>
</a>

<?php include('partials/footer.php'); ?>
</div>
<!-- Workouts section end -->