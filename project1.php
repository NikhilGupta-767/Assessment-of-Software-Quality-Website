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
            <div class="package">
                <a href=product1.php><div class="title hovering">Product based Metrices</div></a> 
                  <?php
                if($_SESSION['product']==1)
                {
                    echo"<div class='filled'>Completed</div>";
                }
                ?>
            </div>   
             <form method="post" action="project2.php">               
            <div class="package">
                <a href=project1.php><div class="title hovering">Project based Metrices</div></a>                    
                <div class="topic">Defect Density</div>                                   
                <div class="sub_topic">Number of Defects(D):                     
                    <input class='input' type="number" placeholder='Enter here' name="D" required></div>               
                <div class="sub_topic">Size of project in KLOC(SP): 
                <input class="input" type="number" placeholder="Enter here" name="SP" required></div>
                <div class="sub_topic">Size of Component in KLOC(SPC): 
                    <input class="input" type="number" placeholder="Enter here" name="SPC" required></div>                  
                <div class="topic">Deployment Frequency</div>                 
                <div class="sub_topic">Number of deployments(DP):
                <input class="input" type="number" placeholder="Enter here" name="DP" required></div>
                <div class="sub_topic">Unit of time(TD):  
                <input class="input" type="number" placeholder="Enter here" name="TD" required></div>  
                <input id='button2' type='submit' value='Submit'>
            </div>
             </form>
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