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
            <div class="package">
                <a href=project1.php><div class="title hovering">Project based Metrices</div></a>    
                 <?php
                if($_SESSION['project']==1)
                {
                    echo"<div class='filled'>Completed</div>";
                }
                ?>
                               
            </div>
             <form method="post" action="process2.php">
            <div class="package">
                <a href=process1.php><div class="title hovering">Process based Metrics</div></a>
                <div class="topic">Productivity Measure</div>                                   
                <div class="sub_topic">Number of user stories of  component(US): 
                <input class="input" type="number" placeholder="Enter here" name="US" required></div>
                <div class="sub_topic">Time taken to complete user story of component(T):
                <input class="input" type="number" placeholder="Enter here" name="T" required></div>
                <div class="sub_topic">Total  Number of user stories (OUS): 
                <input class="input" type="number" placeholder="Enter here" name="OUS" required></div>       
                 <div class="sub_topic">Total Time taken to complete all user stories(OT):  
                <input class="input" type="number" placeholder="Enter here" name="OT" required></div>  
                <input id='button2' type='submit' value='Submit'>                
            </div>
                 </form>
            <div id="blank2">blank2</div>
        </div>        
    </body>
</html>