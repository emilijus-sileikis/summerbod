<?php echo view('partials/adminmenu'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">

<div class="content">

    <h1 style="margin-left: 1%;">All Users</h1>

    <div style="margin-left: 1%;">
        <?php echo session("message"); ?>
    </div>

    <div class="wrapper">

        <table>

            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($users->getResultArray() as $user) { ?>
  
                    <tr>
                        <td data-label="Id"><?php echo $user['id']?></td>
                        <td data-label="Name"><?php echo $user['name']?></td>
                        <td data-label="Email"><?php echo $user['email']?></td>
                        <td data-label="Created At"><?php echo $user['created_at']?></td>
                        <td data-label="Remove"><a href="<?php  echo base_url("public/admin/manage_users/delete/". $user['id']);?>" style="color:black; font-size:30px;">&#10060;</button></td>
                    </tr>
            
                <?php } ?>

            </tbody>

        </table>

        <div class="clearfix"></div>

    </div>
</div>

<?php echo view('partials/footer'); ?>