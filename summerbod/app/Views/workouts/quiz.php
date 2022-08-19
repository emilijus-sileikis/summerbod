<?php echo view('partials/menu_no_bar'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/quiz.css'); ?>">

<?php

    $res = $results->getResultArray();
    $links = $slides = $options = $choices = "";
    $num = 0;

    foreach ($res as $row) 
    {
        $num++;
        $links .= '<a href="#slide-'.$num.'">'.$num.'</a>';
            
        $con1 = [1,2,3,4];
        shuffle($con1);

        for ($i=1; $i <= 4; $i++) 
        { 
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
        <div id="slide-'.$num.'" style="margin-top: 110px;">
            <table>
                <tr>
                    <td colspan="2">   
                        <div class="titleblock">Question #'.$num.'</div>
                            <textarea name="txtQuestion'.$row["id"].'" rows="5" placeholder="Enter question #'.$row["id"].' here..." disabled required>'.$row["question"].'</textarea>
                            <div class="images">

                                <img src=' .$row["image"].' alt="" style="max-height: 350px; max-width: 400px;"> 
                                    
                            </div>
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
?>
            
    <form method="post" action="<?php echo base_url('public/result'); ?>">
        
        <div class="slider">
                    
            <div class="links">
                <?php echo $links; ?>
            </div>
                    
            <div class="slides">
                <?php echo $slides; ?>
            </div>
                    
            <button type="submit" name="btnSubmit" class="btnSubmit" id="quizbtnn">Submit</button>
        </div>
    </form>