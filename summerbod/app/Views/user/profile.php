<?php echo view('partials/menu_no_bar'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/account.css'); ?>">

<div class="card">

  <div class="card-container">
    <h1>Hi, <?= $user['name'] ?>!</h1>
    <p class="title">Here you can check your basic information, create an exercise or check your favorite workouts.</p> <br><br>
    <h1>About:</h1>
    <p>Name: <?= $user['name'] ?></p>
    <p>Email: <?= $user['email'] ?></p>
    <p>Created At: <?= $user['created_at'] ?></p> <br><br>
    <button class="open-button" onclick="openForm()">Create an exercise</button>
    <p><a href="<?= base_url('public/favorites') ?>">Your favorites</a></p> <br>
    <h3><a href="<?= base_url('public/logout') ?>">Logout</a></h3>
  </div>

</div>

<div class="exsection">

  <h2 class="workout-header">Your Created Exercises</h2>

  <div id="err" style="color: red; font-size: 15px; list-style-position: inside;">
    <?= \Config\Services::validation()->listErrors(); ?>
  </div>

  <?php foreach ($workouts->getResultArray() as $workout) { ?>

    <div class="workout-menu-box">

      <a href="<?php  echo base_url("public/profile/delete/". $workout['user_workoutid']);?>" style="float: right;">&#10060;</a>

      <div class="workout-menu-img">
        <?= '<img src=' .$workout["user_image"].' alt="" class="img-responsive img-curve">'?>
      </div>

      <div class="workout-menu-desc">

        <h3><?php echo $workout["user_name"]; ?></h3>	
        <p class="workout-detail">
          Muscle group: <?php echo $workout["user_category"]; ?><br> <br>
          Difficulty: <?php echo $workout["user_difficulty"]; ?><br> <br>
          Description: <?php echo $workout["user_descr"]; ?>
        </p>
      
      </div>

      <div class="clearfix"></div>

    </div>

  <?php } ?>

  <?php if(empty($workout)) {
    echo "You do not have any created exercises yet!";
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
  }?>

</div>

<div class="form-popup" id="exForm">

  <form method="post" action="<?= base_url('public/profile/add') ?>" enctype="multipart/form-data" class="form-container">

    <h2>Add Exercise</h2>

    <label for="cat">Category:</label>
    <select name="cat" id="cat" required>
	    <option value="">--- Choose muscle group ---</option>
	    <option value="Traps">Traps</option>
	    <option value="Traps mid-back">Traps mid-back</option>
	    <option value="Shoulders">Shoulders</option>
      <option value="Chest">Chest</option>
      <option value="Biceps">Biceps</option>
      <option value="Forearms">Forearms</option>
      <option value="Abdominals">Abdominals</option>
      <option value="Quads">Quads</option>
      <option value="Calves">Calves</option>
      <option value="Triceps">Triceps</option>
      <option value="Lats">Lats</option>
      <option value="Lower-back">Lower-back</option>
      <option value="Glutes">Glutes</option>
      <option value="Hamstrings">Hamstrings</option>
    </select>

    <br> <br>

    <label for="exName">Name:</label>
	  <input type="text" name="exName" id="exName" class="form-control" placeholder="Enter Exercise Name" required />

    <label for="descr">Description:</label>
		<input type="text" name="descr" id="descr" class="form-control" placeholder="Enter A Short Description" required />	  

    <label for="diff">Difficulty:</label>
    <select name="diff" id="diff" required>
	    <option value="">--- Choose the difficulty ---</option>
	    <option value="Beginner">Beginner</option>
	    <option value="Intermediate">Intermediate</option>
	    <option value="Hard">Hard</option>
    </select>

    <br> <br>

    <label for="image">Image</label>
    <input type="file" name="image" id="image" class="form-control" accept=".png, .jpg, .jpeg, .gif" required />

    <br> <br>


		<input type="submit" value="Add" name="btnadd" class="form-btn" />
    <button type="button" class="form-btn cancel" onclick="closeForm()">Close</button>

  </form>
</div>

<script src="<?php echo base_url('assets/js/ex_modal.js'); ?>"></script>
<script> window.setTimeout("document.getElementById('err').style.display='none';", 4000); </script>

<?php echo view('partials/footer'); ?>