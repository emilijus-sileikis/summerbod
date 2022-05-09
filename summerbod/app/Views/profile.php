<?php echo view('partials/menu_no_bar'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/account.css'); ?>">

<div class="card" style="margin-top:10%;">
    <div>
        <h1>Hi, <?= $user['name'] ?>!</h1>
        <p class="title">Here you can check your basic information, create an exercise or check your favorite workouts.</p> <br><br>
        <h1>About:</h1>
        <p>Name: <?= $user['name'] ?></p>
        <p>Email: <?= $user['email'] ?></p>
        <p>Created At: <?= $user['created_at'] ?></p> <br><br>
        <button class="open-button" onclick="openForm()">Create an exercise</button>
        <p><a href="#">Your favorites</a></p> <br>
        <h3><a href="<?= site_url('public/logout') ?>">Logout</a></h3>
    </div>
</div>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Add Exercise</h1> <br>

    <label for="difficulty">Category:</label>
    <select name="color" id="color">
	    <option value="">--- Choose muscle group ---</option>
	    <option value="traps">Traps</option>
	    <option value="traps m-b">Traps mid-back</option>
	    <option value="shoulders">Shoulders</option>
        <option value="chest">Chest</option>
        <option value="biceps">Biceps</option>
        <option value="forearms">Forearms</option>
        <option value="abdominals">Abdominals</option>
        <option value="quads">Quads</option>
        <option value="calves">Calves</option>
        <option value="triceps">Triceps</option>
        <option value="lats">Lats</option>
        <option value="lowerback">Lower-back</option>
        <option value="glutes">Glutes</option>
        <option value="hamstrings">Hamstrings</option>
    </select>

    <br><br>

    <label for="name"><b>Name:</b></label>
    <input type="text" placeholder="Enter Exercise Name" name="name" required>

    <br>

    <label for="difficulty">Difficulty:</label>
    <select name="color" id="color">
	    <option value="">--- Choose the difficulty ---</option>
	    <option value="beginner">Beginner</option>
	    <option value="intermediate">Intermediate</option>
	    <option value="hard">Hard</option>
    </select>

    <br><br>


    <label for="image">Image:</label>
    <input type="file" name="fileToUpload" id="fileToUpload">

    <br><br>

    <button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<?php echo view('partials/footer'); ?>