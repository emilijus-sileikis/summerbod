<?php echo view('partials/menu_no_bar'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/quiz.css'); ?>">

<?php

    $coranswers = array();
    $incanswers = array();
    $num = 0;

    foreach ($res->getResultArray() as $row) 
    {
        for ($i=1; $i<5; $i++) 
        {
            for ($x=1; $x<5; $x++) 
            {
                if ($_POST["answer".$i] == $row["choice_".$x]) 
                {
                    if ($row["answer"] == $x)
                    {
                        $num++;
                        array_push($coranswers, $row["choice_".$x]);
                    }
                    else
                    {
                        array_push($incanswers, $row["choice_".$x]);
                    }
                }
            }
        }
    }
?>

<div class="title">

    <h1 class="txtScore">Score: <?php echo ($num)." correct answers"; ?> Or <?php echo ($num*25)."%"; ?></h1>

    <div style="margin-left: 1%; font-size: 20px;">
        
        <p>Correct Answers:</p>
        <br>
        <div style="color: green;">
            <?php foreach ($coranswers as $cor) 
                echo $cor . ";" . "<br>";
            ?>
        </div>
        
        <br><br><br>
                    
        <p>Incorrect Answers:</p>
        <br>
        <div style="color: red;">
            <?php foreach ($incanswers as $inc) 
                echo $inc . ";" . "<br>";
            ?>
        </div>

        <br>

        <div class="btnWrapper">
            <a href="<?php echo base_url('public/home'); ?>" class="btnHalf btnEnd">Back to Homepage</a>
            <a href="<?php echo base_url('public/quiz'); ?>" class="btnHalf btnEnd">Take the Quiz Again?</a>
        </div>
    </div>
</div>

<?php echo view('partials/footer'); ?>
