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
            <form method="post" action="product2.php">
            <div class="package">
                <a href=product1.php><div class="title hovering">Product based Metrices</div></a>                                            
                <div class='sub_topic'>No of components for Risk Coverage Measure:                              
                    <input class='input' type='number' value='1' min='1' name="CR" required>        
                </div>  
                <input id='button2' type='submit' value='Go'>
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