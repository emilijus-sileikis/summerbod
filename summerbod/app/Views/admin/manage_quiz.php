<?php echo view('partials/adminmenu'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">

<div class="content">

    <h1 style="margin-left: 1%;">All Questions</h1>

    <a href="<?= base_url('public/admin/dashboard') ?>" class="adminbtn" style="margin-left: 10px;">Dashboard</a>

    <div class="wrapper">

        <table>

            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Question</th>
                    <th scope="col">Image</th>
                    <th scope="col">Op. 1</th>
                    <th scope="col">Op. 2</th>
                    <th scope="col">Op. 3</th>
                    <th scope="col">Op. 4</th>
                    <th scope="col">Answer</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($questions->getResultArray() as $quiz) { ?>
  
                    <tr>
                        <td data-label="Id"><?php echo $quiz['id']?></td>
                        <td data-label="Question"><?php echo $quiz['question']?></td>

                        <?php $image = '<img src=' .$quiz['image'].' alt="" class="img-responsive img-curve img-explore-stretch" style="width:100%; height:100%; object-fit:contain;">';?>
                        
                        <td data-label="Image"><?php echo $image ?></td>
                        <td data-label="Op. 1"><?php echo $quiz['choice_1']?></td>
                        <td data-label="Op. 2"><?php echo $quiz['choice_2']?></td>
                        <td data-label="Op. 3"><?php echo $quiz['choice_3']?></td>
                        <td data-label="Op. 4"><?php echo $quiz['choice_4']?></td>
                        <td data-label="Answer"><?php echo $quiz['answer']?></td>
                        <td data-label="Remove"><a href="<?php  echo base_url("public/admin/manage_quiz/delete/". $quiz['id']);?>" style="color:black; font-size:30px;">&#10060;</a></td>
                    </tr>
            
                <?php } ?>

            </tbody>

        </table>

        <div class="clearfix"></div>

    </div>
</div>

<?php echo view('partials/footer'); ?>