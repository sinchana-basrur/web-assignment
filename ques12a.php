<html>
<body>
<h1>A-Mart</h1>
<h3>(Welcome to A-Mart online shopping)</h3>
<hr>
<h2>Please select your item :</h2>
<form action="ques12b.php" method="post">
    <select name="item" id="">
        <option value="pen">Pen</option>
        <option value="pencil">Pencil</option>
        <option value="book">Book</option>
        <option value="eraser">Eraser</option>
        <option value="ruler">Ruler</option>
    </select>
    <table>
    <tr>
        <th>Description</th>
        <th>Values</th>
    </tr>
    <tr>
        <td>Sl. No.</td>
        <td><input type="number" name="slno"></td>
    </tr>
    <tr>
        <td>Item name</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>Item Price</td>
        <td><input type="number" name="price"></td>
    </tr>
    <tr>
        <td>Item Code</td>
        <td><input type="number" name="code"></td>
    </tr>
    <tr>
        <td>Quantity</td>
        <td><input type="number" name="qty"></td>
    </tr>
    </table>
    <br>
    <input type="submit" name="submit" value="Generate Bill">
</form>
</body>
</html>