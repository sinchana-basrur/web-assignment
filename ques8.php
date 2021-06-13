<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
$nameErr=$fnmErr=$textErr=$numErr=$emailErr=$dobErr="";
$genErr=$hobErr=$perErr=$instErr=$crsErr=$ofrErr=$phErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  }
  if (empty($_POST["photo"])) {
    $phErr = "Photo is required";
  }
  if (empty($_POST["fname"])) {
    $fnmErr = "Name is required";
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
  if (empty($_POST["comment"])) {
    $textErr = "Address is required";
  }
  if (empty($_POST["contact"])) {
    $numErr = "contact number is required";
  }
  if (empty($_POST["dob"])) {
    $dobErr = "DOB is required";
  }
  if (empty($_POST["gender"])) {
    $genErr = "Gender is required";
  }
  if (empty($_POST["hobbies"])) {
    $hobErr = "Hobbies are required";
  }
  if (empty($_POST["perc"])) {
    $perErr = "Percentage is required";
  }
  if (empty($_POST["inst"])) {
    $instErr = "Institution is required";
  }
    $course=$_POST["offer"];
    $percent=$_POST["perc"];
    $degree=$_POST["course"];
    if(!(empty($_POST["course"]))&&!(empty($_POST["perc"])))
    {
    if($course=='MCA')
    {
      if(!($percent>=70))
      {
        $ofrErr="Percentage must be more than 70%";
      }
      if(!($degree=='BCA'||$degree=='BSc'))
      {
        $ofrErr="Course studied must be BCA or BSc";
      }
    }
    if($course=='MBA')
    {
      if(!($percent>=60))
      {
        $ofrErr="Percentage must be more than 60%";
      }
    }
    if($course=='MSc')
    {
      if(!($degree=='BCA'||$degree=='BSc'))
      {
        $ofrErr="Course studied must be BCA or BSc";
      }
    }
    if($course=='MTech')
    {
      if(!($degree=='BE'))
      {
        $ofrErr="Course studied must be BE";
      }
    }
  }
}
?>
<h2>Student Application Form</h2>
<form method="post" action="">
  Name: <input type="text" name="name" placeholder="First name">
  <input type="text" name="name" placeholder="Middle name">
  <input type="text" name="name" placeholder="Last name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Father Name: <input type="text" name="fname">
  <span class="error">* <?php echo $fnmErr;?></span>
  <br><br>
  Address: 
  <textarea name="comment" rows="5" cols="40"></textarea>
  <span class="error">* <?php echo $textErr;?></span>
  <br><br>
  Contact number: <input type="number" name="contact"></textarea>
  <span class="error">* <?php echo $numErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  DOB: <input type="date" name="dob">
  <span class="error">* <?php echo $dobErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genErr;?></span>
  <br><br>
  Hobbies: <input type="checkbox" name="hobbies" value="Reading">Reading
  <input type="checkbox" name="hobbies" value="Dancing">Dancing
  <input type="checkbox" name="hobbies" value="Drawing">Drawing
  <input type="checkbox" name="hobbies" value="Singing">Singing
  <span class="error">* <?php echo $hobErr;?></span>
  <br><br>
  Percentage in degree: <input type="text" name="perc">
  <span class="error">* <?php echo $perErr;?></span>
  <br><br>
  Institution studied: <input type="text" name="inst">
  <span class="error">* <?php echo $instErr;?></span>
  <br><br>
  Course Studied:
  <input type="radio" name="course" value="BCA" checked="checked">BCA
  <input type="radio" name="course" value="BSc">BSc
  <input type="radio" name="course" value="BCom">BCom
  <input type="radio" name="course" value="BE">BE
  <br><br>
  Courses Offered:<select name="offer">
		<option value="MCA">MCA</option>
		<option value="MBA">MBA</option>
		<option value="MTech">MTech</option>
        <option value="MSc">MSc</option>
	</select>
  <span class="error"><?php echo $ofrErr;?></span>
    <br><br>
    <label>Upload Your Image
		<input type="file" name="photo">
	</label><br>
  <span class="error">*<?php echo $phErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>