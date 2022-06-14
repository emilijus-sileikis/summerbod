<?php echo view('partials/adminmenu'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">

<div class="content">

    <h1 style="margin-left: 1%;">All Workouts</h1>

    <a href="<?= base_url('public/admin/dashboard') ?>" class="adminbtn" style="margin-left: 10px;">Dashboard</a>

    <div style="margin-left: 1%;">
        <?php echo session("message"); ?>
    </div>

    <div class="wrapper">

        <table>

            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Author</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Name</th>
                    <th scope="col">Difficulty</th>
                    <th scope="col">Description</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($usr_wrkt->getResultArray() as $user) { ?>
  
                    <tr>
                        <td data-label="Id"><?php echo $user['user_workoutid']?></td>
                        <td data-label="Author"><?php echo $user['name']?></td>
                        <td data-label="Image"><?= '<img src=' .$user["user_image"].' alt="" class="img-responsive img-curve img-explore-stretch" style="width:100%; height:100%; object-fit:contain;">'?></td>
                        <td data-label="Category"><?php echo $user['user_category']?></td>
                        <td data-label="Name"><?php echo $user['user_name']?></td>
                        <td data-label="Difficulty"><?php echo $user['user_difficulty']?></td>
                        <td data-label="Description"><?php echo $user['user_descr']?></td>
                        <td data-label="Remove"><a href="<?php  echo base_url("public/admin/manage_user_workouts/delete/". $user['user_workoutid']);?>" style="color:black; font-size:30px;">&#10060;</a></td>
                    </tr>
            
                <?php } ?>

            </tbody>

        </table>

        <div class="clearfix"></div>

    </div>
</div>

<?php echo view('partials/footer'); ?>