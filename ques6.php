<html>
<body>
<form action="" method="post">
<label>Enter a number: </label>
    <input type="text" name="num">
    <button name="submit">ok</button>
</form>
<?php
if(isset($_POST['submit']))
{
   $a=$_POST['num'];
   $n=2;
   $f1=0;
   $f2=1;
   echo "Fibonacci series: $f1  $f2  ";
   while($n<$a)
   {
       $f3=$f2+$f1;
       echo "$f3  ";
       $f1=$f2;
       $f2=$f3;
       $n=$n+1;
   }
}
?>
</body>
</html>