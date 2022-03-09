<?php include('partials/menu.php'); ?>
<!-- Health section start -->
<link rel="stylesheet" href="css/cat.css">
<link rel = "stylesheet" href = "css/bmi.css">
<section class="category">
        <div class="bmicontainer">
            <h2 style="color: #F5F5F5" class="text-center text-white">Body Mass Index (BMI)</h2>

            <div class = "main-wrapper">
        <div class = "bmi-heads">
          <div id = "bmi-si-head" class = "bmi-head active-head">
            <h2 style="color: #F5F5F5" class = "text-white">Metric</h2>
          </div>
		  <div id = "bmi-usc-head" class = "bmi-head">
            <h2 style="color: #F5F5F5" class = "text-white">US Units</h2>
          </div>
        </div>

        <div class="bmi-contents">
		<!-- bmi metric units -->
          <div class = "bmi-content" id = "bmi-si">
            <form>
              <div class = "form-group">
                <p>Age</p>
                <input type = "text" class = "form-control" placeholder="2 - 120" id = "age2">
              </div>

              <div class = "form-group col-3">
                <p>Gender</p>
                <div>
                  <input type = "radio" name = "gender" id = "male" value = "male" checked>
                  <label for = "male">Male</label>
                </div>

                <div>
                  <input type = "radio" name = "gender" id = "female" value = "female">
                  <label for = "female">Female</label>
                </div>
              </div>

              <div class = "form-group">
                <p>Height</p>
                <input type = "text" class = "form-control" id = "cm" placeholder="cm">
              </div>

              <div class = "form-group">
                <p>Weight</p>
                <input type = "text" class = "form-control" id = "kg" placeholder="kg">
              </div>
            </form>
          </div>
		  
          <!-- bmi us units -->
          <div class = "bmi-content" id = "bmi-usc">
            <form>
              <div class = "form-group">
                <p>Age</p>
                <input type = "text" class = "form-control" placeholder="2 - 120" id = "age1">
              </div>

              <div class = "form-group col-3">
                <p>Gender</p>
                <div>
                  <input type = "radio" name = "gender" id = "male" value = "male" checked>
                  <label for = "male">Male</label>
                </div>
                <div>
                  <input type="radio" name = "gender" id = "female" value = "female">
                  <label for = "female">Female</label>
                </div>
              </div>

              <div class = "form-group col-3">
                <p>Height</p>
                <input type = "text" class = "form-control" id = "feet" placeholder="feet">
                <input type = "text" class = "form-control" id = "inches" placeholder="inches">
              </div>

              <div class = "form-group">
                <p>Weight</p>
                <input type = "text" class = "form-control" id = "pounds" placeholder="pounds">
              </div>
            </form>
          </div>
        </div>

        <div class = "btns">
          <button type = "button" id = "calc-btn" class = "btn">Calculate</button>
          <button type = "button" id = "clr-btn" class = "btn">Clear</button>
        </div>

        <div class = "output">
          <span class = "alert-error">Missing Input!</span>
          <div class = "bmi-output">
            <h3 id = "bmi-value"></h3>
            <p id = "bmi-category"></p>
            <p id = "bmi-gender"></p>
          </div>
        </div>
      </div>

            <div class="clearfix"></div>
        </div>
        <script src = "js/bmi.js"></script>
    </section>
    <!-- Health section end -->
    <?php include('partials/footer.php'); ?>