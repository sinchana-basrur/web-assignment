<html>
<body>
<form method="post" action="">
    Enter the string:<input type="text" name="string"><br>
    <input type="radio" name="operation" value="reverse">REVERSE
    <input type="radio" name="operation" value="length">LENGTH OF STRING<br>
    <input type="radio" name="operation" value="substr">SUBSTRING
    <input type="radio" name="operation" value="upper">UPPER CASE<br>
    <input type="radio" name="operation" value="lower">LOWER CASE
    <input type="radio" name="operation" value="words">NO.OF WORDS<br>
    <button name="submit">submit</button>
</form>
<?php
    if($_POST)
    {
        $string=$_POST['string'];
        $op=$_POST['operation'];
        switch($op)
        {
            case 'reverse':$rev=strrev($string);
            echo "the reversed string is $rev";
            break;
            case 'length':$len=strlen($string);
            echo "the length of the string is $len";
            break;
            case 'substr':$sub=substr($string,2,5);
            echo "the substring of the string is $sub";
            break;
            case 'upper':$upper=strtoupper($string);
            echo "the string is uppercase $upper";
            break;
             case 'lower':$lower=strtolower($string);
            echo "the string is uppercase $lower";
            break;
            case 'words':$word=str_word_count($string);
            echo "the number of words in the string is $word";
            break;
        }
    }
?>
</body>
</html>