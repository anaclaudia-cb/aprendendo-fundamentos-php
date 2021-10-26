<?php
        $numb1 = $_GET['numb1'];
        $numb2 = $_GET['numb2'];
        $numb3 = $_GET['numb3'];
        $numb4 = $_GET['numb4'];
        $numb5 = $_GET['numb5'];
        $numb6 = $_GET['numb6'];
        $numb7 = $_GET['numb7'];
        $numb8 = $_GET['numb8'];
        $numb9 = $_GET['numb9'];
        $numb10 = $_GET['numb10'];

        $media = (
            $numb1 + $numb2 + $numb3 + $numb4 + $numb5 + $numb6 +$numb7 +$numb8 + $numb9 + $numb10 )/10;
            echo "Média: $media";
            
    ?>