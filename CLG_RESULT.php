<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
        <title>Software Quality|RESULT</title>          
       <link rel="stylesheet" href="styling.css" type="text/css" > 
    </head>
    <body>
        <div id="resposive">
           <div class="blank">Blank</div>
            <a href=primary.php><div id="page_heading">Assessment of software Quality IN DEVOPS</div></a>
                <div class="package result_block">
                <div class="title">Overall software quality</div>
                <div class="topic">ANALYSIS</div>                 
                <?php 
                $COMP=$_SESSION['COMP'];
                for($i=1;$i<=$COMP;$i=$i+1)
                {                   
                    $CRC=$_SESSION["CRC$i"];
                    echo "<div class='sub_topic'>Component1 risk coverage(CRC$i) %= 
                    <div class='result output'>$CRC</div></div>";
                }              
                $Process_Quality=$_SESSION['Process_Quality'];
                $Project_Quality=$_SESSION['Project_Quality'];
                $Product_Quality=$_SESSION['Product_Quality'];
                $Overall=round($Process_Quality+$Project_Quality+$Product_Quality,3);
                $CDD=$_SESSION['CDD'];
                $CPM=$_SESSION['CPM'];                
                ?>
                <div class='sub_topic'>Component Defect Density(CDD)= 
                <div class='result output'><?php echo"$CDD"?></div></div>
                <div class='sub_topic'>Component Productivity Measure(CPM)= 
                <div class='result output'><?php echo"$CPM"?></div></div>
                <div class="sub_topic sub">The Overall Software quality is<div class="result"><?php echo"$Overall" ?></div> </div>        
            </div>   
        </div>
        </body>
    </html>
   