<?php
    include('partials/menu_no_bar.php');
    include "connection.php";
    $conn = OpenCon();
    
    $key = [];
    $num = 0;
    if(isset($_POST["btnSubmit"])) {
        for ($i=1; $i < 5; $i++) { 
            $stmt = $conn->prepare("SELECT * FROM `data` WHERE `id`=?");
            $stmt->bind_param("i", $_POST["qid".$i]);
            $stmt->execute();
            $res = $stmt->get_result();
            while ($row = $res->fetch_assoc()){
                for ($x=1; $x < 5; $x++) {
                    if ($_POST["answer".$i] == $row["choice_".$x]) {
                        ($row["answer"] == $x)? $num++:"";
                    }
                }
            }
            $stmt->close();
        }
    }
    $conn->close();
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
                <h3>Result</h3>
                <hr>

                <h1 class="txtScore">Score: <?php echo ($num)." correct answers"; ?> Or <?php echo ($num*25)."%"; ?></h1>

                <div class="btnWrapper">
                    <a href="<?php echo base_url('public/home'); ?>" class="btnHalf btnSubmit">Back to Homepage</a>
                    <a href="<?php echo base_url('public/quiz'); ?>" class="btnHalf btnQuiz">Take the Quiz Again?</a>
                </div>
            </div>
        </main>
    </body>
    <?php include('partials/footer.php'); ?>
</html>