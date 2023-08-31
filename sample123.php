<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<form name="insert" method="POST" action="inserty.php">
 <div class="form-group">
    <label for="text">Company Name:</label>
    <input type="text" name="company_name" placeholder="company name" required>
  </div>
	<div class="form-group">
    <label for="text">First Name:</label>
    <input type="text" name="first_name" placeholder=" first Name" required>
  </div>
	<div class="form-group">
    <label for="text">Last Name:</label>
    <input type="text" name="last_name" placeholder="last  Name" required>
  </div>
  <div class="form-group">
    <label for="text">email:</label>
    <input type="email" name="email" placeholder="email" required>
  </div>
<div class="form-group">
    <label for="text">Gender:</label>
    <input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
</div>
	<div class="form-group">
    <label for="text">Upload:</label>
   Upload cv:<input type="file" name="file" />
</div>
<div class="form-group">
    <input type="submit" name="insert_button" value="Insert Record" required>
</div>
	
</form>
    </body>

</html>