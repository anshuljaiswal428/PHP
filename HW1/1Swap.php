<html>
    <head>
        <title>
            SWAP 2 NUMBERS
        </title>
    </head>
    <body>
        <?php
            $a = 6;
            $b = 8;
            echo"Value of a before swap - ",$a;
            echo"<BR>Value of a before swap - ",$b;
            $temp = $a;
            $a = $b;
            $b = $temp;
            echo"<br>Changed value of a - ",$a;
            echo"<br>Changed value of b - ",$b;
        ?>
    </body>
</html>