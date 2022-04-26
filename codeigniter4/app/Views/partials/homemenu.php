<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Website responsive -->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>SummerBod</title>

    <!-- Link CSS files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/homenav.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/account.css'); ?>">

    <link rel="icon" href="<?php echo base_url('public/favicon.ico'); ?>" type="image/gif">



</head>

<body>

    <!-- Nav bar -->
    <section class="nav text-center">
        <div class="menu-container">
            <a href="<?php echo base_url('public/home'); ?>">
        <?php include('base64/logo.php'); ?>
        </a>
			<div class="menu text-right">
                <ul>
					<li>
						<div id="google_translate_element"></div>

						<script type="text/javascript">
						function googleTranslateElementInit() {
							new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
						}
						</script>

						<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					</li>
                    <li><a id="accBtn" class=account-link style="cursor: pointer;" >ACCOUNT</a</li>
                    <li><a href="<?php echo base_url('public/home'); ?>">HOME</a></li>
					<li class="dropdown">
                    <a href="<?php echo base_url('public/health'); ?>" class="dropbtn">HEALTH</a>
                        <div class="dropdown-content">
                            <a href="<?php echo base_url('public/bmi_calc'); ?>">BMI calculator</a>
                            <a href="<?php echo base_url('public/injury_prevention'); ?>">Injury Prevention</a>
                            <a href="<?php echo base_url('public/injury_treatment'); ?>">Injury Treatment</a>
                        </div>
                    </li>
                    <li class="dropdown">
                    <a href="<?php echo base_url('public/Workouts/w_all_exercises'); ?>" class="dropbtn">WORKOUTS</a>
                        <div class="dropdown-content">
                            <a href="<?php echo base_url('public/warmups'); ?>">Warm-ups</a>
                            <a href="<?php echo base_url('public/Techniques/t_all_techniques'); ?>">Exercise Techniques</a>
                            <a href="<?php echo base_url('public/Workouts/w_all_exercises'); ?>">Muscle Groups</a>
                            <a href="<?php echo base_url('public/quiz'); ?>">Fitness Test</a>
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
            <li><a href="<?php echo base_url('public/injury_prevention'); ?>">Posture</a></li>
            <li><a href="<?php echo base_url('public/bodymass'); ?>">BMI</a></li>
            <li><a href="<?php echo base_url('public/injury_treatment'); ?>">Injury treatment</a></li>
            <li><a href="<?php echo base_url('public/injury_prevention'); ?>">Injury prevention</a></li>
            <li><a href="<?php echo base_url('public/warmups'); ?>">Warm-up</a></li>
            <li><a href="<?php echo base_url('public/Techniques/t_all_techniques'); ?>">Techniques</a></li>
        </ul>
    </div>

        <div class="clearfix"></div>


    </div>
    
<div id="login_modal" class="registration-popup-modal-container">

<div class="login-form">
  <form>
    <span id="close_modal" class="close">&#10006;</span>
    <br>
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="Email" autocomplete="off">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="current-password">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button>Register</button>
      <button>Sign in</button>
    </div>
  </form>
</div>
</div>



</div>
    <script src="<?php echo base_url('assets/js/search.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/login_modal.js'); ?>"></script>

