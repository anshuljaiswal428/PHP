<html>
    <head>
        <tittle>ARRAY</tittle>
    </head>
    <body>
        <?php
            $a=array(array(1,2,3),array(2,5,7),array(7,8,6));
            print_r($a);
            for($i=0;$i<3;$i++)
            {
                for($j=0;$j<3;$j++)  
                printf("%d\t",$a[$i][$j]);
                print("<br>");
            }
        ?>
    </body>
</html>