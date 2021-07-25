<?php
session_start();
            $N= filter_input(INPUT_POST,'N');
            $X= filter_input(INPUT_POST,'X');
            $CONS= filter_input(INPUT_POST,'CONS');
            $C= filter_input(INPUT_POST,'C');
            $CRM=exp(-$CONS*($N-$X+1));           
            $OCRM=0;
            $ORCM=0;
            $COMP=$_SESSION['COMP'];
            for($i=1;$i<=$C;$i=$i+1)
            {
                $OCRM=$OCRM+$CRM;
            }
             for($i=1;$i<=$COMP;$i=$i+1)
                {
                    $REP=filter_input(INPUT_POST,"REP$i");
                     $TRT=filter_input(INPUT_POST,"TRT$i");
                    $_SESSION["CRC$i"]=round(($CRM*8*100)/$TRT,3);
                    $ORCM=$ORCM+$REP;                   
                }
                $_SESSION['Product_Quality']=$OCRM+$ORCM;               
                $_SESSION['product']=1;                
              ?>
<script>
    window.location.href='home.php';
    </script>