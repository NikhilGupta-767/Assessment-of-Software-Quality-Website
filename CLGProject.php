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
            <a href=front.php><div id="page_heading">Software Quality</div></a>
            <form method="post" action="CLG_RESULT.php">
            <div class="package">
                <div class="title">Product based Metrices</div>
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
                </div>  </div>     
                
                            
         <div class="package">
                <div class="title">Project based Metrices</div>
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
        </div>
            <div class="package">
                <div class="title">Process based Metrics</div>
                <div class="topic">Productivity Measure</div>                                   
                <div class="sub_topic">Number of user stories of  component(US): 
                <input class="input" type="number" placeholder="Enter here" name="US" required></div>
                <div class="sub_topic">Time taken to completeuser story of component(T):
                <input class="input" type="number" placeholder="Enter here" name="T" required></div>
                <div class="sub_topic">Total  Number of user stories (OUS): 
                <input class="input" type="number" placeholder="Enter here" name="OUS" required></div>       
                 <div class="sub_topic">Total Time taken to complete all user stories(OT):  
                <input class="input" type="number" placeholder="Enter here" name="OT" required></div>  
            </div>
                <input id="button" type="submit" value="Result">
            
            
            </form>           
        </div>        
    </body>
</html>
