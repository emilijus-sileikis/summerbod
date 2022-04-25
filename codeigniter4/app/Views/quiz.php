<?php
    include('partials/menu_no_bar.php');
    include "connection.php";
	$conn = OpenCon();
   
    $stmt = $conn->prepare("SELECT * FROM `data` ORDER BY RAND()");
    $stmt->execute();
    $res = $stmt->get_result();
    $links = $slides = $options = $choices = "";
    if ($res->num_rows > 0) {
        $num = 0;
        while ($row = $res->fetch_assoc()) {
            $num++;
            $links .= '<a href="#slide-'.$num.'">'.$num.'</a>';
            
            $con1 = [1,2,3,4];
            shuffle($con1);
            for ($i=1; $i <= 4; $i++) { 
                $choice = "choice_".$con1[$i-1];
                ($i == 1)? $required="required":"";
                $options .= '
                            <input type="hidden" name="qid'.$num.'" value="'.$row["id"].'">
                            <label class="option option-'.$i.'">
                                <input type="radio" name="answer'.$num.'" class="optionbox" id="option-'.$num.$i.'" value="'.$row[$choice].'" '.$required.'>
                                <span>'.wordwrap($row[$choice], 25, "<br />\n").'</span>
                            </label>';
            }

            $slides .= '
                <div id="slide-'.$num.'">
                    <table>
                        <tr>
                            <td colspan="2">   
                                <div class="titleblock">Question #'.$num.'</div>
                                <textarea name="txtQuestion'.$row["id"].'" rows="5" placeholder="Enter question #'.$row["id"].' here..." disabled required>'.$row["question"].'</textarea>
                                <div class="images">

                                    <img src=data:image/gif;base64,' . base64_encode($row["quiz_image"]) .' loop=infinite> 
                                    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="wrapper">
                                    '.$options.'
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            ';
            $options = $choices = "";
        }
    } else {
        header("Location: home.php");
    }
    CloseCon($conn);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Summerbod | Fitness Quiz</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/quiz.css'); ?>">
    </head>
    <body>
        <main>
            <form method="post" action="<?php echo base_url('public/result'); ?>">
                <div class="slider">
                    <div class="slides">
                        <?php echo $slides; ?>
                    </div>
                    
                    <a href="#slide-1" class="btnNext" id="nextbtn">Next</a>
                    <button type="submit" name="btnSubmit" class="btnSubmit">Submit</button>

                    <script>
                    document.getElementById('nextbtn').addEventListener('click', function(e) {
                    var n = e.target.href.split('-')[1] * 1 + 1;
                    if (n > 4)
                    n = 1;
                    e.target.href = e.target.href.split('-')[0] + '-' + n;
                    }, false);
                    </script>

                </div>
            </form>
        </main>
    </body>
</html>