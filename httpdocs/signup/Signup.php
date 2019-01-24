<?php 
    require_once("../navigation/nav.php");
    require_once("phpsignup.php");
?>                  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Blessed | Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/mycss.css" />
    <script src="../design/js/bootstrap.min.js"></script>
</head>
<body>  
    <div class="jumbotron text-purple">
        <div class="row">
            <div class="col-sm-12">
                <form method="POST">           
                    <h1 class="form-group">Register</h1>
                    <div class="form-group">
                        <label>First Name:</label>                
                        <input  class="form-control" type="text" name="First_name" required> 
                    </div>
                    <div class="form-group">  
                        <label>Last Name:</label>                 
                        <input class="form-control" type="text" name="Last_name" required> 
                    </div>  
                    <div class="form-group">    
                        <label>Email:</label>                
                        <input class="form-control" type="email" name="Email" required> 
                    </div> 
                    <div class="text-danger">  
                        <?php
                            echo $message1;
                        ?>
                    </div>
                    <div class="form-group">
                        <label> Password:</label>               
                        <input class="form-control" type="password" name="Password" minlength=8 maxlength=20 required title="Minimun number of characters is 8, maximum number is 20"> 
                    </div>
                    <div class="form-group">  
                        <label> Confirm Password:  </label>                   
                        <input class="form-control" type="password" name="confirmPassword" minlength=8 maxlength=20 required title="Minimun number of characters is 8, maximum number is 20"> 
                    </div>  
                    <div class="text-danger">  
                        <?php
                            echo $message;
                        ?>
                    </div>
                    <div class="form-group">    
                        <label>Date of Birth: </label>                 
                        <input class="form-control" type="date" name="DoB"> 
                    </div> 
                    <div class="form-group">    
                        <input class="btn btn-purple" type="submit" value="Submit" name="SubmitSignupForm">                    
                    </div> 
                </form>
            </div>
            
        </div>
    </div>    

     
   
    
    
</body>
</html>