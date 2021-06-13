<html>
<body>
<form action="" method="post">
<label>Enter two number: </label>
    <input type="text" name="num1">
    <input type="text" name="num2">
    <select name="operations">
		<option value="1">Addition</option>
		<option value="2">Subtracton</option>
		<option value="3">Multiplication</option>
        <option value="4">Division</option>
	</select>
    <button name="submit">ok</button>
</form>
<?php
if(isset($_POST['submit']))
{
   $a=$_POST['num1'];
   $b=$_POST['num2'];
   $o=$_POST['operations'];
   switch($o)
   {
       case 1:$r=$a+$b;
       break;
       case 2:$r=$a-$b;
       break;
       case 3:$r=$a*$b;
       break;
       case 4:$r=$a/$b;
       break;
   }
   echo "Result: $r";
}
?>
</body>
</html>