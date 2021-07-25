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
            <div class="package">
                <a href=process1.php><div class="title hovering">Process based Metrics</div></a>
<?php
                if($_SESSION['process']==1)
                {
                    echo"<div class='filled'>Completed</div>";
                }
                ?>                
            </div> 
            <?php
            if($_SESSION['process']==1 && $_SESSION['project']==1 && $_SESSION['product']==1)
                {
            
            echo "<a href=CLG_RESULT.php><input id='button' type='submit' value='Result'></a>";
                    }
                    ?>
            <div id="blank2">blank2</div>
        </div>        
    </body>
</html>
