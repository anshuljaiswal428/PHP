<html>
    <head>
        <title>
            ODD NUMBERS 1 TO 100
        </title>
    </head>
    <body>
        <?php
            echo"ODD NUMBERS FROM 1 TO 100 ARE BELOW - ";
            echo"<br>";
            for($i = 1; $i <= 100; $i+=2){
                printf("%d \t,",$i);
            }
        ?>
    </body>
</html>