<html>
    <head>
        <title>
            FILE HANDLING 1
        </title>
    </head>
        <?php
            $fp = fopen("XYZ.txt","w");
            printf("FP - %b",$fp);
            if($fp){
                $data = "Hello! This is BIT NOIDA! \n";
                fwrite($fp,$data);
                fclose($fp);
                echo("<br>Data written to the file!");
            }
            else{
                echo"<br>Error opening file!";
            }
        ?>
    </body>
</html>