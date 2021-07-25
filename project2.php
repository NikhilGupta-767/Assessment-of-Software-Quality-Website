<?php
session_start();
            $D= filter_input(INPUT_POST,'D');
            $SP= filter_input(INPUT_POST,'SP');
            $SPC=filter_input(INPUT_POST,'SPC');
            $DP= filter_input(INPUT_POST,'DP');
            $TD= filter_input(INPUT_POST,'TD');
            $_SESSION['CDD']=round($D/$SPC,3);
            $ODD=$D/$SP;
            $DF=$DP/$TD;
            $_SESSION['Project_Quality']=$DF-$ODD;   
             $_SESSION['project']=1;  
            ?>
<script>
    window.location.href='home.php';
    </script>