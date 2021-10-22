<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.err{
			color: red;
		}
	</style>
</head>
<body>

	<?php

	$nameErr = $emailErr = $genderErr = $dobErr = $degreeErr = $bloodgroupErr ="";
	$name = $email = $gender = $dob = $degree = $bloodgroup= "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	  } else if(strlen($_POST['name'])<2) {
        $nameErr = "  Name must be contained 2 character";
      }else {
	    $name = test_input($_POST["name"]);
	    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
	      $nameErr = "Only letters and white space allowed";
	    }
	  }

	  if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = test_input($_POST["email"]);
	    
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      $emailErr = "Invalid email format";
	    }
	  }
	  if (empty($_POST["degree"])) {
	    $degreeErr = "Degree is required";
	  } else {
	    $degree = test_input($_POST["degree"]);
	  }

	  if (empty($_POST["dob"])) {
	    $dobErr = "Dob is required";
	  } else {
	    $dob = test_input($_POST["dob"]);
	  }


	  	  
	  if (empty($_POST["gender"])) {
	    $genderErr = "Gender is required";
	  } else {
	    $gender = test_input($_POST["gender"]);
	  }

	  if (empty($_POST["bloodgroup"])) {
	    $bloodgroupErr = "bloodgroup is required";
	  } else {
	    $bloodgroup = test_input($_POST["bloodgroup"]);
	  }


	}


	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}



?>


	 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	 	<fieldset>
	 		<legend>
	 			<label for="name">Name</label>
	 		</legend>
	 		<input type="text" name="name">
	 	<span class="err">*
	 		<?php echo $nameErr;?>
	 	</span>	

	 	</fieldset>

	 	<fieldset>
	 		<legend>
	 			<label for="email">Email</label>
	 		</legend>

            <input type="text" name="email">
		<span class="err">*
	 		<?php echo $emailErr;?>
	 	</span>
	 	</fieldset>
	 	
         
		<fieldset>
      <legend>
        <label for="degree">Degree</label>
      </legend>
      <input type="checkbox" name="degree" value="ssc" id="ssc"><label for="ssc">Ssc</label>
      <input type="checkbox" name="degree" value="Hsc" id="Hsc"><label for="hsc"></label>
      <input type="checkbox" name="degree" value="bsc" id="bsc"><label for="bsc">Bsc</label>
      <input type="checkbox" name="degree" value="msc" id="msc"><label for="msc">Msc</label>
      <span class="err">*
      <?php echo $degreeErr;?></span>
    </fieldset>

    <fieldset>
      <legend>
        <label for="dob">Date of birth</label>
      </legend>
      <input type="date" name="dob" id="dob">
      <span class="err">*
      <?php echo $dobErr;?></span>
    </fieldset>


		<fieldset>
      <legend>
        <label for="gender">Gender</label>
      </legend>
      <input type="radio" name="gender" value="male" id="male"><label for="male">Male</label>
      <input type="radio" name="gender" value="female" id="female"><label for="female">Female</label>
      <input type="radio" name="gender" value="other" id="other"><label for="other">Other</label>
      <span class="err">*
      <?php echo $genderErr;?></span>
    </fieldset>
		  <fieldset>
      <legend>
        <label for="bloodgroup">Blood Group</label>
      </legend>
      <select name="bloodgroup" id="bloodgroup">
        <option selected></option>
        <option value="a+">A+</option>
        <option value="b+">B+</option>
        <option value="a-">A-</option>
        <option value="b-">B-</option>
        <span class="err">*
      <?php echo $bloodgroupErr;?></span>
      </select>
    </fieldset>
	 	<input type="submit" value="Submit">
	 </form>

	 
</body>
</html>