<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Website responsive -->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title> SummerBod</title>

    <!-- Link CSS files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nav.css'); ?>">
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