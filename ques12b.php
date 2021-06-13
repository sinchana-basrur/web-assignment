<html>
<body>
    <h1>Bill</h1>
    <br>
    <table border="1">
        <th colspan="6">Bill</th>
        <tr>
            <td>Sl. No.</td>
            <td>Item Name</td>
            <td>Item Brand</td>
            <td>Item Price</td>
            <td>Item Code</td>
            <td>Item Quantity</td>
        </tr>
        <tr>
            <td><?php echo $_POST['slno']; ?></td>
            <td><?php echo $_POST['item']; ?></td>
            <td><?php echo $_POST['name']; ?></td>
            <td><?php echo $_POST['price']; ?></td>
            <td><?php echo $_POST['code']; ?></td>
            <td><?php echo $_POST['qty']; ?></td>

        </tr>
        <tr>
            <td colspan="6" style="text-align: right;">Total : Rs. <?php echo $_POST['price'] * $_POST['qty']; ?></td>
        </tr>
    </table>

</body>

</html>