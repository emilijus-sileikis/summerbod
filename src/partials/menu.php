<html lang="lt">
<head>
    <meta charset="UTF-8">

    <!-- Website responsive -->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title> SummerBod</title>

    <!-- Link CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="259966255279-dc9bdnhj2f5jis8sinj1ub895oh3n9vs.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>

    <!-- Nav bar -->
    <section class="nav text-center">
        <div class="menu-container">
        <?php include('images/logo.php'); ?>
			<div class="menu text-right">
                <ul>
                    <li><a href="sign-in.php">ACCOUNT</a></li>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="health.php">HEALTH</a></li>
                    <li class="dropdown">
                    <a class="dropbtn">WORKOUTS</a>
                        <div class="dropdown-content">
                            <a href="#">Warm-up</a>
                            <a href="#">Powerlifting</a>
                            <a href="#">Calisthenics</a>
                        </div>
                    </li>
                </ul>
            </div>
		
            <div class="clearfix"></div>
        </div>

        <div class="search">
            <form action="">
                <input type="search" name="search" placeholder="Search For Something..">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
            
            <div class="clearfix"></div>    
        </div> 
    </section>
    <!-- Nav bar -->