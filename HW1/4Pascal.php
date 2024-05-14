<html>
    <head>
        <title>
            PASCAL TRIANGLE
        </title>
    </head>
    <body>
        <?php
            function f($n) {
                if ($n <= 1) return 1;
                else return $n * f($n - 1);
            }
            function pascal() {
                $n = 5;
                for ($i = 0; $i < $n; $i++) {
                    for ($j = 0; $j < $n - $i + 1; $j++) {
                        printf("&nbsp;");
                    }
                    for ($j = 0; $j < $i + 1; $j++) {
                        printf(floor(f($i) / (f($j) * f($i - $j))), "  ");
                    }
                    printf("<br>");
                }
            }
            pascal();
        ?>
    </body>
</html>