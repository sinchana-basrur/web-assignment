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
$n=$a;
$r=0;
$s=0;
while($n!=0)
{
    $d=$n%10;
    $s=$s+$d;
    $n=$n/10;
}
echo "Sum of digits: $s";
echo "<br>";
$n=$a;
while($n!=0)
{
    $d=$n%10;
    $r=$r*10+$d;
    $n=(int)($n/10);
}
echo "Reversed number: $r";
echo "<br>";
if($r==$a)
{
    echo "It is a palindrome number";
}
else
{
    echo "It is not a palindrome number";
}
}
?>
</body>
</html>