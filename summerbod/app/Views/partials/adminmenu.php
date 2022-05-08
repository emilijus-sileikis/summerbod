<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>SummerBod | Admin</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/homenav.css'); ?>">

    <link rel="icon" href="<?php echo base_url('public/favicon.ico'); ?>" type="image/gif">



</head>

<body>

    <section class="nav text-center">
        <div class="menu-container">
            <a href="<?php echo base_url('public/home'); ?>"><?php include('base64/logo.php'); ?></a>
			<div class="menu text-right">
                <ul>

                    <li><a href="<?= site_url('public/logout') ?>">Logout</a></li>
                    <li><a href="<?php echo base_url('public/admin/manage_quiz'); ?>">Quiz</a></li>
                    <li><a href="<?php echo base_url('public/admin/manage_users'); ?>">Users</a></li>
                    <li><a href="<?php echo base_url('public/admin/manage_workouts'); ?>">Workouts</a></li>
                    <li><a href="<?php echo base_url('public/admin/manage_user_workouts'); ?>">User_Workouts</a></li>

                </ul>
            </div>
		
            <div class="clearfix"></div>
            
        </div> 
    </section>