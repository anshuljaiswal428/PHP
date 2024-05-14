<html>
    <head>
        <title>
            COUNT PATTERN
        </title>
    </head>
    <body>
        <?php
            for($i = 1; $i<4; $i++){
                printf("%d \t",$i);
            }
            echo"<br>";
            $j=4;
            while($j<=6){
                printf("%d \t",$j);
                $j+=1;
            }
            echo"<br>";
            $k=7;
            do{
                printf("%d \t",$k);
                $k+=1;
            }while($k<=9)
        ?>
    </body>
</html>