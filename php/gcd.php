<!DOCTYPE html>
<title>Yvaine－UNIX HW08(2) gcd.php</title>
<html>

<body>

    <?php
    $x = $_POST['x'];
    $y = $_POST['y'];
    if ($x > 0 && $y > 0) {
        // Function to return GCD of two numbers
        function gcd($x, $y)
        {
            if ($y == 0)
                return $x;
            return gcd($y, $x % $y);
        }

        // Function to return LCM of two numbers
        function lcm($x, $y)
        {
            return ($x * $y) / gcd($x, $y);
        }
        echo "gcd($x, $y) = ", gcd($x, $y);
        echo "<br>";
        echo "lcm($x, $y) = ", lcm($x, $y);
    } else {
        echo "請輸入正整數<BR>";
        echo "備註：正整數為大於 0 的整數";
    }
    ?>

</body>

</html>