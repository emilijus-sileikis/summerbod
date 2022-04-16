<?php include('partials/menu_no_bar.php'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/quizzes.css'); ?>">


    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
          <h2 id="question">Question Text</h2>
          <ul>
            <li>
              <input type="radio" name="answer" id="a" class="answer">
              <label for="a" id="a_text">Answer</label>
            </li>

            <li>
              <input type="radio" name="answer" id="b" class="answer">
              <label for="b" id="b_text">Answer</label>
            </li>

            <li>
              <input type="radio" name="answer" id="c" class="answer">
              <label for="c" id="c_text">Answer</label>
            </li>

            <li>
              <input type="radio" name="answer" id="d" class="answer">
              <label for="d" id="d_text">Answer</label>
            </li>

          </ul>
        </div>

        <button id="submit">Submit</button>

      </div>

<script src="<?php echo base_url('assets/js/quizzes.js'); ?>"></script>

