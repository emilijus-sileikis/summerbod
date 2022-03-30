<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Website responsive -->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title> SummerBod</title>

    <!-- Link CSS files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/homenav.css'); ?>">
</head>

<body>

    <!-- Nav bar -->
    <section class="nav text-center">
        <div class="menu-container">
        <?php include('base64/logo.php'); ?>
			<div class="menu text-right">
                <ul>
                    <li><a href="<?php echo base_url('public/sign_in'); ?>">ACCOUNT</a></li>
                    <li><a href="<?php echo base_url('public/home'); ?>">HOME</a></li>
                    <li><a href="<?php echo base_url('public/health'); ?>">HEALTH</a></li>
                    <li class="dropdown">
                    <a href="<?php echo base_url('public/Workouts/w_all_exercises'); ?>" class="dropbtn">WORKOUTS</a>
                        <div class="dropdown-content">
                            <a href="<?php echo base_url('public/warmups'); ?>">Warm-ups</a>
                            <a href="<?php echo base_url('public/Techniques/t_all_techniques'); ?>">Exercise Techniques</a>
                            <a href="<?php echo base_url('public/Workouts/w_all_exercises'); ?>">Muscle Groups</a>
                        </div>
                    </li>
                </ul>
            </div>
		
            <div class="clearfix"></div>
        </div> 
    </section>

    <div class="searchbar search">

    <input type="text" id="searchInput" onkeydown="return /[a-z]/i.test(event.key)" maxlength="20" onkeyup="filter()" placeholder="Search For Something..">
    <input type="submit" id="clearBtn" value="Clear" class="btn btn-primary">
      
    <div class="list">
        <ul id="searchUL">
            <li><a href="<?php echo base_url('public/Workouts/w_traps'); ?>">Traps</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_traps_midback'); ?>">Traps mid-back</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_shoulders'); ?>">Shoulders</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_chest'); ?>">Chest</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_biceps'); ?>">Biceps</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_forearms'); ?>">Forearms</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_abdominals'); ?>">Abdominals</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_quads'); ?>">Quads</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_calves'); ?>">Calves</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_triceps'); ?>">Triceps</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_lats'); ?>">Lats</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_lowerback'); ?>">Lower-back</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_glutes'); ?>">Glutes</a></li>
            <li><a href="<?php echo base_url('public/Workouts/w_hamstrings'); ?>">Hamstrings</a></li>
            <li><a href="<?php echo base_url('public/Techniques/t_calisthenics'); ?>">Calisthenics</a></li>
            <li><a href="<?php echo base_url('public/Techniques/t_powerlifting'); ?>">Powerlifting</a></li>
            <li><a href="#">Posture</a></li>
            <li><a href="#">BMI</a></li>
            <li><a href="#">Injury treatment</a></li>
            <li><a href="#">Injury prevention</a></li>
            <li><a href="<?php echo base_url('public/warmups'); ?>">Warm-up</a></li>
            <li><a href="<?php echo base_url('public/Techniques/t_all_techniques'); ?>">Techniques</a></li>
        </ul>
    </div>

        <div class="clearfix"></div>    
    </div>

    <script src="<?php echo base_url('assets/js/search.js'); ?>"></script>
    <!-- Nav bar -->