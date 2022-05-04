<?php
    include('partials/menu_no_bar.php');

    $answers = array();
    $num = 0;

    foreach ($res->getResultArray() as $row) 
    {
        for ($i=1; $i<5; $i++) 
        {
            for ($x=1; $x<5; $x++) 
            {
                if ($_POST["answer".$i] == $row["choice_".$x]) 
                {
                    ($row["answer"] == $x)? $num++:"";
                }
            }

            if ($row["answer"] == $i) 
            {
                array_push($answers, $row["choice_".$i]);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Summerbod | Quiz Results</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/quiz.css'); ?>">
    </head>
    <body>
        <main>
            <div class="title">
                <h1>Test Your Fitness Knowledge</h1>
                <br>

                <hr>
                <h3>Results</h3>
                <hr>

                <h1 class="txtScore">Score: <?php echo ($num)." correct answers"; ?> Or <?php echo ($num*25)."%"; ?></h1>

                <div>
                    <p>Correct Answers:</p>
                    <?php echo json_encode($answers) ?>
                </div>

                <br>

                <div class="btnWrapper">
                    <a href="<?php echo base_url('public/home'); ?>" class="btnHalf btnEnd">Back to Homepage</a>
                    <a href="<?php echo base_url('public/quiz'); ?>" class="btnHalf btnEnd">Take the Quiz Again?</a>
                </div>
            </div>
        </main>
    </body>
    <?php include('partials/footer.php'); ?>
</html>