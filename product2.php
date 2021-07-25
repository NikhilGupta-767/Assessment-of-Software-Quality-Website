<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Software Quality|FORM</title>          
       <link rel="stylesheet" href="styling.css" type="text/css" > 
    </head>
    <body>
        <div id="resposive">
            <div class="blank">Blank</div>
            <a href=primary.php><div id="page_heading">Assessment of software Quality IN DEVOPS</div></a>            
            <div class="blank">Blank</div>
            <form method="post" action="product3.php">
            <div class="package">
                <a href=product2.php><div class="title hovering">Product based Metrices</div></a>                                            
                <div class="topic">Reliability</div>                                   
                <div class="product sub_topic">Component Reliability Measure(CRM)</div>
                <div class="sub_topic">No of failures(N):
                <input class="input" type="number" placeholder="Enter here" name="N" required></div>
                <div class="sub_topic">Times of failure(X):
                <input class="input" type="number" placeholder="Enter here" name="X" required></div>
                <div class="sub_topic">Value of constant(CONS):
                    <input class="input" type="number" value="3" min="1" name="CONS" required></div>
                <div class="sub_topic">No of components for Overall CRM(C):
                <input  type="number" class="input" placeholder="Enter here" min="1" name="C" required></div>
                <div class="topic"> Risk Coverage</div>  
                 <div class="product sub_topic">Component Risk Coverage Measure(CRCM)</div>              
                <div class='sub_topic'>No of components(CR):                     
                    <?php
                    $CR= filter_input(INPUT_POST,'CR');
                 echo "<input class='input' type='number' value=$CR min='1' disabled>
                </div>";
                 for($i=1;$i<=$CR;$i=$i+1)
                 {
                 echo "<div class='sub_topic risk'>Risk executed positively($i):
                <input class='input risk1' type='number' placeholder='Enter here' name='REP$i' required></div>";  
                echo "<div class='sub_topic'>Total risk test($i):
                <input class='input' type='number' placeholder='Enter here' name='TRT$i' required></div> "; 
                 } 
                 $_SESSION['COMP']=$CR;
                 ?>           
                <input id='button2' type='submit' value='Submit'>                                 
            </div>  
            </form>
         <div class="package">
                <a href=project1.php><div class="title hovering">Project based Metrices</div></a>    
                 <?php
                if($_SESSION['project']==1)
                {
                    echo"<div class='filled'>Completed</div>";
                }
                ?>
        </div>
            <div class="package">
                <a href=process1.php><div class="title hovering">Process based Metrics</div></a>   
                <?php
                if($_SESSION['process']==1)
                {
                    echo"<div class='filled'>Completed</div>";
                }
                ?>   
            </div> 
            <div id="blank2">blank2</div>
        </div>        
    </body>
</html>