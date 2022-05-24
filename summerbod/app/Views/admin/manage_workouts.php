<?php
    if ($_SERVER['CI_ENVIRONMENT'] == 'development') {
        include($_SERVER['DOCUMENT_ROOT'].'/summerbod/app/Views/partials/adminmenu.php');
    }
    else {
        include($_SERVER['DOCUMENT_ROOT'].'/app/Views/partials/adminmenu.php');
    }
?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">

<div class="content">

    <h1 style="margin-left: 1%;">All Workouts</h1>

    <div class="wrapper">

        <table>

            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Name</th>
                    <th scope="col">Difficulty</th>
                    <th scope="col">Description</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($workouts->getResultArray() as $wrkt) { ?>
  
                    <tr>
                        <td data-label="Id"><?php echo $wrkt['id']?></td>
                        <td data-label="Image"><?= '<img src=' .$wrkt["image"].' alt="" class="img-responsive img-curve img-explore-stretch" style="width:100%; height:100%; object-fit:contain;">'?></td>
                        <td data-label="Category"><?php echo $wrkt['category']?></td>
                        <td data-label="Name"><?php echo $wrkt['name']?></td>
                        <td data-label="Difficulty"><?php echo $wrkt['difficulty']?></td>
                        <td data-label="Description"><?php echo $wrkt['descr']?></td>
                        <td data-label="Remove"><a href="<?php  echo base_url("public/admin/manage_workouts/delete/". $wrkt['id']);?>" style="color:black; font-size:30px;">&#10060;</button></td>
                    </tr>
            
                <?php } ?>

            </tbody>

        </table>

        <div class="clearfix"></div>

    </div>
</div>

<?php
    if ($_SERVER['CI_ENVIRONMENT'] == 'development') {
        include($_SERVER['DOCUMENT_ROOT'].'/summerbod/app/Views/partials/footer.php');
    }
    else {
        include($_SERVER['DOCUMENT_ROOT'].'/app/Views/partials/footer.php');
    }
?>