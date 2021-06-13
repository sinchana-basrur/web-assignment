<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
$nameErr=$phErr=$enoErr=$textErr=$genErr=$desErr=$numErr=$catErr=$hrsErr=$salErr="";
$eno=$fname=$lname=$addrs=$gender=$desig=$phone=$categ=$hours=$salary="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
  }
  if (empty($_POST["lname"])) {
    $nameErr = "Name is required";
  }
  if (empty($_POST["eno"])) {
    $enoErr = "Employee number is required";
  }
  if (empty($_POST["comment"])) {
    $textErr = "Address is required";
  }
  if (empty($_POST["phone"])) {
    $numErr = "Phone number is required";
  }
  if (empty($_POST["desig"])) {
    $desErr = "Designation is required";
  }
  if (empty($_POST["hours"])) {
    $hrsErr = "Number of hours is required";
  }
  if (empty($_POST["salary"])) {
    $salErr = "Salary is required";
  }
  if (empty($_POST["photo"])) {
    $phErr = "Photo is required";
  }
    $eno=$_POST["eno"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $addrs=$_POST["comment"];
    $gender=$_POST["gender"];
    $desig=$_POST["desig"];
    $phone=$_POST["phone"];
    $categ=$_POST["categ"];
    $hours=$_POST["hours"];
    $salary=$_POST["salary"];
}
?>
<h2>Employee Information</h2>
<form method="post" action="">
  EmpNo: <input type="number" name="eno">
  <span class="error">* <?php echo $enoErr;?></span>
  <br><br>
  Name: <input type="text" name="fname" placeholder="First name">
  <input type="text" name="lname" placeholder="Last name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Address: <textarea name="comment" rows="5" cols="40"></textarea>
  <span class="error">* <?php echo $textErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="Female" checked="checked">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Other">Other
  <br><br>
  Designation: <input type="text" name="desig">
  <span class="error">* <?php echo $desErr;?></span>
  <br><br>
  Phone number: <input type="number" name="phone">
  <span class="error">* <?php echo $numErr;?></span>
  <br><br>
  Emp Category: <input type="checkbox" name="categ" value="Full Time" checked="checked">Full Time
  <input type="checkbox" name="hobbies" value="Part Time">Part Time
  <input type="checkbox" name="hobbies" value="Contract">Contract
  <br><br>
  Number of hours: <input type="number" name="hours">
  <span class="error">* for categoty is part time</span>
  <br><br>
  Basic Salary: <input type="number" name="salary">
  <span class="error">* <?php echo $salErr;?></span>
  <br><br>
    <label>Upload Your Image
		<input type="file" name="profile_image">
	</label>
    <span class="error">*<?php echo $phErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
echo "Emp No:       $eno";
echo "<br>";
echo "First name:     $fname";
echo "<br>";
echo "Last name:     $lname";
echo "<br>";
echo "Address:      $addrs";
echo "<br>";
echo "Gender:       $gender";
echo "<br>";
echo "Designation:  $desig";
echo "<br>";
echo "Phone number:  $phone";
echo "<br>";
echo "Emp Category:  $categ";
echo "<br>";
echo "No. of hours:  $hours";
echo "<br>";
echo "Basic Salary:  $salary";
echo "<br>";
if($categ=='Part Tme')
{
    $t=$hours*100;
    echo "Total Salary= $t";
}
else if($categ=='Full Time')
{
    if($salary<10000)
    {
        $da=$salary*0.45;
        $hra=$salary*0.1;
        $pf=0;
        $tax=0;
    }
    else if($salary<50000 && $salary>=10000)
    {
        $da=$salary*0.75;
        $hra=$salary*0.2;
        $pf=1200;
        $tax=$salary*0.05;
    }
    else if($salary>50000)
    {
        $da=$salary*0.9;
        $hra=$salary*0.3;
        $pf=$salary*0.05;
        $tax=$salary*0.15;
    }
    $gross=$salary+$da+$hra;
    $net=$gross-$pf;
    echo "Gross Salary= $gross";
    echo "<br>";
    echo "Net Salary= $net";
}
else if($categ=='Contract')
{
    if($salary<5000)
    {
        $da=200;
        $hra=0;
        $tax=0;
    }
    else if($salary>5000 && $salary<=25000)
    {
        $da=$salary*0.15;
        $hra=1000;
        $tax=$salary*0.03;
    }
    else if($salary>25000)
    {
        $da=$salary*0.2;
        $hra=$salary*0.05;
        $tax=$salary*0.09;
    }
    $gross=$salary+$da+$hra;
    $net=$gross-$pf;
    echo "Gross Salary= $gross";
    echo "<br>";
    echo "Net Salary= $net";
}
?>
</body>
</html>