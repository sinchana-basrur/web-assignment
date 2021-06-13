<html>
<body>
    <div>
        <form action="" method="post">
            <label for="">Enter number </label>
            <input type="number" name="num" id="">
            <br><br>
            <input type="submit" value="submit" name="submit">
        </form>
        <?php
        function Factorial($number)
        {
            $factorial = 1;
            for ($i = 1; $i <= $number; $i++) {
                $factorial = $factorial * $i;
            }
            return $factorial;
        }
        if (isset($_POST['submit'])) {
            $number = $_POST['num'];
            $fact = Factorial($number);
            echo "Factorial = $fact";
        }
        ?>
    </div>
</body>
</html>