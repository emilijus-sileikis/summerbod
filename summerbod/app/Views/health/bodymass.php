<link rel = "stylesheet" href = "<?php echo base_url('assets/css/bmi.css'); ?>">

<div class="bmicontainer">
  <h2 class="text-center text-white">BMI Calculator</h2>

  <div class = "main-wrapper">

    <div class = "bmi-heads">

      <div id = "bmi-si-head" class = "bmi-head active-head">
        <h2 class = "text-white">Metric</h2>
      </div>

		  <div id = "bmi-usc-head" class = "bmi-head">
        <h2 class = "text-white">Imperial</h2>
      </div>

    </div>

    <div class="bmi-contents">
          
		  <!-- bmi metric units -->
      <div class = "bmi-content" id = "bmi-si">

        <form>

          <div class = "form-group">
            <p>Age</p>
            <input type = "text" class = "form-control" placeholder="1 - 120" id = "age2" onkeypress="return isNumberKey(event)" maxlength="3">
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
            <input type = "text" class = "form-control" id = "cm" placeholder="cm" onkeypress="return isNumberKey(event)" maxlength="5">
          </div>

          <div class = "form-group">
            <p>Weight</p>
            <input type = "text" class = "form-control" id = "kg" placeholder="kg" onkeypress="return isNumberKey(event)" maxlength="4">
          </div>

        </form>

      </div>
		  
      <!-- bmi us units -->
      <div class = "bmi-content" id = "bmi-usc">
      
        <form>

          <div class = "form-group">
            <p>Age</p>
            <input type = "text" class = "form-control" placeholder="1 - 120" id = "age1" onkeypress="return isNumberKey(event)" maxlength="3">
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
            <input type = "text" class = "form-control" id = "feet" placeholder="feet" onkeypress="return isNumberKey(event)" maxlength="1">
            <input type = "text" class = "form-control" id = "inches" placeholder="inches" onkeypress="return isNumberKey(event)" maxlength="2">
          </div>

          <div class = "form-group">
            <p>Weight</p>
            <input type = "text" class = "form-control" id = "pounds" placeholder="pounds" onkeypress="return isNumberKey(event)" maxlength="4">
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
      <span class = "alert-error alert-error-age">Please provide a valid age!</span>
      <span class = "alert-error alert-error-height">Please provide a valid height!</span>
      <span class = "alert-error alert-error-weight">Please provide a valid weight!</span>

      <div class = "bmi-output">
        <h3 id = "bmi-value"></h3>
        <p id = "bmi-category"></p>
      </div>

    </div>

  </div>

  <div class="clearfix"></div>

</div>

<script src = "<?php echo base_url('assets/js/bmi.js'); ?>"></script>