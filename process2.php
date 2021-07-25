<?php
session_start();
            $US=filter_input(INPUT_POST,'US');
            $T= filter_input(INPUT_POST,'T');
            $OUS=filter_input(INPUT_POST,'OUS');
            $OT=filter_input(INPUT_POST,'OT');
            $_SESSION['CPM']=round($US/$T,3);
            $_SESSION['Process_Quality']=$OUS/$OT;
            $_SESSION['process']=1;            
              ?>
<script>
    window.location.href='home.php';
    </script>