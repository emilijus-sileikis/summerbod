<?php echo view('partials/adminmenu'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">

<div class="content">

    <div class="wrapper">

        <h1>Dashboard</h1>

        <a href="<?php echo base_url('public/admin/manage_quiz'); ?>">

            <div class="col-4 text-center">
                <h1><?php echo $quiz->getNumRows(); ?></h1>
                <br>
                 Quiz
            </div>

        </a>

        <a href="<?php echo base_url('public/admin/manage_users'); ?>">

            <div class="col-4 text-center">
                <h1><?php echo $users->getNumRows(); ?></h1>
                <br>
                Users
            </div>

        </a>
                
        <a href="<?php echo base_url('public/admin/manage_workouts'); ?>">

            <div class="col-4 text-center">
                <h1><?php echo $workouts->getNumRows(); ?></h1>
                <br>
                Workouts
            </div>

        </a>

        <a href="<?php echo base_url('public/admin/manage_user_workouts'); ?>">

            <div class="col-4 text-center">
                <h1><?php echo $usr_wrkt->getNumRows(); ?></h1>
                <br>
                User_Workouts
            </div>

        </a>
        <div class="clearfix"></div>

    </div>
</div>

<?php echo view('partials/footer'); ?>