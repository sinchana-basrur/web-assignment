<html>
<center>
     <h2>Item Store</h2>
    <form method="post" action="">
        Enter the item names:<input type="text" name="names" required /><br><br>
        Enter the item prices:<input type="text" name="prices" required />
        <br><br>
        <input type="submit" name="submit" value="Store">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="reset" name="reset" value="Reset">
    </form>
<?php
     if($_POST)  
    {   
        $names = $_POST['names']; 
        $prices = $_POST['prices'];
        $nme = explode(',',$names);
        $x = count($nme);
        $prc = explode(',',$prices);
        echo "<table>
        <tr>
            <th>Item Name</th>
            <th>Item Price</th>
        </tr>";
        for($i=0;$i<$x;$i++)
        {
            echo "<tr>";
            echo "<td>{$nme[$i]}</td>
            <td>{$prc[$i]}</td>";
        }
        echo "<tr></table>";
        echo "<br>";
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $prc[$i];
        }
        echo 'Total Amount Is: '.$total;

        $mx= max($prc);
        $ky = array_search($mx, $prc);
        echo '<br>';
        echo 'Costliest item Is: '.$nme[$ky];

        $mn= min($prc);
        $key = array_search($mn, $prc);
        echo '<br>';
        echo 'Cheapest item Is: '.$nme[$key];
}     
?>
</center>
</body>
</html>
