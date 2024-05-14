<html>
    <head>
        <title>
            STAR PATTERN
        </title>
    </head>
    <body>
        <?php
            $k=0;
            for ($i = 4; $i > 0; $i--){
                for ($j = 0; $j <= $i-1; $j++){
                    printf("&nbsp;");
                }
                for ($r = 0; $r <= $k; $r++){
                    print("* &nbsp;");
                }
                printf("<br>");
                $k += 1;
            }
        ?>
    </body>
</html>