<html lang="lt">
<head>
    <meta charset="UTF-8">

    <!-- Website responsive -->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title> SummerBod</title>

    <!-- Link CSS file -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nav.css'); ?>">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="259966255279-dc9bdnhj2f5jis8sinj1ub895oh3n9vs.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
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
                    <a href="<?php echo base_url('public/w_all_exercises'); ?>" class="dropbtn">WORKOUTS</a>
                        <div class="dropdown-content">
                            <a href="<?php echo base_url('public/warmups'); ?>">Warm-ups</a>
                            <a href="<?php echo base_url('public/t_all_techniques'); ?>">Exercise Techniques</a>
                            <a href="<?php echo base_url('public/w_all_exercises'); ?>">Muscle Groups</a>
                        </div>
                    </li>
                </ul>
            </div>
		
            <div class="clearfix"></div>
        </div> 
    </section>

<!--
    <div class="searchbar search"> 
            <form action="">
                <input type="search" name="search" placeholder="Search For Something..">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
            
            <div class="clearfix"></div>    
        </div> 
		-->
    <!-- Nav bar -->