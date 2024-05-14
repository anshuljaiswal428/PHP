<html>
    <head>
        <title>
            COMPARE THREE NUMBERS
        </title>
    </head>
    <body>
        <?php
            function compare($num1, $num2, $num3) {
                if ($num1 >= $num2) {
                    if ($num1 >= $num3) {
                        return "$num1 is the largest number.";
                    } else {
                        return "$num3 is the largest number.";
                    }
                } else {
                    if ($num2 >= $num3) {
                        return "$num2 is the largest number.";
                    } else {
                        return "$num3 is the largest number.";
                    }
                }
            }            
            $n1 = 5;
            $n2 = 7;
            $n3 = 2;
            
            echo compare($n1, $n2, $n3);
        ?>
    </body>
</html>