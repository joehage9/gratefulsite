<?php 
    require_once("../navigation/nav.php");
    require_once("phpmain.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blessed | Welcome !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/mycss.css" />
    <script src="../design/js/bootstrap.min.js"></script>
</head>
<body>   
    <div class="jumbotron text-purple">            
        <div class="row">  
            <div class="col-sm-12">                
                <h1>Greetings!</h1>    
                <form method="POST">
                    <div class="form-group">
                        <label>What are you grateful for:</label>  
                        <small id="emailHelp" class="form-text text-muted">In other words, what are you profoundly thankful for!</small>  
                        <input type="text" class="form-control"  maxlength="200" title="'A grateful heart is a beginning of greatness!' James E. Faust" value="" name="gratefulInput" required>
                    </div>                    
                    <div class="form-group">   
                        <label>Blessings of today:</label>
                        <small id="emailHelp" class="form-text text-muted">A special favor, mercy, or benefit.</small>
                        <input type="text" class="form-control" maxlength="200" title="'When I started counting my blessings, my whole life turned around.' Willie Nelson" value="" name="blessingsInput" required>
                    </div>                   
                    <div class="form-group">    
                        <label>What did you achieve today:</label>
                        <small id="emailHelp" class="form-text text-muted">A result or accomplishment gained by effort, no matter how big or small.</small>
                        <input type="text" class="form-control" maxlength="200" title="'The roots of true achievement lie in the will to become the best that you can become. Harold Taylor'" value="" name="achieveInput" required>
                    </div>   
                    <div class="form-group">
                        <label for="exampleInputEmail">Email:</label>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        <input  class="form-control" type="email" name="Email" required>                       
                    </div> 
                    <div class="form-group">   
                        <input class="btn btn-group-lg btn-purple" type="submit" value="Submit" name="submitUserData" >
                        <input class="btn btn-group-lg btn-purple" type="reset" value="Reset">
                    </div>
                </form> 
                <form method="POST">
                    <input class="btn btn-group-lg btn-purple" type="submit" value="show me my progress!" name="showProgress" >
                </form>
            </div>            
        </div>
    </div>    
   
    </body>
</html>