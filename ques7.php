<html>
<body>
<form action="" method="post">
<label>Enter number of units: </label>
    <input type="text" name="num">
    <button name="submit">submit</button>
</form>
<?php
if(isset($_POST['submit']))
{
   $a=$_POST['num'];
   if($a<=100)
   {
       $b=$a*3;
   }
   else if($a<200)
   {
       $r=$a-100;
       $b=$r*4+300;
   }
   else if($a<300)
   {
       $r=$a-200;
       $b=$r*5+300+400;
   }
   else
   {
       $r=$a-300;
       $b=$r*6+500+400+300;
   }
   echo "Total bill amount: $b";
}
?>
</body>
</html>